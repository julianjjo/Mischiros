<?php
// src/Mischiros/TiendaBundle/Entity/Ingreso.php
namespace Mischiros\TiendaBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="ingreso")
 */
class Ingreso
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
    protected $cantidad_comprada;

    /**
     * @ORM\Column(type="integer")
     */
    protected $valor_unitario;

    /**
     * @ORM\Column(type="date")
     */
    protected $fecha_de_ingreso;

    /**
     * @ORM\ManyToOne(targetEntity="Prenda", inversedBy="ingresos")
     * @ORM\JoinColumn(name="id_prenda", referencedColumnName="id")
     **/
    private $prenda;

    /**
     * @ORM\ManyToMany(targetEntity="Application\Sonata\UserBundle\Entity\User")
     * @ORM\JoinTable(name="usuario_ingreso",
     *      joinColumns={@ORM\JoinColumn(name="id_ingreso", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_usuario", referencedColumnName="id")}
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
     * Set cantidad_comprada
     *
     * @param integer $cantidadComprada
     * @return Ingreso
     */
    public function setCantidadComprada($cantidadComprada)
    {
        $this->cantidad_comprada = $cantidadComprada;

        return $this;
    }

    /**
     * Get cantidad_comprada
     *
     * @return integer 
     */
    public function getCantidadComprada()
    {
        return $this->cantidad_comprada;
    }

    /**
     * Set valor_unitario
     *
     * @param integer $valorUnitario
     * @return Ingreso
     */
    public function setValorUnitario($valorUnitario)
    {
        $this->valor_unitario = $valorUnitario;

        return $this;
    }

    /**
     * Get valor_unitario
     *
     * @return integer 
     */
    public function getValorUnitario()
    {
        return $this->valor_unitario;
    }

    /**
     * Set fecha_de_ingreso
     *
     * @param \DateTime $fechaDeIngreso
     * @return Ingreso
     */
    public function setFechaDeIngreso($fechaDeIngreso)
    {
        $this->fecha_de_ingreso = $fechaDeIngreso;

        return $this;
    }

    /**
     * Get fecha_de_ingreso
     *
     * @return \DateTime 
     */
    public function getFechaDeIngreso()
    {
        return $this->fecha_de_ingreso;
    }

    /**
     * Set prenda
     *
     * @param \Mischiros\TiendaBundle\Entity\Prenda $prenda
     * @return Ingreso
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
     * @return Ingreso
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
