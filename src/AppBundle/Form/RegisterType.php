<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RegisterType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('name', TextType::class, array(
                    'label'     => false,
                    'required'  => 'required',
                    'attr'      => array(
                        'class' => 'form-name form-control',
                        'placeholder' => 'Nombre'
                    )
                ))
                ->add('surname', TextType::class, array(
                    'label'     => false,
                    'required'  => 'required',
                    'attr'      => array(
                        'class' => 'form-surname form-control',
                        'placeholder' => 'Apellidos'
                    )
                ))
                ->add('email', EmailType::class, array(
                    'label'     => false,
                    'required'  => 'required',
                    'attr'      => array(
                        'class' => 'form-email form-control email-input',
                        'placeholder' => 'Email'
                    )
                ))
                ->add('phone', TextType::class, array(
                    'label'     => false,
                    'required'  => 'required',
                    'attr'      => array(
                        'class' => 'form-phone form-control',
                        'placeholder' => 'Teléfono'
                    )
                ))                
                ->add('password', PasswordType::class, array(
                    'label'     => false,
                    'required'  => 'required',
                    'attr'      => array(
                        'class' => 'form-password form-control',
                        'placeholder' => 'Contraseña'
                    )
                ))
                ->add('Registrarse', SubmitType::class, array(
                    'attr' => array(
                        'class' => 'form-submit btn btn-success'
                    )
                ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_user';
    }


}
