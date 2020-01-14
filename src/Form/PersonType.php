<?php

namespace App\Form;

use App\Entity\Person;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('loginname')
            ->add('password')
            ->add('firstname')
            ->add('preprovision')
            ->add('lastname')
            ->add('dateofbirth')
            ->add('gender')
            ->add('emailadress')
            ->add('hiring_date')
            ->add('salary')
            ->add('street')
            ->add('postal_code')
            ->add('place')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Person::class,
        ]);
    }
}
