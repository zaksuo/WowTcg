<?php

namespace Tcg\DatabaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TcgSpecialisationType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('libelle')
        ;
    }

    public function getName()
    {
        return 'tcg_databasebundle_tcgspecialisationtype';
    }
}
