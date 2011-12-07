<?php

namespace Tcg\DatabaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TcgDonneesType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('race')
            ->add('classe')
        ;
    }

    public function getName()
    {
        return 'tcg_databasebundle_tcgdonneestype';
    }
}
