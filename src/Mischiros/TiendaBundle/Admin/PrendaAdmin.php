<?php

namespace Mischiros\TiendaBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PrendaAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('cantidad_disponible')
            ->add('precio_venta')
            ->add('tipo')
            ->add('media')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', 'integer', array('label' => 'Codigo de barras'))
            ->add('cantidad_disponible')
            ->add('precio_venta', 'currency', array('currency' => 'COP'))
            ->add('tipo')
            ->add('media')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('id', 'integer', array('label' => 'Codigo de barras'))
            ->add('precio_venta', 'money', array(
                'label' => 'Precio de venta',
                'currency'=> 'COP',
                'divisor' => 100,
            ))
            ->add('tipo', 'entity', array('class' => 'Mischiros\TiendaBundle\Entity\Tipo', "attr" => array("class" => "form-control")))
            ->add('media', 'sonata_media_type', array(
                 'provider' => 'sonata.media.provider.image',
                 'context'  => 'prenda'
            ));
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', 'integer', array('label' => 'Codigo de barras'))
            ->add('cantidad_disponible')
            ->add('precio_venta')
            ->add('tipo')
            ->add('media')
        ;
    }
}
