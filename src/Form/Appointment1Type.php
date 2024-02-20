<?php

namespace App\Form;

use App\Entity\Appointment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class Appointment1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
{
    $builder
        ->add('date', DateType::class, [
            'label' => 'Date of Appointment',
            'widget' => 'single_text',
            'attr' => [
                'placeholder' => 'YYYY-MM-DD',
            ],
            // Add more options here as needed
        ])
        ->add('hourOfAppointment', TimeType::class, [
            'label' => 'Time of Appointment',
            'widget' => 'single_text',
            'attr' => [
                'placeholder' => 'HH:MM',
            ],
            // Add more options here as needed
        ])
        ->add('nameOwner', TextType::class, [
            'label' => 'Owner Name',
            'attr' => [
                'placeholder' => 'Enter owner name',
            ],
            // Add more options here as needed
        ]);
}

public function configureOptions(OptionsResolver $resolver): void
{
    $resolver->setDefaults([
        'data_class' => Appointment::class,
    ]);
}

}