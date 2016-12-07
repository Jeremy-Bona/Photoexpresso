<?php

namespace PhotoexpressoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 *
 * @ORM\Table(name="Payment", indexes={@ORM\Index(name="fk_Payment_User1_idx", columns={"User_id"})})
 * @ORM\Entity
 */
class Payment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="valid_until", type="string", length=45, nullable=true)
     */
    private $validUntil;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=45, nullable=true)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="payer_id", type="string", length=255, nullable=true)
     */
    private $payerId;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=45, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="integer", nullable=true)
     */
    private $number;

    /**
     * @var integer
     *
     * @ORM\Column(name="expireMonth", type="integer", nullable=true)
     */
    private $expiremonth;

    /**
     * @var integer
     *
     * @ORM\Column(name="expireYear", type="integer", nullable=true)
     */
    private $expireyear;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=45, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=45, nullable=true)
     */
    private $lastname;

    /**
     * @var \PhotoexpressoBundle\Entity\User
     *
     * @ORM\OneToOne(targetEntity="PhotoexpressoBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="User_id", referencedColumnName="id", unique=true)
     * })
     */
    private $user;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Payment
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set validUntil
     *
     * @param string $validUntil
     *
     * @return Payment
     */
    public function setValidUntil($validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    /**
     * Get validUntil
     *
     * @return string
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return Payment
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set payerId
     *
     * @param string $payerId
     *
     * @return Payment
     */
    public function setPayerId($payerId)
    {
        $this->payerId = $payerId;

        return $this;
    }

    /**
     * Get payerId
     *
     * @return string
     */
    public function getPayerId()
    {
        return $this->payerId;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Payment
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set number
     *
     * @param integer $number
     *
     * @return Payment
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set expiremonth
     *
     * @param integer $expiremonth
     *
     * @return Payment
     */
    public function setExpiremonth($expiremonth)
    {
        $this->expiremonth = $expiremonth;

        return $this;
    }

    /**
     * Get expiremonth
     *
     * @return integer
     */
    public function getExpiremonth()
    {
        return $this->expiremonth;
    }

    /**
     * Set expireyear
     *
     * @param integer $expireyear
     *
     * @return Payment
     */
    public function setExpireyear($expireyear)
    {
        $this->expireyear = $expireyear;

        return $this;
    }

    /**
     * Get expireyear
     *
     * @return integer
     */
    public function getExpireyear()
    {
        return $this->expireyear;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Payment
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Payment
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set user
     *
     * @param \PhotoexpressoBundle\Entity\User $user
     *
     * @return Payment
     */
    public function setUser(\PhotoexpressoBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \PhotoexpressoBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
