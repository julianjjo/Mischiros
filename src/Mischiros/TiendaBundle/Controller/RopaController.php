<?php

namespace Mischiros\TiendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mischiros\TiendaBundle\Entity\Venta;
use Mischiros\TiendaBundle\Entity\Medida;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityRepository;

class RopaController extends Controller
{
    public function ListartipoAction($tipo)
    {
        $em = $this->get('doctrine')->getManager();
        
        $consulta = $em->createQuery("SELECT p , t , i FROM MischirosTiendaBundle:Prenda p JOIN p.tipo t JOIN p.media i WHERE t.id = '$tipo'");

        $paginador  = $this->get('knp_paginator');

        $prendas = $paginador->paginate(
            $consulta,
            $this->get('request')->query->get('page', 1)/*numero de pagina*/,
            9/*limite por pagina*/
        );

        $consulta = $em->createQuery('SELECT COUNT(p) as cantidad, t.id, t.descripcion FROM MischirosTiendaBundle:Prenda p JOIN p.tipo t GROUP BY t.descripcion');
        $tipos = $consulta->getResult();

        $consulta = $em->createQuery("SELECT COUNT(p) as cantidad FROM MischirosTiendaBundle:Prenda p JOIN p.tipo t WHERE t.id = '$tipo'");
        $cantidades = $consulta->getResult();

        return $this->render('MischirosTiendaBundle:Ropa:listar.html.twig',array('prendas' => $prendas, 'tipos' => $tipos, 'cantidades' => $cantidades));
    }

    public function ComprarAction(Request $request)
    {
        $compra = new Venta(); 
        $compra->setNumeroFactura('1');
        $form = $this->createFormBuilder($compra)
            ->add('numeroFactura', 'number' , array('disabled' => true, ))
            ->add('numeroTajetaCredito', 'number')
            ->add('cantidad', 'number')
            ->add('comprar', 'submit')
            ->getForm();
            
        return $this->render('MischirosTiendaBundle:Ropa:compra.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function MostrarAction($producto)
    {
        $em = $this->get('doctrine')->getManager();        
        $consulta = $em->createQuery("SELECT p , t , i FROM MischirosTiendaBundle:Prenda p JOIN p.tipo t JOIN p.media i  WHERE p.id = '$producto'");
        $prenda = $consulta->getOneOrNullResult();
        $tipo = $prenda->getTipo();
        $id_tipo = $tipo->getId();        
        $consulta = $em->createQuery("SELECT  m, t, tall FROM MischirosTiendaBundle:Medida m JOIN m.tipo t  JOIN m.talla tall WHERE t.id = '$id_tipo' ");
        $medidas = $consulta->getResult();
        $medida = new Medida();
        $form = $this->createFormBuilder($medida)
            ->add('talla', 'entity', array(
                    'class' => 'MischirosTiendaBundle:Talla',
                    'query_builder' => function (EntityRepository $er){
                          return $er
                            ->createQueryBuilder('t')
                            ->orderBy('t.talla', 'ASC');
                    },
                ))
            ->add('comprar', 'submit')
            ->getForm();
        return $this->render('MischirosTiendaBundle:Ropa:mostrar.html.twig',array('prenda' => $prenda, 'medidas' => $medidas, 'form' => $form->createView(),));
    }

    public function ContactoAction(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('Nombre', 'text', array('required' => true, 'label' => 'Nombre*'))
            ->add('Apellido', 'text')
            ->add('Asunto', 'text', array('required' => true, 'label' => 'Asunto*'))
            ->add('Mensaje', 'textarea', array('max_length' => 400 ,'required' => true , 'label' => 'Mensaje*'))
            ->add('Enviar', 'submit')
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            $datos = $form->getData();
            $Nombre =   $datos['Nombre'];
            $Apellido =  $datos['Apellido'];
            $Asunto =  $datos['Asunto'];
            $Mensaje =  $datos['Mensaje'];
            $html = $this->get('twig')->render('MischirosTiendaBundle:Ropa:email.html.twig', array('Nombre' => $Nombre, 'Apellido' => $Apellido, 'Asunto' => $Asunto, 'Mensaje' => $Mensaje));
            $message = \Swift_Message::newInstance()
                ->setSubject('Contacto '.$Nombre)
                ->setFrom('julianjjo@hotmail.com')
                ->setTo('julian.mican@gmail.com')
                ->setBody($html, 'text/html')
            ;
            $this->get('mailer')->send($message);

            return $this->redirect($this->generateUrl('enviocorrecto'));
        }

        return $this->render('MischirosTiendaBundle:Ropa:contacto.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function EnviocorrectoAction()
    {
        return $this->render('MischirosTiendaBundle:Ropa:enviocorrecto.html.twig');
    }
}
