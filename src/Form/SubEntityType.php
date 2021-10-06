<?php

namespace App\Form;

use App\Entity\SubEntity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SubEntityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('doctrineStringPhpStringFormText1',TextType::class)
            ->add('doctrineStringPhpStringFormText2',TextType::class)
            ->add('doctrineManyToOneRelationPhpObjectMainEntity',EntityType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SubEntity::class,
        ]);
    }
}
