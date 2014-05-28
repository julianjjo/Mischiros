<?php
// src/Mischiros/TiendaBundle/Entity/Tipo.php
namespace Mischiros\TiendaBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="tipo")
 * @ORM\Entity(repositoryClass="Mischiros\TiendaBundle\Entity\TipoRepository")
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

    /**
     * @ORM\OneToMany(targetEntity="Prenda", mappedBy="tipo")
     **/
    private $prendas;
    
    /**
     * @ORM\OneToMany(targetEntity="Prenda", mappedBy="tipo")
     **/
    private $medidas;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->medidas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->prendas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->descripcion;
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
     * Set referencia
     *
     * @param string $referencia
     * @return Tipo
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return string 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Tipo
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return Tipo
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Add medidas
     *
     * @param \Mischiros\TiendaBundle\Entity\Medida $medidas
     * @return Tipo
     */
    public function addMedida(\Mischiros\TiendaBundle\Entity\Medida $medidas)
    {
        $this->medidas[] = $medidas;

        return $this;
    }

    /**
     * Add prendas
     *
     * @param \Mischiros\TiendaBundle\Entity\Prenda $prendas
     * @return Tipo
     */
    public function addPrenda(\Mischiros\TiendaBundle\Entity\Prenda $prendas)
    {
        $this->prendas[] = $prendas;

        return $this;
    }

    /**
     * Remove prendas
     *
     * @param \Mischiros\TiendaBundle\Entity\Prenda $prendas
     */
    public function removePrenda(\Mischiros\TiendaBundle\Entity\Prenda $prendas)
    {
        $this->prendas->removeElement($prendas);
    }

    /**
     * Get prendas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPrendas()
    {
        return $this->prendas;
    }

    /**
     * Remove medidas
     *
     * @param \Mischiros\TiendaBundle\Entity\Prenda $medidas
     */
    public function removeMedida(\Mischiros\TiendaBundle\Entity\Prenda $medidas)
    {
        $this->medidas->removeElement($medidas);
    }

    /**
     * Get medidas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMedidas()
    {
        return $this->medidas;
    }
}
