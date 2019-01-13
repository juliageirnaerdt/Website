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
            ->add('voornaam', TextType::class, array(
            	'attr' => array(
            		'placeholder' => 'Voornaam',
            		'class' => 'form-control'
            		)
            	))
           	->add('achternaam', TextType::class, array(
           		'attr' => array(
           			'placeholder' => 'Achternaam',
            		'class' => 'form-control'
           			)
           		))
           	->add('startdatum', DateTimeType::class, array(
           		'html5' => false,
           		'widget' => 'single_text',
        		'input'  => 'string',
        		'attr' => array(
        			'placeholder' => 'Datum',
            		'class' => 'form-control datetimepicker-input'
           			)
           		))
           //	->add('einddatum', DateTimeType::class)
           	->add('behandeling', ChoiceType::class, array(
           		'attr' => array(
            		'class' => 'form-control'
            		),
           		'choices' => array(
           			'Behandeling 1' => 'Behandeling1',
           			'Behandeling 2' => 'Behandeling2',
           			'Behandeling 3' => 'Behandeling3'
           			),
           		))
           	->add('email', EmailType::class, array(
           		'attr' => array(
           			'placeholder' => 'Email',
            		'class' => 'form-control'
           			)
           		));
        
    }
}