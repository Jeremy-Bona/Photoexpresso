<?php

namespace PhotoexpressoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="User", uniqueConstraints={@ORM\UniqueConstraint(name="login_UNIQUE", columns={"login"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isBackend", type="boolean", nullable=true)
     */
    private $isbackend;

    /**
     * @var boolean
     *
     * @ORM\Column(name="validated", type="boolean", nullable=true)
     */
    private $validated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime", type="datetime", nullable=true)
     */
    private $datetime;

    /**
     * @var integer
     *
     * @ORM\Column(name="godfather", type="integer", nullable=true)
     */
    private $godfather;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="PhotoexpressoBundle\Entity\Address", mappedBy="user")
     */
    private $address;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->address = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
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
     * @return User
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
     * Set login
     *
     * @param string $login
     *
     * @return User
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set isbackend
     *
     * @param boolean $isbackend
     *
     * @return User
     */
    public function setIsbackend($isbackend)
    {
        $this->isbackend = $isbackend;

        return $this;
    }

    /**
     * Get isbackend
     *
     * @return boolean
     */
    public function getIsbackend()
    {
        return $this->isbackend;
    }

    /**
     * Set validated
     *
     * @param boolean $validated
     *
     * @return User
     */
    public function setValidated($validated)
    {
        $this->validated = $validated;

        return $this;
    }

    /**
     * Get validated
     *
     * @return boolean
     */
    public function getValidated()
    {
        return $this->validated;
    }

    /**
     * Set datetime
     *
     * @param \DateTime $datetime
     *
     * @return User
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * Get datetime
     *
     * @return \DateTime
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Set godfather
     *
     * @param integer $godfather
     *
     * @return User
     */
    public function setGodfather($godfather)
    {
        $this->godfather = $godfather;

        return $this;
    }

    /**
     * Get godfather
     *
     * @return integer
     */
    public function getGodfather()
    {
        return $this->godfather;
    }

    /**
     * Add address
     *
     * @param \PhotoexpressoBundle\Entity\Address $address
     *
     * @return User
     */
    public function addAddress(\PhotoexpressoBundle\Entity\Address $address)
    {
        $this->address[] = $address;

        return $this;
    }

    /**
     * Remove address
     *
     * @param \PhotoexpressoBundle\Entity\Address $address
     */
    public function removeAddress(\PhotoexpressoBundle\Entity\Address $address)
    {
        $this->address->removeElement($address);
    }

    /**
     * Get address
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAddress()
    {
        return $this->address;
    }

    public function __toString() {
      return $this->lastname;
  }
}
