<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        	->add('name', TextType::class, array(
                    'attr' => array(
                        'placeholder' => 'Your Name'
                    ),                
                    'constraints' => array(
                        new NotBlank(array('message' => 'Trebuie sa iti introduci numele!')
                        ),
                        new Regex(array(
                            'pattern' => '/^[\w-]+$/',
                            'message' => 'Adauga un nume valid!'
                        ))
                    )
            ))
        	->add('email', EmailType::class, array(
                    'attr' => array(
                        'placeholder' => 'Adresa ta de email!'
                    ),
                    'constraints' => array(
                        new NotBlank(array(
                            'message' => 'Adauga adresa de email!'   
                        )),
                        new Email(array(
                            'message' => 'Adresa de email este invalida!'
                        ))
                    )

                )
            )
        	->add('message', TextareaType::class, array(
                'attr' => array(
                    'placeholder' => 'Mesajul tau!'
                ),
                'constraints' => array(
                    new NotBlank(array(
                        'message' => 'Adauga mesajul!'
                    )),
                    new Regex(array(
                        'pattern' => '/^[\w-]+$/',
                        'message' => 'Adauga un text valid!'
                    ))
                )
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
    	$resolver->setDefaults([]);
    }
}