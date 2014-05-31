<?php

namespace Iga\RssBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class RssController extends Controller
{
    public function noticiasAction()
    {
    	
    	$rss = $this->get('iga_rss.rss');
    	
    	$rss->load("http://www.mujerhoy.com/feeds/rss-look-shop-portada.xml");
    	
    	$items = $rss->getItems();

        return $this->render('IgaRssBundle:Rss:noticias.html.twig', array('items' => $items,));
    }
}
