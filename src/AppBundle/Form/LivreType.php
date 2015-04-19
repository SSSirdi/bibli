<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LivreType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('isbn13', null, array('attr' => array('class' =>'isbn13' ,
                                                        'maxlength' => 13)))
            ->add('isbn10')
            ->add('titre')
            ->add('description')
            ->add('nbpage')
            ->add('langue')
            ->add('lienImage')
            ->add('sectionOnly','checkbox')
            ->add('editeur')
            //->add('section')
            //->add('etablissement')
            //->add('categories')
            ->add('auteur')

            ->add('rec','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Livre'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_livre';
    }
}
