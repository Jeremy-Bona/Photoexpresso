<?php

namespace PhotoexpressoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appversioning
 *
 * @ORM\Table(name="AppVersioning")
 * @ORM\Entity
 */
class Appversioning
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
     * @ORM\Column(name="version", type="string", length=45, nullable=true)
     */
    private $version;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateStart", type="datetime", nullable=true)
     */
    private $datestart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateStop", type="datetime", nullable=true)
     */
    private $datestop;

    /**
     * @var string
     *
     * @ORM\Column(name="APIVersion", type="string", length=45, nullable=true)
     */
    private $apiversion;



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
     * Set version
     *
     * @param string $version
     *
     * @return Appversioning
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set datestart
     *
     * @param \DateTime $datestart
     *
     * @return Appversioning
     */
    public function setDatestart($datestart)
    {
        $this->datestart = $datestart;

        return $this;
    }

    /**
     * Get datestart
     *
     * @return \DateTime
     */
    public function getDatestart()
    {
        return $this->datestart;
    }

    /**
     * Set datestop
     *
     * @param \DateTime $datestop
     *
     * @return Appversioning
     */
    public function setDatestop($datestop)
    {
        $this->datestop = $datestop;

        return $this;
    }

    /**
     * Get datestop
     *
     * @return \DateTime
     */
    public function getDatestop()
    {
        return $this->datestop;
    }

    /**
     * Set apiversion
     *
     * @param string $apiversion
     *
     * @return Appversioning
     */
    public function setApiversion($apiversion)
    {
        $this->apiversion = $apiversion;

        return $this;
    }

    /**
     * Get apiversion
     *
     * @return string
     */
    public function getApiversion()
    {
        return $this->apiversion;
    }
}
