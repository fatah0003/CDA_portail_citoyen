<?php

namespace App\Form;

use App\Entity\InfosUser;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InfosUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName', TextType::class, [
                'label' => 'Prénom',
                'required' => true,
                'label_attr' => ['class' => 'label-form'],
                'attr' => [
                    'class' => 'input-form',
                    'placeholder' => 'Votre prénom'
                ],
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Nom',
                'required' => true,
                'label_attr' => ['class' => 'label-form'],
                'attr' => [
                    'class' => 'input-form',
                    'placeholder' => 'Votre nom'
                ],
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville',
                'required' => true,
                'label_attr' => ['class' => 'label-form'],
                'attr' => [
                    'data-action' => 'address-input',
                    'class' => 'input-form',
                    'placeholder' => 'Votre ville'
                ],
            ])
            ->add('zipCode', TextType::class, [
                'label' => 'Code postal',
                'required' => true,
                'label_attr' => ['class' => 'label-form'],
                'attr' => [
                    'data-zip' => 'zip',
                    'class' => 'input-form',
                    'placeholder' => '75000'
                ],
            ])
            ->add('phoneNumber', TelType::class, [
                'label' => 'Numéro de téléphone',
                'required' => true,
                'label_attr' => ['class' => 'label-form'],
                'attr' => [
                    'class' => 'input-form',
                    'placeholder' => '06 12 34 56 78'
                ],
            ])
            ->add('userName', TextType::class, [
                'label' => "Nom d'utilisateur",
                'required' => true,
                'label_attr' => ['class' => 'label-form'],
                'attr' => [
                    'class' => 'input-form',
                    'placeholder' => "Votre nom d'utilisateur"
                ],
            ])
            ->add('birthDate', DateType::class, [
                'label' => 'Date de naissance',
                'widget' => 'single_text',
                'required' => true,
                'label_attr' => ['class' => 'label-form'],
                'attr' => [
                    'class' => 'input-form',
                    'placeholder' => 'JJ/MM/AAAA'
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => InfosUser::class,
        ]);
    }
}
