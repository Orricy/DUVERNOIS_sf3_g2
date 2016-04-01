<?php

/**
 * Created by PhpStorm.
 * User: Damien
 * Date: 01/04/2016
 * Time: 15:34
 */

namespace AppBundle\Form\Type\Article;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TagType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('slug')
            ->add('save', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'csrf_protection' => false,
            'dateClass' => 'AppBundle\Entity\Article\Tag',
        ]);
    }
}