<?php

namespace PhotoexpressoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="Address")
 * @ORM\Entity
 */
class Address
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
     * @ORM\Column(name="adressName", type="string", length=100, nullable=true)
     */
    private $adressname;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="adressComplement", type="string", length=100, nullable=true)
     */
    private $adresscomplement;

    /**
     * @var integer
     *
     * @ORM\Column(name="zipCode", type="integer", nullable=true)
     */
    private $zipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=45, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=45, nullable=true)
     */
    private $country;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isDefault", type="boolean", nullable=true)
     */
    private $isdefault;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isFactureDefault", type="boolean", nullable=true)
     */
    private $isfacturedefault;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime", type="datetime", nullable=true)
     */
    private $datetime;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="PhotoexpressoBundle\Entity\User", inversedBy="address")
     * @ORM\JoinTable(name="address_has_user",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Address_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="User_id", referencedColumnName="id")
     *   }
     * )
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set adressname
     *
     * @param string $adressname
     *
     * @return Address
     */
    public function setAdressname($adressname)
    {
        $this->adressname = $adressname;

        return $this;
    }

    /**
     * Get adressname
     *
     * @return string
     */
    public function getAdressname()
    {
        return $this->adressname;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Address
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set adresscomplement
     *
     * @param string $adresscomplement
     *
     * @return Address
     */
    public function setAdresscomplement($adresscomplement)
    {
        $this->adresscomplement = $adresscomplement;

        return $this;
    }

    /**
     * Get adresscomplement
     *
     * @return string
     */
    public function getAdresscomplement()
    {
        return $this->adresscomplement;
    }

    /**
     * Set zipcode
     *
     * @param integer $zipcode
     *
     * @return Address
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return integer
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Address
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set isdefault
     *
     * @param boolean $isdefault
     *
     * @return Address
     */
    public function setIsdefault($isdefault)
    {
        $this->isdefault = $isdefault;

        return $this;
    }

    /**
     * Get isdefault
     *
     * @return boolean
     */
    public function getIsdefault()
    {
        return $this->isdefault;
    }

    /**
     * Set isfacturedefault
     *
     * @param boolean $isfacturedefault
     *
     * @return Address
     */
    public function setIsfacturedefault($isfacturedefault)
    {
        $this->isfacturedefault = $isfacturedefault;

        return $this;
    }

    /**
     * Get isfacturedefault
     *
     * @return boolean
     */
    public function getIsfacturedefault()
    {
        return $this->isfacturedefault;
    }

    /**
     * Set datetime
     *
     * @param \DateTime $datetime
     *
     * @return Address
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
     * Add user
     *
     * @param \PhotoexpressoBundle\Entity\User $user
     *
     * @return Address
     */
    public function addUser(\PhotoexpressoBundle\Entity\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \PhotoexpressoBundle\Entity\User $user
     */
    public function removeUser(\PhotoexpressoBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUser()
    {
        return $this->user;
    }

    public function __toString() {
        return $this->adressname;
    }
}
