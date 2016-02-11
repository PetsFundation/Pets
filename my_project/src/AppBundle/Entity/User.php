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

    /**
     * Add anuncio
     *
     * @param \AnunciosBundle\Entity\Anuncios $anuncio
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
     * @param \AnunciosBundle\Entity\Anuncios $anuncio
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
}
