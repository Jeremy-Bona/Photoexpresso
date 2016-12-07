<?php

namespace PhotoexpressoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Device
 *
 * @ORM\Table(name="Device")
 * @ORM\Entity
 */
class Device
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
     * @ORM\Column(name="imei", type="string", length=255, nullable=true)
     */
    private $imei;

    /**
     * @var string
     *
     * @ORM\Column(name="modei", type="string", length=255, nullable=true)
     */
    private $modei;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;



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
     * Set imei
     *
     * @param string $imei
     *
     * @return Device
     */
    public function setImei($imei)
    {
        $this->imei = $imei;

        return $this;
    }

    /**
     * Get imei
     *
     * @return string
     */
    public function getImei()
    {
        return $this->imei;
    }

    /**
     * Set modei
     *
     * @param string $modei
     *
     * @return Device
     */
    public function setModei($modei)
    {
        $this->modei = $modei;

        return $this;
    }

    /**
     * Get modei
     *
     * @return string
     */
    public function getModei()
    {
        return $this->modei;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Device
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
}
