<?php

namespace Tcg\DatabaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TcgCaracteristiquesType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('cout')
            ->add('coutIcone')
            ->add('attaque')
            ->add('vie')
            ->add('attaqueType')
        ;
    }

    public function getName()
    {
        return 'tcg_databasebundle_tcgcaracteristiquestype';
    }
}
