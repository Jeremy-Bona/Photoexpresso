<?php

namespace Proxies\__CG__\PhotoexpressoBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \PhotoexpressoBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'PhotoexpressoBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'PhotoexpressoBundle\\Entity\\User' . "\0" . 'firstname', '' . "\0" . 'PhotoexpressoBundle\\Entity\\User' . "\0" . 'lastname', '' . "\0" . 'PhotoexpressoBundle\\Entity\\User' . "\0" . 'login', '' . "\0" . 'PhotoexpressoBundle\\Entity\\User' . "\0" . 'email', '' . "\0" . 'PhotoexpressoBundle\\Entity\\User' . "\0" . 'isbackend', '' . "\0" . 'PhotoexpressoBundle\\Entity\\User' . "\0" . 'validated', '' . "\0" . 'PhotoexpressoBundle\\Entity\\User' . "\0" . 'datetime', '' . "\0" . 'PhotoexpressoBundle\\Entity\\User' . "\0" . 'godfather', '' . "\0" . 'PhotoexpressoBundle\\Entity\\User' . "\0" . 'address'];
        }

        return ['__isInitialized__', '' . "\0" . 'PhotoexpressoBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'PhotoexpressoBundle\\Entity\\User' . "\0" . 'firstname', '' . "\0" . 'PhotoexpressoBundle\\Entity\\User' . "\0" . 'lastname', '' . "\0" . 'PhotoexpressoBundle\\Entity\\User' . "\0" . 'login', '' . "\0" . 'PhotoexpressoBundle\\Entity\\User' . "\0" . 'email', '' . "\0" . 'PhotoexpressoBundle\\Entity\\User' . "\0" . 'isbackend', '' . "\0" . 'PhotoexpressoBundle\\Entity\\User' . "\0" . 'validated', '' . "\0" . 'PhotoexpressoBundle\\Entity\\User' . "\0" . 'datetime', '' . "\0" . 'PhotoexpressoBundle\\Entity\\User' . "\0" . 'godfather', '' . "\0" . 'PhotoexpressoBundle\\Entity\\User' . "\0" . 'address'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function setLastname($lastname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastname', [$lastname]);

        return parent::setLastname($lastname);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastname', []);

        return parent::getLastname();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogin($login)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogin', [$login]);

        return parent::setLogin($login);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogin', []);

        return parent::getLogin();
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
    public function setIsbackend($isbackend)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsbackend', [$isbackend]);

        return parent::setIsbackend($isbackend);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsbackend()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsbackend', []);

        return parent::getIsbackend();
    }

    /**
     * {@inheritDoc}
     */
    public function setValidated($validated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValidated', [$validated]);

        return parent::setValidated($validated);
    }

    /**
     * {@inheritDoc}
     */
    public function getValidated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValidated', []);

        return parent::getValidated();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatetime($datetime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatetime', [$datetime]);

        return parent::setDatetime($datetime);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatetime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatetime', []);

        return parent::getDatetime();
    }

    /**
     * {@inheritDoc}
     */
    public function setGodfather($godfather)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGodfather', [$godfather]);

        return parent::setGodfather($godfather);
    }

    /**
     * {@inheritDoc}
     */
    public function getGodfather()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGodfather', []);

        return parent::getGodfather();
    }

    /**
     * {@inheritDoc}
     */
    public function addAddress(\PhotoexpressoBundle\Entity\Address $address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAddress', [$address]);

        return parent::addAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAddress(\PhotoexpressoBundle\Entity\Address $address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAddress', [$address]);

        return parent::removeAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
