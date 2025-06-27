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
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('category', ChoiceType::class, [
                'choices' => PropositionCategory::cases(),
                'choice_label' => fn(PropositionCategory $choice) => ucfirst($choice->value),
                'choice_value' => fn(?PropositionCategory $choice) => $choice?->value,
                'multiple' => true,
                'expanded' => true,
            ]);

        $builder->get('category')->addModelTransformer(new PropositionCategoryArrayTransformer());
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Proposition::class,
        ]);
    }
}
