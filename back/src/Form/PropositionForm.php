<?php

namespace App\Form;

use App\Entity\Proposition;
use App\Enum\PropositionCategory;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
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
            ->add('category', ChoiceType::class, [
                'label' => 'Catégorie',
                'choices' => PropositionCategory::cases(),
                'choice_label' => fn($choice) => $choice instanceof PropositionCategory ? ucfirst($choice->value) : $choice,
                'multiple' => true,
                'expanded' => true,
                'label_attr' => ['class' => 'label-form'],
                'attr' => [
                    'class' => 'checkbox-group'
                ],
            ]);

        $builder->get('category')->addModelTransformer($this->transformer);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Proposition::class,
        ]);
    }
}
