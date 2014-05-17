<?php
// src/Mischiros/TiendaBundle/Menu/Builder.php
namespace Mischiros\TiendaBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function prendasMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Hombre',array('route' => 'mischiros_tienda_comprarlistar'));
        $menu->addChild('Mujer',array('route' => 'mischiros_tienda_comprarlistar'));
        $menu->addChild('Niño',array('route' => 'mischiros_tienda_comprarlistar'));

        return $menu;
    }
}