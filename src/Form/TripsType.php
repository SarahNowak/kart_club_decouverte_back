<?php

namespace App\Form;

use App\Entity\Trips;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TripsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imgCard')
            ->add('circuit')
            ->add('title')
            ->add('adress')
            ->add('date')
            ->add('description')
            ->add('classAdult')
            ->add('materialAdult')
            ->add('tarifAdultMember')
            ->add('tarifAdultExt')
            ->add('tarifAdult')
            ->add('classYoung')
            ->add('materialYoung')
            ->add('tarifYoungMember')
            ->add('tarifYoungExt')
            ->add('tarifYoung')
            ->add('classMinJunior')
            ->add('classMaxJunior')
            ->add('materialJunior')
            ->add('tarifJuniorMember')
            ->add('tarifJuniorExt')
            ->add('tarifJunior')
            ->add('sessionJunior')
            ->add('photosTrip')
            ->add('coordinates')
            ->add('sessionYoung')
            ->add('sessionAdult')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Trips::class
        ]);
    }
}
