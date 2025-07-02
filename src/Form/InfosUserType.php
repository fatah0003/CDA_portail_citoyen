<?php

namespace App\Form;

use App\Entity\InfosUser;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InfosUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('city', TextType::class, [
                'label' => 'Ville',
                'required' => true,
                'label_attr' => [
                    'class' => 'label-form',
                ],
                'attr' => [
                    'data-action' => 'address-input',
                    'class' => 'input-form'
                ],
            ])
            ->add('zipCode', TextType::class, [
                'label' => 'Code postal',
                'required' => true,
                'label_attr' => [
                    'class' => 'label-form',
                ],
                'attr' => [
                    'data-zip' => 'zip',
                    'class' => 'input-form'
                ],
            ])
            ->add('phoneNumber')
            ->add('userName')
            ->add('birthDate')

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => InfosUser::class,
        ]);
    }
}
