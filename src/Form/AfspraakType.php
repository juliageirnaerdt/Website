<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class AfspraakType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('voornaam', TextType::class)
           	->add('achternaam', TextType::class)
           	->add('startdatum', DateTimeType::class)
           	->add('behandeling', TextType::class)
           	->add('email', EmailType::class)
           	->add('save', SubmitType::class, array('label' => 'Maak Afspraak'));
        
    }
}