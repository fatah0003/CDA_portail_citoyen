<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\NotBlank;
use App\Form\InfosUserType;
use Symfony\Component\Validator\Constraints\Regex;

class RegistrationForm extends AbstractType
{
    use RegexTrait;

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', null, [
                'label' => 'Adresse e-mail',
                'attr' => [
                    'class' => 'input-form',
                    'placeholder' => 'exemple@domaine.com'
                ],
                'label_attr' => ['class' => 'label-form']
            ])
            ->add('infosUser', InfosUserType::class, [
                'label' => false // les labels et placeholders seront définis dans InfosUserType
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'label' => 'J’accepte les conditions générales',
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'Vous devez accepter nos conditions.',
                    ]),
                ],
                'label_attr' => ['class' => 'checkbox-label']
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options'  => [
                    'attr' => [
                        'autocomplete' => 'new-password',
                        'class' => 'input-form',
                        'placeholder' => 'Votre mot de passe'
                    ],
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Le mot de passe ne doit pas être vide.',
                        ]),
                        new Regex(
                            self::STRONG_PASSWORD,
                            message: 'Le mot de passe doit contenir au minimum huit caractères, avec au moins une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial (#?!@$ %^&*-_).'
                        )
                    ],
                    'label' => 'Mot de passe',
                    'label_attr' => ['class' => 'label-form'],
                ],
                'second_options' => [
                    'attr' => [
                        'autocomplete' => 'new-password',
                        'class' => 'input-form',
                        'placeholder' => 'Confirmez votre mot de passe'
                    ],
                    'label' => 'Confirmer le mot de passe',
                    'label_attr' => ['class' => 'label-form'],
                ],
                'invalid_message' => 'Les mots de passe doivent être identiques.',
                'mapped' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
