<?php

namespace FormationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PromotionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('logo')
            ->add('nomFormateur')
            ->add('prenomFormateur')
            ->add('dateDeb', 'date')
            ->add('dateFin', 'date')
            ->add('eleve')
            ->add('langage')
            ->add('module')
            ->add('intervenant')
            ->add('semaine')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FormationBundle\Entity\Promotion'
        ));
    }
}
