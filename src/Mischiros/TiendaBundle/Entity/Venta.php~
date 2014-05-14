<?php
// src/Mischiros/TiendaBundle/Entity/Venta.php
namespace Mischiros\TiendaBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="venta")
 */
class Venta
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $numero_factura;

    /**
     * @ORM\Column(type="date")
     */
    protected $fecha_de_venta;

    /**
     * @ORM\Column(type="date")
     */
    protected $cantidad;  

    /**
     * @ORM\ManyToOne(targetEntity="Prenda", inversedBy="ventas")
     * @ORM\JoinColumn(name="id_prenda", referencedColumnName="id")
     **/
    private $prenda;

    /**
     * @ORM\ManyToMany(targetEntity="Application\Sonata\UserBundle\Entity\User")
     * @ORM\JoinTable(name="usuario_venta",
     *      joinColumns={@ORM\JoinColumn(name="id_ingreso", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_usuario", referencedColumnName="id", unique=true)}
     *      )
     **/
    private $usuarios;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuarios = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set numero_factura
     *
     * @param integer $numeroFactura
     * @return Venta
     */
    public function setNumeroFactura($numeroFactura)
    {
        $this->numero_factura = $numeroFactura;

        return $this;
    }

    /**
     * Get numero_factura
     *
     * @return integer 
     */
    public function getNumeroFactura()
    {
        return $this->numero_factura;
    }

    /**
     * Set fecha_de_venta
     *
     * @param \DateTime $fechaDeVenta
     * @return Venta
     */
    public function setFechaDeVenta($fechaDeVenta)
    {
        $this->fecha_de_venta = $fechaDeVenta;

        return $this;
    }

    /**
     * Get fecha_de_venta
     *
     * @return \DateTime 
     */
    public function getFechaDeVenta()
    {
        return $this->fecha_de_venta;
    }

    /**
     * Set cantidad
     *
     * @param \DateTime $cantidad
     * @return Venta
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return \DateTime 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set prenda
     *
     * @param \Mischiros\TiendaBundle\Entity\Prenda $prenda
     * @return Venta
     */
    public function setPrenda(\Mischiros\TiendaBundle\Entity\Prenda $prenda = null)
    {
        $this->prenda = $prenda;

        return $this;
    }

    /**
     * Get prenda
     *
     * @return \Mischiros\TiendaBundle\Entity\Prenda 
     */
    public function getPrenda()
    {
        return $this->prenda;
    }

    /**
     * Add usuarios
     *
     * @param \Application\Sonata\UserBundle\Entity\User $usuarios
     * @return Venta
     */
    public function addUsuario(\Application\Sonata\UserBundle\Entity\User $usuarios)
    {
        $this->usuarios[] = $usuarios;

        return $this;
    }

    /**
     * Remove usuarios
     *
     * @param \Application\Sonata\UserBundle\Entity\User $usuarios
     */
    public function removeUsuario(\Application\Sonata\UserBundle\Entity\User $usuarios)
    {
        $this->usuarios->removeElement($usuarios);
    }

    /**
     * Get usuarios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }
}
