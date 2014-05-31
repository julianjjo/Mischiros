<?php

namespace Mischiros\ForoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MischirosForoBundle:Default:index.html.twig', array('name' => $name));
    }
}
