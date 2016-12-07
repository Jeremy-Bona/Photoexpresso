<?php

namespace PhotoexpressoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userdevice
 *
 * @ORM\Table(name="UserDevice", indexes={@ORM\Index(name="fk_UserDevice_User1_idx", columns={"User_id"}), @ORM\Index(name="fk_UserDevice_Device1_idx", columns={"Device_id"})})
 * @ORM\Entity
 */
class Userdevice
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
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime", type="datetime", nullable=true)
     */
    private $datetime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="connected", type="boolean", nullable=true)
     */
    private $connected;

    /**
     * @var \PhotoexpressoBundle\Entity\Device
     *
     * @ORM\OneToOne(targetEntity="PhotoexpressoBundle\Entity\Device")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Device_id", referencedColumnName="id", unique=true)
     * })
     */
    private $device;

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
     * @return Userdevice
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
     * Set name
     *
     * @param string $name
     *
     * @return Userdevice
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set datetime
     *
     * @param \DateTime $datetime
     *
     * @return Userdevice
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
     * Set connected
     *
     * @param boolean $connected
     *
     * @return Userdevice
     */
    public function setConnected($connected)
    {
        $this->connected = $connected;

        return $this;
    }

    /**
     * Get connected
     *
     * @return boolean
     */
    public function getConnected()
    {
        return $this->connected;
    }

    /**
     * Set device
     *
     * @param \PhotoexpressoBundle\Entity\Device $device
     *
     * @return Userdevice
     */
    public function setDevice(\PhotoexpressoBundle\Entity\Device $device = null)
    {
        $this->device = $device;

        return $this;
    }

    /**
     * Get device
     *
     * @return \PhotoexpressoBundle\Entity\Device
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Set user
     *
     * @param \PhotoexpressoBundle\Entity\User $user
     *
     * @return Userdevice
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
