<?php

namespace Tcg\DatabaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TcgFactionType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('libelle', 'text', array('label' => "Nom de la faction"))
            ->add('icone', 'text', array('label' => 'Icône de la faction', 'required' => false))
        ;
    }

    public function getName()
    {
        return 'tcg_databasebundle_tcgfactiontype';
    }
}
