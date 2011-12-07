<?php

namespace Tcg\DatabaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TcgTypeCarteType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('libelle')
            ->add('icone')
        ;
    }

    public function getName()
    {
        return 'tcg_databasebundle_tcgtypecartetype';
    }
}
