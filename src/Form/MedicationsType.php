<?php

namespace App\Form;

use App\Entity\Medications;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;


class MedicationsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('Description', null, [
            'constraints' => [
                new Regex([
                    'pattern' => '/\d/',
                    'match' => false,
                    'message' => 'The description cannot contain numbers.'
                ])
            ]
        ])
        ->add('NameMedications', null, [
            'constraints' => [
                new NotBlank(['message' => 'Name of Medications must not be blank.']),
                new Length([
                    'max' => 255,
                    'maxMessage' => 'Name of Medications cannot be longer than {{ limit }} characters.'
                ])
            ]
        ])
        
            
    
        ->add('MedicalNotes', null, [
            'constraints' => [
                new Length([
                    'max' => 255,
                    'maxMessage' => 'Medical Notes cannot be longer than {{ limit }} characters.'
                ])
            ]
        ])
        ->add('dosage', null, [
            'constraints' => [
                new NotBlank(['message' => 'Dosage must not be blank.']),
                new Regex([
                    'pattern' => '/^\d+(\.\d+)?\s*\w+$/',
                    'message' => 'Invalid dosage format. Please provide a valid format (e.g., "10 mg").'
                ])
            ]
        ]);

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Medications::class,
        ]);
    }
}
