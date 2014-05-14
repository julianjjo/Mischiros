<?php

namespace Mischiros\TiendaBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class IngresoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('cantidad_comprada')
            ->add('valor_unitario')
            ->add('fecha_de_ingreso')
            ->add('prenda')
            ->add('usuarios')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('cantidad_comprada')
            ->add('valor_unitario')
            ->add('fecha_de_ingreso')  
            ->add('prenda')   
            ->add('usuarios')       
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
            ->add('cantidad_comprada')
            ->add('valor_unitario')
            ->add('fecha_de_ingreso','date', array('widget' => 'single_text'))             
            ->add('prenda', 'entity', array('class' => 'Mischiros\TiendaBundle\Entity\Prenda',"attr" => array("class" => "form-control")))   
            ->add('usuarios', 'entity', array('class' => 'Application\Sonata\UserBundle\Entity\User', 'label' => 'Usuario','multiple'=>true ,"attr" => array("class" => "form-control")))   
       ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('cantidad_comprada')
            ->add('valor_unitario')
            ->add('fecha_de_ingreso')
            ->add('prenda')
            ->add('usuarios')
        ;
    }
}
