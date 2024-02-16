<?php

namespace App\Form;

use App\Entity\Medications;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MedicationsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Description', null, [
                'label' => '<span style="color: blue;">Description</span>', // La description du champ
                'label_html' => true, // Permet le rendu HTML du label
                'attr' => ['class' => 'form-control'] // Ajoutez des classes CSS au champ
            ])
            ->add('NameMedications', null, [
                'label' => '<span style="color: blue;">Nom du médicament</span>',
                'label_html' => true,
                'attr' => ['class' => 'form-control']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Medications::class,
        ]);
    }
}
