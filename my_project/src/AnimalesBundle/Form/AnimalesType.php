<?php

namespace AnimalesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnimalesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
            ->add('nombre','text',array('label'=>'Nombre:', 'attr' => array('class' => 'form-control','placeholder' => '...')))
            ->add('tipo','text',array('label'=>'Tipo (perro, gato...):', 'attr' => array('class' => 'form-control','placeholder' => '...')))
            ->add('raza','text',array('label'=>'Raza:', 'attr' => array('class' => 'form-control','placeholder' => '...')))
            ->add('sexo','choice',array('label'=>'Sexo:', 'attr' => array('class' => 'form-control'), 'choices' => array('m' => 'Macho', 'f' => 'Hembra')))
            ->add('nacimiento','date',array('label'=>'Nacimiento:','attr' => array('class' => 'form-control'),'years'=>range(date('Y')-50,date('Y')), 'attr' => array('width' => '100%', 'style' =>'padding:7px')))
            ->add('propietario','text',array('label'=>'Propietario del animal:', 'attr' => array('class' => 'form-control','placeholder' => '...')))
            ->add('pedigri','checkbox',array('label'=>'¿Tiene pedigrí? '))
            ->add('img','file',array('label'=>'Seleccione una imagen'))
            ->add('descripcion','textarea',array('label'=>'Descripción:'))
            ->add('tlf','text',array('label'=>'Teléfono'))
            ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AnimalesBundle\Entity\Animales'
        ));
    }
    

    
}
