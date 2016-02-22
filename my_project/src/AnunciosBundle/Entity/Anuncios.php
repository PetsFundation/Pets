<?php

namespace AnunciosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anuncios
 *
 * @ORM\Table(name="anuncios")
 * @ORM\Entity(repositoryClass="AnunciosBundle\Repository\AnunciosRepository")
 */
class Anuncios
{
    
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="anuncios")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $usuario;
    
    /**
     * Relationship OneToOne
     * 
     * @ORM\OneToOne(targetEntity="AnimalesBundle\Entity\Animales", inversedBy="anuncio",cascade={"persist", "remove"})
     */
     protected $animal;
     
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="anuncios")
     * @ORM\JoinColumn(name="anuncio_id", referencedColumnName="id",onDelete="CASCADE")
     */
    protected $user;
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
     * @ORM\Column(name="Titulo", type="string", length=255)
     */
    private $titulo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Categoria", type="string", columnDefinition="enum('Camadas', 'Adopciones', 'Se busca', 'Protectoras')")
     */
    private $categoria;



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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Anuncios
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }



    /**
     * Set categoria
     *
     * @param string $categoria
     *
     * @return Anuncios
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

<<<<<<< HEAD
  

    /**
     * Set usuario
     *
     * @param \AppBundle\Entity\User $usuario
     *
     * @return Anuncios
     */
    public function setUsuario(\AppBundle\Entity\User $usuario = null)
    {
        $this->usuario = $usuario;
=======
   
   

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Anuncios
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set animal
     *
     * @param \AnimalesBundle\Entity\Animales $animal
     *
     * @return Anuncios
     */
    public function setAnimal(\AnimalesBundle\Entity\Animales $animal = null)
    {
        $this->animal = $animal;
>>>>>>> david3

        return $this;
    }

    /**
<<<<<<< HEAD
     * Get usuario
=======
     * Get animal
>>>>>>> david3
     *
     * @return \AppBundle\Entity\User
     */
<<<<<<< HEAD
    public function getUsuario()
    {
        return $this->usuario;
=======
    public function getAnimal()
    {
        return $this->animal;
>>>>>>> david3
    }
    
          public function __toString()
{
    return (string) $this->getAnimal();
} 
}
