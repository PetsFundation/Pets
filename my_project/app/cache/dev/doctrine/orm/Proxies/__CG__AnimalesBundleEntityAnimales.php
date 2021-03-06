<?php

namespace Proxies\__CG__\AnimalesBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Animales extends \AnimalesBundle\Entity\Animales implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'anuncio', '' . "\0" . 'AnimalesBundle\\Entity\\Animales' . "\0" . 'id', '' . "\0" . 'AnimalesBundle\\Entity\\Animales' . "\0" . 'nombre', '' . "\0" . 'AnimalesBundle\\Entity\\Animales' . "\0" . 'tipo', '' . "\0" . 'AnimalesBundle\\Entity\\Animales' . "\0" . 'raza', '' . "\0" . 'AnimalesBundle\\Entity\\Animales' . "\0" . 'sexo', '' . "\0" . 'AnimalesBundle\\Entity\\Animales' . "\0" . 'nacimiento', '' . "\0" . 'AnimalesBundle\\Entity\\Animales' . "\0" . 'propietario', '' . "\0" . 'AnimalesBundle\\Entity\\Animales' . "\0" . 'pedigri', '' . "\0" . 'AnimalesBundle\\Entity\\Animales' . "\0" . 'img', '' . "\0" . 'AnimalesBundle\\Entity\\Animales' . "\0" . 'descripcion', '' . "\0" . 'AnimalesBundle\\Entity\\Animales' . "\0" . 'tlf'];
        }

        return ['__isInitialized__', 'anuncio', '' . "\0" . 'AnimalesBundle\\Entity\\Animales' . "\0" . 'id', '' . "\0" . 'AnimalesBundle\\Entity\\Animales' . "\0" . 'nombre', '' . "\0" . 'AnimalesBundle\\Entity\\Animales' . "\0" . 'tipo', '' . "\0" . 'AnimalesBundle\\Entity\\Animales' . "\0" . 'raza', '' . "\0" . 'AnimalesBundle\\Entity\\Animales' . "\0" . 'sexo', '' . "\0" . 'AnimalesBundle\\Entity\\Animales' . "\0" . 'nacimiento', '' . "\0" . 'AnimalesBundle\\Entity\\Animales' . "\0" . 'propietario', '' . "\0" . 'AnimalesBundle\\Entity\\Animales' . "\0" . 'pedigri', '' . "\0" . 'AnimalesBundle\\Entity\\Animales' . "\0" . 'img', '' . "\0" . 'AnimalesBundle\\Entity\\Animales' . "\0" . 'descripcion', '' . "\0" . 'AnimalesBundle\\Entity\\Animales' . "\0" . 'tlf'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Animales $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipo($tipo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipo', [$tipo]);

        return parent::setTipo($tipo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipo', []);

        return parent::getTipo();
    }

    /**
     * {@inheritDoc}
     */
    public function setRaza($raza)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRaza', [$raza]);

        return parent::setRaza($raza);
    }

    /**
     * {@inheritDoc}
     */
    public function getRaza()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRaza', []);

        return parent::getRaza();
    }

    /**
     * {@inheritDoc}
     */
    public function setSexo($sexo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSexo', [$sexo]);

        return parent::setSexo($sexo);
    }

    /**
     * {@inheritDoc}
     */
    public function getSexo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSexo', []);

        return parent::getSexo();
    }

    /**
     * {@inheritDoc}
     */
    public function setNacimiento($nacimiento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNacimiento', [$nacimiento]);

        return parent::setNacimiento($nacimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getNacimiento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNacimiento', []);

        return parent::getNacimiento();
    }

    /**
     * {@inheritDoc}
     */
    public function setPropietario($propietario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPropietario', [$propietario]);

        return parent::setPropietario($propietario);
    }

    /**
     * {@inheritDoc}
     */
    public function getPropietario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPropietario', []);

        return parent::getPropietario();
    }

    /**
     * {@inheritDoc}
     */
    public function setPedigri($pedigri)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPedigri', [$pedigri]);

        return parent::setPedigri($pedigri);
    }

    /**
     * {@inheritDoc}
     */
    public function getPedigri()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPedigri', []);

        return parent::getPedigri();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnuncio(\AnunciosBundle\Entity\Anuncios $anuncio = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnuncio', [$anuncio]);

        return parent::setAnuncio($anuncio);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnuncio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnuncio', []);

        return parent::getAnuncio();
    }

    /**
     * {@inheritDoc}
     */
    public function setImg($img)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImg', [$img]);

        return parent::setImg($img);
    }

    /**
     * {@inheritDoc}
     */
    public function getImg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImg', []);

        return parent::getImg();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', [$descripcion]);

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', []);

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setTlf($tlf)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTlf', [$tlf]);

        return parent::setTlf($tlf);
    }

    /**
     * {@inheritDoc}
     */
    public function getTlf()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTlf', []);

        return parent::getTlf();
    }

}
