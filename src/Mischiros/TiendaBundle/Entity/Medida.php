<?php
// src/Mischiros/TiendaBundle/Entity/Medida.php
namespace Mischiros\TiendaBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="medida")
 */
class Medida
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
    protected $hombro;

    /**
     * @ORM\Column(type="integer")
     */
    protected $pecho;

    /**
     * @ORM\Column(type="integer")
     */
    protected $cintura;

    /**
     * @ORM\Column(type="integer")
     */
    protected $cadera;

    /**
     * @ORM\ManyToOne(targetEntity="Tipo", inversedBy="medidas")
     * @ORM\JoinColumn(name="id_tipo", referencedColumnName="id")
     **/
    private $tipo;

    /**
     * @ORM\ManyToOne(targetEntity="Talla", inversedBy="medidas")
     * @ORM\JoinColumn(name="id_talla", referencedColumnName="id")
     **/
    private $talla;


    public function __toString()
    {
        return (string)$this->id;
    }


    /**
     * Set id
     *
     * @param integer $id
     * @return Medida
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
     * Set hombro
     *
     * @param integer $hombro
     * @return Medida
     */
    public function setHombro($hombro)
    {
        $this->hombro = $hombro;

        return $this;
    }

    /**
     * Get hombro
     *
     * @return integer 
     */
    public function getHombro()
    {
        return $this->hombro;
    }

    /**
     * Set pecho
     *
     * @param integer $pecho
     * @return Medida
     */
    public function setPecho($pecho)
    {
        $this->pecho = $pecho;

        return $this;
    }

    /**
     * Get pecho
     *
     * @return integer 
     */
    public function getPecho()
    {
        return $this->pecho;
    }

    /**
     * Set cintura
     *
     * @param integer $cintura
     * @return Medida
     */
    public function setCintura($cintura)
    {
        $this->cintura = $cintura;

        return $this;
    }

    /**
     * Get cintura
     *
     * @return integer 
     */
    public function getCintura()
    {
        return $this->cintura;
    }

    /**
     * Set cadera
     *
     * @param integer $cadera
     * @return Medida
     */
    public function setCadera($cadera)
    {
        $this->cadera = $cadera;

        return $this;
    }

    /**
     * Get cadera
     *
     * @return integer 
     */
    public function getCadera()
    {
        return $this->cadera;
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
     * Set talla
     *
     * @param \Mischiros\TiendaBundle\Entity\Talla $talla
     * @return Medida
     */
    public function setTalla(\Mischiros\TiendaBundle\Entity\Talla $talla = null)
    {
        $this->talla = $talla;

        return $this;
    }

    /**
     * Get talla
     *
     * @return \Mischiros\TiendaBundle\Entity\Talla 
     */
    public function getTalla()
    {
        return $this->talla;
    }

    /**
     * Set tipo
     *
     * @param \Mischiros\TiendaBundle\Entity\Tipo $tipo
     * @return Medida
     */
    public function setTipo(\Mischiros\TiendaBundle\Entity\Tipo $tipo = null)
    {
        $this->tipo = $tipo;

        return $this;
    }
}
