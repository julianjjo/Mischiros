<?php
// src/Mischiros/TiendaBundle/Entity/Talla.php
namespace Mischiros\TiendaBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="talla")
 */
class Talla
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
 
    /**
     * @ORM\Column(type="string", length=10, unique=true)
     */
    protected $talla;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $descripcion;

    /**
     * @ORM\OneToMany(targetEntity="Medida", mappedBy="tipo")
     **/
    private $medidas;

    public function __construct() {
        $this->medidas = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->talla;
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
     * Set talla
     *
     * @param integer $talla
     * @return Talla
     */
    public function setTalla($talla)
    {
        $this->talla = $talla;

        return $this;
    }

    /**
     * Get talla
     *
     * @return integer 
     */
    public function getTalla()
    {
        return $this->talla;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Talla
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
     * Add medidas
     *
     * @param \Mischiros\TiendaBundle\Entity\Medida $medidas
     * @return Talla
     */
    public function addMedida(\Mischiros\TiendaBundle\Entity\Medida $medidas)
    {
        $this->medidas[] = $medidas;

        return $this;
    }

    /**
     * Remove medidas
     *
     * @param \Mischiros\TiendaBundle\Entity\Medida $medidas
     */
    public function removeMedida(\Mischiros\TiendaBundle\Entity\Medida $medidas)
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
