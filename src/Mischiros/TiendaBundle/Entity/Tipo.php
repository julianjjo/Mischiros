<?php
// src/Mischiros/TiendaBundle/Entity/Tipo.php
namespace Mischiros\TiendaBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="tipo")
 */
class Tipo
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
 
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $referencia;

     /**
     * @ORM\Column(type="string", length=30)
     */
    protected $descripcion;

     /**
     * @ORM\Column(type="string", length=20)
     */
    protected $color;
}