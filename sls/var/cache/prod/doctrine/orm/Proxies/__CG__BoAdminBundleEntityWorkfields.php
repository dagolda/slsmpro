<?php

namespace Proxies\__CG__\Bo\AdminBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Workfields extends \Bo\AdminBundle\Entity\Workfields implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'wfname', 'chargescale', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Workfields' . "\0" . 'details', 'creationdate'];
        }

        return ['__isInitialized__', 'id', 'wfname', 'chargescale', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Workfields' . "\0" . 'details', 'creationdate'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Workfields $proxy) {
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
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
    public function setLevelname($levelname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLevelname', [$levelname]);

        return parent::setLevelname($levelname);
    }

    /**
     * {@inheritDoc}
     */
    public function getLevelname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLevelname', []);

        return parent::getLevelname();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreationdate($creationdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreationdate', [$creationdate]);

        return parent::setCreationdate($creationdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreationdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreationdate', []);

        return parent::getCreationdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setWfname($wfname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWfname', [$wfname]);

        return parent::setWfname($wfname);
    }

    /**
     * {@inheritDoc}
     */
    public function getWfname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWfname', []);

        return parent::getWfname();
    }

    /**
     * {@inheritDoc}
     */
    public function setDetails($details)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDetails', [$details]);

        return parent::setDetails($details);
    }

    /**
     * {@inheritDoc}
     */
    public function getDetails()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDetails', []);

        return parent::getDetails();
    }

    /**
     * {@inheritDoc}
     */
    public function setChargescale($chargescale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChargescale', [$chargescale]);

        return parent::setChargescale($chargescale);
    }

    /**
     * {@inheritDoc}
     */
    public function getChargescale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChargescale', []);

        return parent::getChargescale();
    }

}
