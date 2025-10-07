<?php

namespace App\Form;

use App\Entity\InfosUser;
use Symfony\Component\Form\Extension\Core\Type\DateType;
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
            ->add('firstName', TextType::class, [
                'label' => 'Prénom',
                'label_attr' => ['class' => 'label-form'],
                'attr' => ['class' => 'input-form'],
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Nom',
                'label_attr' => ['class' => 'label-form'],
                'attr' => ['class' => 'input-form'],
            ])
            ->add('userName', TextType::class, [
                'label' => "Nom d'utilisateur",
                'label_attr' => ['class' => 'label-form'],
                'attr' => ['class' => 'input-form'],
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville',
                'required' => true,
                'label_attr' => ['class' => 'label-form'],
                'attr' => [
                    'data-action' => 'address-input',
                    'class' => 'input-form',
                ],
            ])
            ->add('zipCode', TextType::class, [
                'label' => 'Code postal',
                'required' => true,
                'label_attr' => ['class' => 'label-form'],
                'attr' => [
                    'data-zip' => 'zip',
                    'class' => 'input-form',
                ],
            ])
            ->add('phoneNumber', TextType::class, [
                'label' => 'Téléphone',
                'label_attr' => ['class' => 'label-form'],
                'attr' => ['class' => 'input-form'],
            ])
            ->add('birthDate', DateType::class, [
                'label' => 'Date de naissance',
                'widget' => 'single_text',
                'label_attr' => ['class' => 'label-form'],
                'attr' => ['class' => 'input-form'],
            ]);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => InfosUser::class,
        ]);
    }
}
