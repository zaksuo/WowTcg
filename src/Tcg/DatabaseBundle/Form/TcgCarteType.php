<?php

namespace Tcg\DatabaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TcgCarteType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('libelle', 'text', array('label' => 'Nom de la carte'))
            ->add('typeCarte', 'choices', array('label' => 'Type de carte'))
            ->add('donnees')
            ->add('caracteristiques')
            ->add('image')
            ->add('edition', 'choices', array('label' => 'Edition'))
            ->add('faction', 'choices', array('label' => 'Faction'))
        ;
    }

    public function getName()
    {
        return 'tcg_databasebundle_tcgcartetype';
    }
}
