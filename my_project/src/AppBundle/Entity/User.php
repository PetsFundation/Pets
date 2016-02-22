<?php

namespace AppBundle\Entity;
use AnunciosBundle\Entity\Anuncios as Anuncios;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    
    /**
     * Relationship OneToMany
     * 
     * @ORM\OneToMany(targetEntity="AnunciosBundle\Entity\Anuncios", mappedBy="user",cascade={"persist", "remove"})
     */
     protected $anuncios;
    
    /**
     * @ORM\OneToMany(targetEntity="AnunciosBundle\Entity\Anuncios", mappedBy="usuario")
     */
    protected $anuncios;
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        $this->anuncios = new ArrayCollection();
    }
<<<<<<< HEAD
=======
    
>>>>>>> david3

    /**
     * Add anuncio
     *
<<<<<<< HEAD
     * @param \AnunciosBundle\Entity\Anuncios $anuncio
=======
     * @param \AnunciosBundle\Anuncios $anuncio
>>>>>>> david3
     *
     * @return User
     */
    public function addAnuncio(\AnunciosBundle\Entity\Anuncios $anuncio)
    {
        $this->anuncios[] = $anuncio;

        return $this;
    }

    /**
     * Remove anuncio
     *
<<<<<<< HEAD
     * @param \AnunciosBundle\Entity\Anuncios $anuncio
=======
     * @param \AnunciosBundle\Anuncios $anuncio
>>>>>>> david3
     */
    public function removeAnuncio(\AnunciosBundle\Entity\Anuncios $anuncio)
    {
        $this->anuncios->removeElement($anuncio);
    }

    /**
     * Get anuncios
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnuncios()
    {
        return $this->anuncios;
    }
<<<<<<< HEAD
=======
    
  
>>>>>>> david3
}
