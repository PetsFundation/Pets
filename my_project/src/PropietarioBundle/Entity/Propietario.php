<?php

namespace PropietarioBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
 * Propietario
 *
 * @ORM\Table(name="propietario")
 * @ORM\Entity(repositoryClass="PropietarioBundle\Repository\PropietarioRepository")
 */
class Propietario
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido", type="string", length=255, nullable=true)
     */
    private $apellido;

    /**
     * @var int
     *
     * @ORM\Column(name="Anuncio", type="integer", unique=true)
     */
    private $anuncio;

    /**
     * @var int
     *
     * @ORM\Column(name="Telefono", type="integer")
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var int
     *
     * @ORM\Column(name="CP", type="integer")
     */
    private $cP;

    /**
     * @var int
     *
     * @ORM\Column(name="Animal", type="integer", unique=true)
     */
    private $animal;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Propietario
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
     * Set email
     *
     * @param string $email
     *
     * @return Propietario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Propietario
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set anuncio
     *
     * @param integer $anuncio
     *
     * @return Propietario
     */
    public function setAnuncio($anuncio)
    {
        $this->anuncio = $anuncio;

        return $this;
    }

    /**
     * Get anuncio
     *
     * @return int
     */
    public function getAnuncio()
    {
        return $this->anuncio;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return Propietario
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return int
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Propietario
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set cP
     *
     * @param integer $cP
     *
     * @return Propietario
     */
    public function setCP($cP)
    {
        $this->cP = $cP;

        return $this;
    }

    /**
     * Get cP
     *
     * @return int
     */
    public function getCP()
    {
        return $this->cP;
    }

    /**
     * Set animal
     *
     * @param integer $animal
     *
     * @return Propietario
     */
    public function setAnimal($animal)
    {
        $this->animal = $animal;

        return $this;
    }

    /**
     * Get animal
     *
     * @return int
     */
    public function getAnimal()
    {
        return $this->animal;
    }
    
    /**
     * Relationship OneToMany
     * 
     * @ORM\OneToMany(targetEntity="AnimalesBundle\Entity\Animales", mappedBy="animalPropietario")
     */
     private $propietarioAnimal;
     
}
