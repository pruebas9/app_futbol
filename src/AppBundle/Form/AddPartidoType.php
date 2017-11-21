<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use SC\DatetimepickerBundle\Form\Type\DatetimeType;

class AddPartidoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('nombre', TextType::class, array(
                    'label'     => false,
                    'required'  => 'required',
                    'attr'      => array(
                        'class' => 'form-name form-control',
                        'placeholder' => 'Nombre'
                    )
                ))
                # https://github.com/stephanecollot/DatetimepickerBundle
                ->add('start', DatetimeType::class, array( 
                    'label' => false,
                    'attr'      => array(
                        'class' => 'form-control',
                        'placeholder' => 'Cuándo empieza: '
                    ),
                    'pickerOptions' =>
                    array(
                        'format' => 'yyyy/mm/dd hh:ii',
                        'weekStart' => 1,
                        'autoclose' => true,
                        'startView' => 'month',
                        'minView' => 'hour',
                        'maxView' => 'year',
                        'todayHighlight' => true,
                        'keyboardNavigation' => true,
                        'language' => 'es',
                        'forceParse' => true,
                        'minuteStep' => 10,
                        'viewSelect' => 'hour',
                        )                   
                )) 
                ->add('end', DatetimeType::class, array( 
                    'label' => false,
                    'attr'      => array(
                        'class' => 'form-control',
                        'placeholder' => 'Cuándo termina: '
                    ),
                    'pickerOptions' =>
                    array(
                        'format' => 'yyyy/mm/dd hh:ii',
                        'weekStart' => 1,
                        'autoclose' => true,
                        'startView' => 'month',
                        'minView' => 'hour',
                        'maxView' => 'year',
                        'todayHighlight' => true,
                        'keyboardNavigation' => true,
                        'language' => 'es',
                        'forceParse' => true,
                        'minuteStep' => 10,
                        'viewSelect' => 'hour',
                        )                   
                ))
                ->add('idPabellon', EntityType::class, array(
                    'label' => false,
                    'class' => 'AppBundle:Pabellon',
                    'choice_label' => 'nombre',
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => 'Pabellon'
                    )
                ))
                ->add('Crear', SubmitType::class, array(
                    'attr' => array(
                        'class' => 'form-submit btn btn-success block full-width m-b submit'
                    )
                ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\PartidosEvento'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_partidos_evento';
    }


}
