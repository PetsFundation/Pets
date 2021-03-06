<?php

namespace AnimalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Animales
 *
 * @ORM\Table(name="animales")
 * @ORM\Entity(repositoryClass="AnimalesBundle\Repository\AnimalesRepository")
 */
class Animales
{
    
    /**
     * @ORM\OneToOne(targetEntity="AnunciosBundle\Entity\Anuncios", mappedBy="animal",cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="anuncio_id", referencedColumnName="id",onDelete="CASCADE")
     */
    protected $anuncio;
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo", type="string", length=255)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="Raza", type="string", length=255, nullable=true)
     */
    private $raza;

    /**
     * @var string
     *
     * @ORM\Column(name="Sexo", type="string", length=255, nullable=true)
     */
    private $sexo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Nacimiento", type="date")
     */
    private $nacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="Propietario", type="string", length=255)
     */
    private $propietario;

    /**
     * @var bool
     *
     * @ORM\Column(name="Pedigri", type="boolean", nullable=true)
     */
    private $pedigri;
    
    
    /**
    * @var blob
    *
    *@ORM\Column(name="img",type="blob", nullable=true)
    */
    private $img;
    
    
    /**
     * @var string
     *
     *@ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;
    

    /**
     * @var integer
     *
     *@ORM\Column(name="tlf",type="integer",length=9) 
     */
     
    private $tlf;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set iD
     *
     * @param integer $iD
     *
     * @return Animales
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Animales
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Animales
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set raza
     *
     * @param string $raza
     *
     * @return Animales
     */
    public function setRaza($raza)
    {
        $this->raza = $raza;

        return $this;
    }

    /**
     * Get raza
     *
     * @return string
     */
    public function getRaza()
    {
        return $this->raza;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Animales
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set nacimiento
     *
     * @param \DateTime $nacimiento
     *
     * @return Animales
     */
    public function setNacimiento($nacimiento)
    {
        $this->nacimiento = $nacimiento;

        return $this;
    }

    /**
     * Get nacimiento
     *
     * @return \DateTime
     */
    public function getNacimiento()
    {
        return $this->nacimiento;
    }

    /**
     * Set propietario
     *
     * @param string $propietario
     *
     * @return Animales
     */
    public function setPropietario($propietario)
    {
        $this->propietario = $propietario;

        return $this;
    }

    /**
     * Get propietario
     *
     * @return string
     */
    public function getPropietario()
    {
        return $this->propietario;
    }

    /**
     * Set pedigri
     *
     * @param boolean $pedigri
     *
     * @return Animales
     */
    public function setPedigri($pedigri)
    {
        $this->pedigri = $pedigri;

        return $this;
    }

    /**
     * Get pedigri
     *
     * @return bool
     */
    public function getPedigri()
    {
        return $this->pedigri;
    }
     


    /**
     * Set anuncio
     *
     * @param \AnunciosBundle\Entity\Anuncios $anuncio
     *
     * @return Animales
     */
    public function setAnuncio(\AnunciosBundle\Entity\Anuncios $anuncio = null)
    {
        $this->anuncio = $anuncio;

        return $this;
    }

    /**
     * Get anuncio
     *
     * @return \AnunciosBundle\Entity\Anuncios
     */
    public function getAnuncio()
    {
        return $this->anuncio;
    }
 

    /**
     * Set img
     *
     * @param string $img
     *
     * @return Animales
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Animales
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
     * Set tlf
     *
     * @param integer $tlf
     *
     * @return Animales
     */
    public function setTlf($tlf)
    {
        $this->tlf = $tlf;

        return $this;
    }

    /**
     * Get tlf
     *
     * @return integer
     */
    public function getTlf()
    {
        return $this->tlf;
    }
}
