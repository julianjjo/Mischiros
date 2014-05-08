<?php

namespace Mischiros\TiendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RopaController extends Controller
{
    public function comprarAction()
    {
        return $this->render('MischirosTiendaBundle:Comprar:index.html.twig');
    }
}
