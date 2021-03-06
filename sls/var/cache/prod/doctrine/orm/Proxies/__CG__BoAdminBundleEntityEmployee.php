<?php

namespace Proxies\__CG__\Bo\AdminBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Employee extends \Bo\AdminBundle\Entity\Employee implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = ['path' => NULL];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {
        unset($this->path);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @param string $name
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);

            return $this->$name;
        }

        trigger_error(sprintf('Undefined property: %s::$%s', __CLASS__, $name), E_USER_NOTICE);
    }

    /**
     * 
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', [$name, $value]);

            $this->$name = $value;

            return;
        }

        $this->$name = $value;
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', [$name]);

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'id', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'sexe', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'name', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'firstname', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'email', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'email1', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'homenumber', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'cellnumber', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'address1', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'address2', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'birthdate', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'profil', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'status', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'contracts', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'group', 'agenda', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'hiringdate', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'active', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'remove', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'available', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'note', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'langage', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'englishlevel', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'frenchlevel', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'typecontract', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'categoryteacher', 'path', 'file', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'creationdate', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'hourrate', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'createby', 'pwd', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'tsdate', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'loginsentby', 'loginsentdate'];
        }

        return ['__isInitialized__', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'id', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'sexe', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'name', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'firstname', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'email', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'email1', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'homenumber', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'cellnumber', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'address1', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'address2', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'birthdate', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'profil', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'status', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'contracts', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'group', 'agenda', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'hiringdate', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'active', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'remove', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'available', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'note', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'langage', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'englishlevel', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'frenchlevel', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'typecontract', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'categoryteacher', 'file', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'creationdate', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'hourrate', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'createby', 'pwd', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'tsdate', '' . "\0" . 'Bo\\AdminBundle\\Entity\\Employee' . "\0" . 'loginsentby', 'loginsentdate'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Employee $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->path);
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
    public function setFirstname($firstname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstname', [$firstname]);

        return parent::setFirstname($firstname);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstname', []);

        return parent::getFirstname();
    }

    /**
     * {@inheritDoc}
     */
    public function getFullname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullname', []);

        return parent::getFullname();
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
    public function setEmail1($email1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail1', [$email1]);

        return parent::setEmail1($email1);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail1', []);

        return parent::getEmail1();
    }

    /**
     * {@inheritDoc}
     */
    public function setHomenumber($homenumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHomenumber', [$homenumber]);

        return parent::setHomenumber($homenumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getHomenumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHomenumber', []);

        return parent::getHomenumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setCellnumber($cellnumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCellnumber', [$cellnumber]);

        return parent::setCellnumber($cellnumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getCellnumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCellnumber', []);

        return parent::getCellnumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress1($address1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress1', [$address1]);

        return parent::setAddress1($address1);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress1', []);

        return parent::getAddress1();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress2($address2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress2', [$address2]);

        return parent::setAddress2($address2);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress2', []);

        return parent::getAddress2();
    }

    /**
     * {@inheritDoc}
     */
    public function setBirthdate($birthdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBirthdate', [$birthdate]);

        return parent::setBirthdate($birthdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getBirthdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBirthdate', []);

        return parent::getBirthdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setHiringdate($hiringdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHiringdate', [$hiringdate]);

        return parent::setHiringdate($hiringdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getHiringdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHiringdate', []);

        return parent::getHiringdate();
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
    public function setProfil(\Bo\AdminBundle\Entity\Profil $profil = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfil', [$profil]);

        return parent::setProfil($profil);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfil()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfil', []);

        return parent::getProfil();
    }

    /**
     * {@inheritDoc}
     */
    public function getAbsolutePath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbsolutePath', []);

        return parent::getAbsolutePath();
    }

    /**
     * {@inheritDoc}
     */
    public function getWebPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebPath', []);

        return parent::getWebPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setPath($path)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPath', [$path]);

        return parent::setPath($path);
    }

    /**
     * {@inheritDoc}
     */
    public function getPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPath', []);

        return parent::getPath();
    }

    /**
     * {@inheritDoc}
     */
    public function upload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upload', []);

        return parent::upload();
    }

    /**
     * {@inheritDoc}
     */
    public function preUpload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpload', []);

        return parent::preUpload();
    }

    /**
     * {@inheritDoc}
     */
    public function removeUpload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUpload', []);

        return parent::removeUpload();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(\Bo\AdminBundle\Entity\Status $status = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setActive($active)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', [$active]);

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActive', []);

        return parent::getActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setNote($note)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNote', [$note]);

        return parent::setNote($note);
    }

    /**
     * {@inheritDoc}
     */
    public function getNote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNote', []);

        return parent::getNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setSexe($sexe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSexe', [$sexe]);

        return parent::setSexe($sexe);
    }

    /**
     * {@inheritDoc}
     */
    public function getSexe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSexe', []);

        return parent::getSexe();
    }

    /**
     * {@inheritDoc}
     */
    public function setHourrate($hourrate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHourrate', [$hourrate]);

        return parent::setHourrate($hourrate);
    }

    /**
     * {@inheritDoc}
     */
    public function getHourrate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHourrate', []);

        return parent::getHourrate();
    }

    /**
     * {@inheritDoc}
     */
    public function setLanguage($language)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLanguage', [$language]);

        return parent::setLanguage($language);
    }

    /**
     * {@inheritDoc}
     */
    public function getLanguage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLanguage', []);

        return parent::getLanguage();
    }

    /**
     * {@inheritDoc}
     */
    public function addTypecontract(\Bo\AdminBundle\Entity\Typecontract $typecontract)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTypecontract', [$typecontract]);

        return parent::addTypecontract($typecontract);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTypecontract(\Bo\AdminBundle\Entity\Typecontract $typecontract)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTypecontract', [$typecontract]);

        return parent::removeTypecontract($typecontract);
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
    public function setCategoryteacher(\Bo\AdminBundle\Entity\Categoryteacher $categoryteacher = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategoryteacher', [$categoryteacher]);

        return parent::setCategoryteacher($categoryteacher);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategoryteacher()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategoryteacher', []);

        return parent::getCategoryteacher();
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
    public function setEnglishlevel($englishlevel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnglishlevel', [$englishlevel]);

        return parent::setEnglishlevel($englishlevel);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnglishlevel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnglishlevel', []);

        return parent::getEnglishlevel();
    }

    /**
     * {@inheritDoc}
     */
    public function setFrenchlevel($frenchlevel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFrenchlevel', [$frenchlevel]);

        return parent::setFrenchlevel($frenchlevel);
    }

    /**
     * {@inheritDoc}
     */
    public function getFrenchlevel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFrenchlevel', []);

        return parent::getFrenchlevel();
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
    public function setLangage(\Bo\AdminBundle\Entity\Language $langage = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLangage', [$langage]);

        return parent::setLangage($langage);
    }

    /**
     * {@inheritDoc}
     */
    public function getLangage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLangage', []);

        return parent::getLangage();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvailable($available)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvailable', [$available]);

        return parent::setAvailable($available);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvailable', []);

        return parent::getAvailable();
    }

    /**
     * {@inheritDoc}
     */
    public function addContract(\Bo\AdminBundle\Entity\Contracts $contract)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addContract', [$contract]);

        return parent::addContract($contract);
    }

    /**
     * {@inheritDoc}
     */
    public function removeContract(\Bo\AdminBundle\Entity\Contracts $contract)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeContract', [$contract]);

        return parent::removeContract($contract);
    }

    /**
     * {@inheritDoc}
     */
    public function getContracts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContracts', []);

        return parent::getContracts();
    }

    /**
     * {@inheritDoc}
     */
    public function addGroup(\Bo\AdminBundle\Entity\Group $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGroup', [$group]);

        return parent::addGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGroup(\Bo\AdminBundle\Entity\Group $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGroup', [$group]);

        return parent::removeGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroup()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroup', []);

        return parent::getGroup();
    }

    /**
     * {@inheritDoc}
     */
    public function setRemove($remove)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRemove', [$remove]);

        return parent::setRemove($remove);
    }

    /**
     * {@inheritDoc}
     */
    public function getRemove()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRemove', []);

        return parent::getRemove();
    }

    /**
     * {@inheritDoc}
     */
    public function setTsdate($tsdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTsdate', [$tsdate]);

        return parent::setTsdate($tsdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getTsdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTsdate', []);

        return parent::getTsdate();
    }

    /**
     * {@inheritDoc}
     */
    public function addAgenda(\Bo\AdminBundle\Entity\Agenda $agenda)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAgenda', [$agenda]);

        return parent::addAgenda($agenda);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAgenda(\Bo\AdminBundle\Entity\Agenda $agenda)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAgenda', [$agenda]);

        return parent::removeAgenda($agenda);
    }

    /**
     * {@inheritDoc}
     */
    public function getAgenda()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgenda', []);

        return parent::getAgenda();
    }

    /**
     * {@inheritDoc}
     */
    public function setLoginsentby($loginsentby)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLoginsentby', [$loginsentby]);

        return parent::setLoginsentby($loginsentby);
    }

    /**
     * {@inheritDoc}
     */
    public function getLoginsentby()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoginsentby', []);

        return parent::getLoginsentby();
    }

    /**
     * {@inheritDoc}
     */
    public function setLoginsentdate($loginsentdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLoginsentdate', [$loginsentdate]);

        return parent::setLoginsentdate($loginsentdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getLoginsentdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoginsentdate', []);

        return parent::getLoginsentdate();
    }

}
