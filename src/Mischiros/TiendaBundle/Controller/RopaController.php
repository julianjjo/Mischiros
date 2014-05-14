<?php

namespace Mischiros\TiendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RopaController extends Controller
{
    public function comprarAction()
    {
    	$em = $this->get('doctrine')->getManager();

    	$consulta = $em->createQuery(
			    'SELECT p , t , i
			       FROM MischirosTiendaBundle:Prenda p JOIN p.tipo t JOIN p.media i 
			   ORDER BY p.precio_venta ASC'
			);

		$prendas = $consulta->getResult();

    	$repository = $this->getDoctrine()
    		->getRepository('Application\Sonata\MediaBundle\Entity\Media');

    	$imagenes = $repository->findAll();

        return $this->render('MischirosTiendaBundle:Ropa:comprar.html.twig',array('prendas' => $prendas, 'imagenes' => $imagenes));
    }
}
