<?php

namespace AnunciosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
<<<<<<< HEAD
=======
use AnimalesBundle\Form\AnimalesType;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

>>>>>>> david3

class AnunciosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
<<<<<<< HEAD
        $builder
            ->add('titulo')
            ->add('categoria')
            ->add('idAnimal')
            ->add('usuario')
            
        ;
=======
         $builder->add('categoria', 'choice',array(
                'choices'=>array(
                    'Camadas' =>'Camadas',
                    'Adopciones' =>'Adopciones',
                    'Se busca' =>'Se busca',
                     'Protectoras' =>'Protectoras'
                    
                    ),
                    ));
        $builder
            ->add('titulo')
            
            ->add('animal')
           # ->add('user')
        ;
       
        $builder->add('animal', AnimalesType::class,array('by_reference'   => false));
        
         
>>>>>>> david3
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AnunciosBundle\Entity\Anuncios'
        ));
    }
}
