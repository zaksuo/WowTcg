<?php

namespace Tcg\DatabaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DatabaseController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('TcgDatabaseBundle:Default:index.html.twig');
    }
}
