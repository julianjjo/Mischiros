<?php

namespace Mischiros\TiendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function homeAction()
    {
    	$em = $this->get('doctrine')->getManager();
        
        $consulta = $em->createQuery("SELECT p, t FROM MischirosTiendaBundle:Prenda p JOIN p.tipo t")->setMaxResults(3);
        $prendas=$consulta->getResult();    	
        return $this->render('MischirosTiendaBundle:Default:index.html.twig', array('prendas' => $prendas));
    }
}
