<?php

namespace Mischiros\TiendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RopaController extends Controller
{
    public function ListarAction()
    {
    	$em = $this->get('doctrine')->getManager();
        
    	$consulta = $em->createQuery('SELECT p , t , i FROM MischirosTiendaBundle:Prenda p JOIN p.tipo t JOIN p.media i');

        $paginador  = $this->get('knp_paginator');

        $prendas = $paginador->paginate(
            $consulta,
            $this->get('request')->query->get('page', 1)/*numero de pagina*/,
            9/*limite por pagina*/
        );

        return $this->render('MischirosTiendaBundle:Ropa:comprar.html.twig',array('prendas' => $prendas));
    }
}
