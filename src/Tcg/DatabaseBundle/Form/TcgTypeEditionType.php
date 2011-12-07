<?php

namespace Tcg\DatabaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TcgTypeEditionType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('libelle', 'text', array('label' => "Libellé du type d'édition"))
            ->add('icone', 'text', array('label' => "Icône du type d'édition", 'required' => false))
        ;
    }

    public function getName()
    {
        return 'tcg_databasebundle_tcgtypeeditiontype';
    }
}
