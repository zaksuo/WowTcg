<?php

namespace Tcg\DatabaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class EditionType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('libelle', 'text',array('label' => "Nom de l'édition", 'required' => true) )
            ->add('nbCartes', 'text',array('label' => "Nombre de cartes contenues dans l'édition (Cartes butin comprises)") )
            ->add('starterDeck', 'checkbox',array('label' => 'Est-ce un deck préconstruit ?', 'required' => false))
            ->add('icone', 'file', array('label' => "Icône de l'édition", 'required' => false))
            ->add('typeEdition', null, array('label' => "Type de l'édition"))
        ;
    }

    public function getName()
    {
        return 'tcg_databasebundle_editiontype';
    }
}
