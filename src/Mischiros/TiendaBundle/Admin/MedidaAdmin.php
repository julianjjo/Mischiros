<?php

namespace Mischiros\TiendaBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class MedidaAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('hombro')
            ->add('pecho')
            ->add('cintura')
            ->add('cadera')
            ->add('talla')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('hombro')
            ->add('pecho')
            ->add('cintura')
            ->add('cadera')
            ->add('talla')
            ->add('tipo')
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
            ->add('hombro')
            ->add('pecho')
            ->add('cintura')
            ->add('cadera')
            ->add('talla', 'entity', array('class' => 'Mischiros\TiendaBundle\Entity\Talla', "attr" => array("class" => "form-control")))
            ->add('tipo', 'entity', array('class' => 'Mischiros\TiendaBundle\Entity\Tipo', "attr" => array("class" => "form-control")))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('hombro')
            ->add('pecho')
            ->add('cintura')
            ->add('cadera')
            ->add('talla')
            ->add('tipo')
        ;
    }
}
