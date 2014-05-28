<?php
// src/Mischiros/TiendaBundle/Entity/Prenda.php
namespace Mischiros\TiendaBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="prenda")
 */
class Prenda
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $cantidad_disponible;

    /**
     * @ORM\Column(type="integer")
     */
    protected $precio_venta;

    /**
     * @ORM\ManyToOne(targetEntity="Tipo", inversedBy="prendas")
     * @ORM\JoinColumn(name="id_tipo", referencedColumnName="id")
     **/
    private $tipo;

    /**
     * @ORM\OneToMany(targetEntity="Venta", mappedBy="prenda")
     **/
    private $ventas;

    /**
     * @var \Application\Sonata\MediaBundle\Entity\Media
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"}, fetch="LAZY")
     */
    protected $media;  

    public function __toString()
    {
        return (string)$this->id;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ventas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Prenda
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cantidad_disponible
     *
     * @param integer $cantidadDisponible
     * @return Prenda
     */
    public function setCantidadDisponible($cantidadDisponible)
    {
        $this->cantidad_disponible = $cantidadDisponible;

        return $this;
    }

    /**
     * Get cantidad_disponible
     *
     * @return integer 
     */
    public function getCantidadDisponible()
    {
        return $this->cantidad_disponible;
    }

    /**
     * Set precio_venta
     *
     * @param integer $precioVenta
     * @return Prenda
     */
    public function setPrecioVenta($precioVenta)
    {
        $this->precio_venta = $precioVenta;

        return $this;
    }

    /**
     * Get precio_venta
     *
     * @return integer 
     */
    public function getPrecioVenta()
    {
        return $this->precio_venta;
    }

    /**
     * Set tipo
     *
     * @param \Mischiros\TiendaBundle\Entity\Tipo $tipo
     * @return Prenda
     */
    public function setTipo(\Mischiros\TiendaBundle\Entity\Tipo $tipo = null)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return \Mischiros\TiendaBundle\Entity\Tipo 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Add ventas
     *
     * @param \Mischiros\TiendaBundle\Entity\Venta $ventas
     * @return Prenda
     */
    public function addVenta(\Mischiros\TiendaBundle\Entity\Venta $ventas)
    {
        $this->ventas[] = $ventas;

        return $this;
    }

    /**
     * Remove ventas
     *
     * @param \Mischiros\TiendaBundle\Entity\Venta $ventas
     */
    public function removeVenta(\Mischiros\TiendaBundle\Entity\Venta $ventas)
    {
        $this->ventas->removeElement($ventas);
    }

    /**
     * Get ventas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVentas()
    {
        return $this->ventas;
    }

    /**
     * Set media
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $media
     * @return Prenda
     */
    public function setMedia(\Application\Sonata\MediaBundle\Entity\Media $media = null)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getMedia()
    {
        return $this->media;
    }
}
