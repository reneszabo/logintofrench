<?php

namespace Main\Page\FrontendBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactEmailType extends AbstractType {

  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
            ->add('name', 'text', array(
                'required' => true,
                'label' => 'french.form.name',
                'attr' => array('placeholder' => 'Name')
            ))
            ->add('phone', 'text', array(
                'required' => true,
                'label' => 'french.form.phone',
                'attr' => array('placeholder' => 'Phone')
            ))
            ->add('email', 'email', array(
                'required' => true,
                'label' => 'french.form.email',
                'attr' => array('placeholder' => 'Email')
            ))
            ->add('address', 'text', array(
                'required' => false,
                'label' => 'french.form.address',
                'attr' => array('placeholder' => 'Address')
            ))
            ->add('subject', 'text', array(
                'required' => true,
                'label' => 'french.form.subject',
                'attr' => array('placeholder' => 'Subject')
            ))
            ->add('message', 'textarea', array(
                'required' => true,
                'label' => 'supplier.form.message',
                'attr' => array('placeholder' => 'Message')
            ))
            ->add('save_me', 'submit', array('attr' => array('class' => 'btn btn-primary hide'), 'label' => 'form.save'))
            ->add('save', 'submit', array('attr' => array('class' => 'btn btn-primary submitter', 'onClick'=>"$(this).attr('clicked',1);" ), 'label' => 'form.save'))
    ;
  }

  public function getName() {
    return 'french';
  }

}
