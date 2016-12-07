<?php

namespace PhotoexpressoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deviceversion
 *
 * @ORM\Table(name="DeviceVersion", indexes={@ORM\Index(name="fk_DeviceVersion_Device1_idx", columns={"Device_id"}), @ORM\Index(name="fk_DeviceVersion_AppVersioning1_idx", columns={"AppVersioning_id"})})
 * @ORM\Entity
 */
class Deviceversion
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
     * @var \DateTime
     *
     * @ORM\Column(name="installDatetime", type="datetime", nullable=true)
     */
    private $installdatetime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="uninstallDatetime", type="datetime", nullable=true)
     */
    private $uninstalldatetime;

    /**
     * @var \PhotoexpressoBundle\Entity\Appversioning
     *
     * @ORM\OneToOne(targetEntity="PhotoexpressoBundle\Entity\Appversioning")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AppVersioning_id", referencedColumnName="id", unique=true)
     * })
     */
    private $appversioning;

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
     * Set id
     *
     * @param integer $id
     *
     * @return Deviceversion
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
     * Set installdatetime
     *
     * @param \DateTime $installdatetime
     *
     * @return Deviceversion
     */
    public function setInstalldatetime($installdatetime)
    {
        $this->installdatetime = $installdatetime;

        return $this;
    }

    /**
     * Get installdatetime
     *
     * @return \DateTime
     */
    public function getInstalldatetime()
    {
        return $this->installdatetime;
    }

    /**
     * Set uninstalldatetime
     *
     * @param \DateTime $uninstalldatetime
     *
     * @return Deviceversion
     */
    public function setUninstalldatetime($uninstalldatetime)
    {
        $this->uninstalldatetime = $uninstalldatetime;

        return $this;
    }

    /**
     * Get uninstalldatetime
     *
     * @return \DateTime
     */
    public function getUninstalldatetime()
    {
        return $this->uninstalldatetime;
    }

    /**
     * Set appversioning
     *
     * @param \PhotoexpressoBundle\Entity\Appversioning $appversioning
     *
     * @return Deviceversion
     */
    public function setAppversioning(\PhotoexpressoBundle\Entity\Appversioning $appversioning = null)
    {
        $this->appversioning = $appversioning;

        return $this;
    }

    /**
     * Get appversioning
     *
     * @return \PhotoexpressoBundle\Entity\Appversioning
     */
    public function getAppversioning()
    {
        return $this->appversioning;
    }

    /**
     * Set device
     *
     * @param \PhotoexpressoBundle\Entity\Device $device
     *
     * @return Deviceversion
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
}
