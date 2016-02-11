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
     * Relationship ManyToOne
     * 
     * @ORM\ManyToOne(targetEntity="PropietarioBundle\Entity\Propietario", inversedBy="propietarioAnimal")
     */
     private $animalPropietario;
     
     /**
      * Relationship OneToOne
      * 
      * @ORM\OneToOne(targetEntity="AnunciosBundle\Entity\Anuncios", mappedBy="anuncioAnimal")
      */
      private $animalAnuncia;
     
   

    /**
     * Set animalPropietario
     *
     * @param \PropietarioBundle\Entity\Propietario $animalPropietario
     *
     * @return Animales
     */
    public function setAnimalPropietario(\PropietarioBundle\Entity\Propietario $animalPropietario = null)
    {
        $this->animalPropietario = $animalPropietario;

        return $this;
    }

    /**
     * Get animalPropietario
     *
     * @return \PropietarioBundle\Entity\Propietario
     */
    public function getAnimalPropietario()
    {
        return $this->animalPropietario;
    }

    /**
     * Set animalAnuncia
     *
     * @param \AnunciosBundle\Entity\Anuncios $animalAnuncia
     *
     * @return Animales
     */
    public function setAnimalAnuncia(\AnunciosBundle\Entity\Anuncios $animalAnuncia = null)
    {
        $this->animalAnuncia = $animalAnuncia;

        return $this;
    }

    /**
     * Get animalAnuncia
     *
     * @return \AnunciosBundle\Entity\Anuncios
     */
    public function getAnimalAnuncia()
    {
        return $this->animalAnuncia;
    }
}
