<?php

namespace App\Form;

use App\Entity\Proposition;
use App\Entity\User;
use App\Enum\PropositionCategory;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
            ->add('title')
            ->add('description')
            ->add('category', ChoiceType::class, [
                'choices' => PropositionCategory::cases(),
                'choice_label' => fn($choice) => $choice instanceof PropositionCategory ? ucfirst($choice->value) : $choice,
                'multiple' => true,
                'expanded' => true,
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
