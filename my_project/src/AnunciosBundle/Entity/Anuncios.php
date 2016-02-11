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
     * @ORM\Column(name="Categoria", type="string", columnDefinition="enum('Camadas', 'Adopción', 'Se busca', 'Protectoras')")
     */
    private $categoria;

    /**
     * @var int
     *
     * @ORM\Column(name="IdAnimal", type="integer", unique=true)
     */
    private $idAnimal;


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
     * Set idAnimal
     *
     * @param integer $idAnimal
     *
     * @return Anuncios
     */
    public function setIdAnimal($idAnimal)
    {
        $this->idAnimal = $idAnimal;

        return $this;
    }

    /**
     * Get idAnimal
     *
     * @return int
     */
    public function getIdAnimal()
    {
        return $this->idAnimal;
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

    /**
     * Set tituloAnuncio
     *
     * @param \PropietarioBundle\Entity\Propietario $tituloAnuncio
     *
     * @return Anuncios
     */
    public function setTituloAnuncio(\PropietarioBundle\Entity\Propietario $tituloAnuncio = null)
    {
        $this->tituloAnuncio = $tituloAnuncio;

        return $this;
    }

    /**
     * Get tituloAnuncio
     *
     * @return \PropietarioBundle\Entity\Propietario
     */
    public function getTituloAnuncio()
    {
        return $this->tituloAnuncio;
    }
    
    /**
     * Relationship ManyToOne
     * 
     * @ORM\ManyToOne(targetEntity="PropietarioBundle\Entity\Propietario", inversedBy="propietarioAnuncio")
     */
     private $tituloAnuncio;
     
     /**
      * Relationship OneToOne
      * 
      * @ORM\OneToOne(targetEntity="AnimalesBundle\Entity\Animales", inversedBy="animalAnuncia")
      * @ORM\JoinColumn(name="idAnimal", referencedColumnName="id")
      */
      private $anuncioAnimal;

    /**
     * Set anuncioAnimal
     *
     * @param \AnimalesBundle\Entity\Animales $anuncioAnimal
     *
     * @return Anuncios
     */
    public function setAnuncioAnimal(\AnimalesBundle\Entity\Animales $anuncioAnimal = null)
    {
        $this->anuncioAnimal = $anuncioAnimal;

        return $this;
    }

    /**
     * Get anuncioAnimal
     *
     * @return \AnimalesBundle\Entity\Animales
     */
    public function getAnuncioAnimal()
    {
        return $this->anuncioAnimal;
    }
}
