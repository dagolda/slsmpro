<?php

namespace Proxies\__CG__\Bo\AdminBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Coordinator extends \Bo\AdminBundle\Entity\Coordinator implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Coordinator' . "\0" . 'id', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Coordinator' . "\0" . 'name', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Coordinator' . "\0" . 'email', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Coordinator' . "\0" . 'phone', 'pwd', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Coordinator' . "\0" . 'createby', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Coordinator' . "\0" . 'master', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Coordinator' . "\0" . 'client', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Coordinator' . "\0" . 'typecontract', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Coordinator' . "\0" . 'creationdate'];
        }

        return ['__isInitialized__', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Coordinator' . "\0" . 'id', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Coordinator' . "\0" . 'name', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Coordinator' . "\0" . 'email', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Coordinator' . "\0" . 'phone', 'pwd', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Coordinator' . "\0" . 'createby', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Coordinator' . "\0" . 'master', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Coordinator' . "\0" . 'client', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Coordinator' . "\0" . 'typecontract', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Coordinator' . "\0" . 'creationdate'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Coordinator $proxy) {
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone($phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', [$phone]);

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', []);

        return parent::getPhone();
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
    public function setTypecontract(\Bo\AdminBundle\Entity\Typecontract $typecontract = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypecontract', [$typecontract]);

        return parent::setTypecontract($typecontract);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypecontract()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypecontract', []);

        return parent::getTypecontract();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreateby($createby)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreateby', [$createby]);

        return parent::setCreateby($createby);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreateby()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreateby', []);

        return parent::getCreateby();
    }

    /**
     * {@inheritDoc}
     */
    public function setPwd($pwd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPwd', [$pwd]);

        return parent::setPwd($pwd);
    }

    /**
     * {@inheritDoc}
     */
    public function getPwd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPwd', []);

        return parent::getPwd();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaster($master)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaster', [$master]);

        return parent::setMaster($master);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaster()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaster', []);

        return parent::getMaster();
    }

    /**
     * {@inheritDoc}
     */
    public function setClient(\Bo\AdminBundle\Entity\Client $client = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClient', [$client]);

        return parent::setClient($client);
    }

    /**
     * {@inheritDoc}
     */
    public function getClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClient', []);

        return parent::getClient();
    }

}
