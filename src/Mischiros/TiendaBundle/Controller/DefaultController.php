<?php

namespace Mischiros\TiendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function homeAction()
    {
        return $this->render('MischirosTiendaBundle:Default:index.html.twig');
    }
}