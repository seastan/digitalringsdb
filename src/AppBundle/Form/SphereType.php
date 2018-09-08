<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SphereType extends AbstractType {
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
  public function buildForm(FormBuilderInterface $builder, array $options) {
      $builder
          ->add('code')
          ->add('name')
          ->add('is_primary')
          ->add('uuid');
  }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Sphere'
        ]);
    }

    /**
     * @return string
     */
    public function getName() {
        return 'appbundle_sphere';
    }
}
