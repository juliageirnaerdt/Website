<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AfspraakType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('voornaam', TextType::class)
           	->add('achternaam', TextType::class)
           	->add('startdatum', DateTimeType::class)
           	->add('behandeling', ChoiceType::class, array(
           		'choices' => array(
           			'Behandeling 1' => 'Behandeling1',
           			'Behandeling 2' => 'Behandeling2',
           			'Behandeling 3' => 'Behandeling3'
           			),
           		))
           	->add('email', EmailType::class)
           	->add('save', SubmitType::class, array('label' => 'Maak Afspraak'));
        
    }
}