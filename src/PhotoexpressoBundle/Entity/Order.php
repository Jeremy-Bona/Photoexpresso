<?php

namespace PhotoexpressoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 *
 * @ORM\Table(name="Order", indexes={@ORM\Index(name="fk_Order_User1_idx", columns={"User_id"}), @ORM\Index(name="fk_Order_Address1_idx", columns={"Address_id"})})
 * @ORM\Entity
 */
class Order
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
     * @var \DateTime
     *
     * @ORM\Column(name="datetime", type="datetime", nullable=true)
     */
    private $datetime;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=true)
     */
    private $price;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isValidated", type="boolean", nullable=true)
     */
    private $isvalidated;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isReceived", type="boolean", nullable=true)
     */
    private $isreceived;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isPaid", type="boolean", nullable=true)
     */
    private $ispaid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isPrint", type="boolean", nullable=true)
     */
    private $isprint;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isSent", type="boolean", nullable=true)
     */
    private $issent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isArchive", type="boolean", nullable=true)
     */
    private $isarchive;

    /**
     * @var \PhotoexpressoBundle\Entity\Address
     *
     * @ORM\ManyToOne(targetEntity="PhotoexpressoBundle\Entity\Address")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Address_id", referencedColumnName="id")
     * })
     */
    private $address;

    /**
     * @var \PhotoexpressoBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="PhotoexpressoBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="User_id", referencedColumnName="id")
     * })
     */
    private $user;



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
     * Set datetime
     *
     * @param \DateTime $datetime
     *
     * @return Order
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
     * Set price
     *
     * @param float $price
     *
     * @return Order
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set isvalidated
     *
     * @param boolean $isvalidated
     *
     * @return Order
     */
    public function setIsvalidated($isvalidated)
    {
        $this->isvalidated = $isvalidated;

        return $this;
    }

    /**
     * Get isvalidated
     *
     * @return boolean
     */
    public function getIsvalidated()
    {
        return $this->isvalidated;
    }

    /**
     * Set isreceived
     *
     * @param boolean $isreceived
     *
     * @return Order
     */
    public function setIsreceived($isreceived)
    {
        $this->isreceived = $isreceived;

        return $this;
    }

    /**
     * Get isreceived
     *
     * @return boolean
     */
    public function getIsreceived()
    {
        return $this->isreceived;
    }

    /**
     * Set ispaid
     *
     * @param boolean $ispaid
     *
     * @return Order
     */
    public function setIspaid($ispaid)
    {
        $this->ispaid = $ispaid;

        return $this;
    }

    /**
     * Get ispaid
     *
     * @return boolean
     */
    public function getIspaid()
    {
        return $this->ispaid;
    }

    /**
     * Set isprint
     *
     * @param boolean $isprint
     *
     * @return Order
     */
    public function setIsprint($isprint)
    {
        $this->isprint = $isprint;

        return $this;
    }

    /**
     * Get isprint
     *
     * @return boolean
     */
    public function getIsprint()
    {
        return $this->isprint;
    }

    /**
     * Set issent
     *
     * @param boolean $issent
     *
     * @return Order
     */
    public function setIssent($issent)
    {
        $this->issent = $issent;

        return $this;
    }

    /**
     * Get issent
     *
     * @return boolean
     */
    public function getIssent()
    {
        return $this->issent;
    }

    /**
     * Set isarchive
     *
     * @param boolean $isarchive
     *
     * @return Order
     */
    public function setIsarchive($isarchive)
    {
        $this->isarchive = $isarchive;

        return $this;
    }

    /**
     * Get isarchive
     *
     * @return boolean
     */
    public function getIsarchive()
    {
        return $this->isarchive;
    }

    /**
     * Set address
     *
     * @param \PhotoexpressoBundle\Entity\Address $address
     *
     * @return Order
     */
    public function setAddress(\PhotoexpressoBundle\Entity\Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \PhotoexpressoBundle\Entity\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set user
     *
     * @param \PhotoexpressoBundle\Entity\User $user
     *
     * @return Order
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
