<?php

namespace App\Form;

use App\Entity\Proposition;
use App\Form\PropositionFileType;
use App\Enum\PropositionStatus;
use App\Enum\PropositionCategory;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
            ->add('title')
            ->add('description')
            ->add('status', ChoiceType::class, [
                'choices' => array_combine(
                    array_map(fn($status) => $status->name, PropositionStatus::cases()),
                    PropositionStatus::cases()
                ),
                'choice_label' => fn($status) => $status->name,
                'choice_value' => fn(?PropositionStatus $status) => $status?->value,
            ])
            ->add('category', ChoiceType::class, [
                'choices' => PropositionCategory::cases(),
                'choice_label' => fn($choice) => $choice instanceof PropositionCategory ? ucfirst($choice->value) : $choice,
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('files', CollectionType::class, [
                'entry_type' => PropositionFileType::class,
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