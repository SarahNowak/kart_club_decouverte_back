<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserInfoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('email', EmailType::class, [
            'constraints' => [
                new NotBlank(),
                new Email(),
            ]
        ])
        ->add('lastName', TextType::class, [
            // 'constraints' => new NotBlank()
        ])
        ->add('firstName', TextType::class, [
            // 'constraints' => new NotBlank()
        ])
        ->add('adress', TextType::class, [
            // 'constraints' => new NotBlank()
        ])
        ->add('postalCode', TextType::class, [
            // 'constraints' => new NotBlank()
        ])
        ->add('city', TextType::class, [
            // 'constraints' => new NotBlank()
        ])
        ->add('number', TextType::class, [
            // 'constraints' => new NotBlank()
        ])
        ->add('license', TextType::class, [
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
