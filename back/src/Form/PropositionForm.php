<?php

namespace App\Form;

use App\Entity\Proposition;
use App\Enum\PropositionCategory;
use App\Enum\PropositionStatus;
use App\Form\PropositionFileTypeForm;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Form\DataTransformer\PropositionCategoryArrayTransformer;

class PropositionForm extends AbstractType
{
    private PropositionCategoryArrayTransformer $transformer;

    public function __construct(PropositionCategoryArrayTransformer $transformer)
    {
        $this->transformer = $transformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre de la proposition',
                'required' => true,
                'label_attr' => ['class' => 'label-form'],
                'attr' => [
                    'class' => 'input-form',
                    'placeholder' => 'Saisissez le titre de votre proposition'
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => true,
                'label_attr' => ['class' => 'label-form'],
                'attr' => [
                    'class' => 'input-form',
                    'placeholder' => 'Décrivez votre proposition en détail',
                    'rows' => 5
                ],
            ])
            ->add('status', ChoiceType::class, [
                'choices' => array_combine(
                    array_map(fn($status) => $status->name, PropositionStatus::cases()),
                    PropositionStatus::cases()
                ),
                'choice_label' => fn($status) => $status->name,
                'choice_value' => fn(?PropositionStatus $status) => $status?->value,
            ])
            ->add('category', ChoiceType::class, [
                'label' => 'Catégorie',
                'choices' => PropositionCategory::cases(),
                'choice_label' => fn($choice) => $choice instanceof PropositionCategory ? ucfirst($choice->value) : $choice,
                'multiple' => true,
                'expanded' => true,
                'label_attr' => ['class' => 'label-form'],
                'attr' => ['class' => 'checkbox-group'],
            ])
            ->add('propositionFiles', CollectionType::class, [
                'entry_type' => PropositionFileTypeForm::class,
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'prototype' => true,
            ]);

        $builder->get('category')->addModelTransformer($this->transformer);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(['data_class' => Proposition::class]);
    }
}
