<?php

namespace PhotoexpressoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotionnal
 *
 * @ORM\Table(name="Promotionnal")
 * @ORM\Entity
 */
class Promotionnal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPromotionnal", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpromotionnal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreate", type="datetime", nullable=true)
     */
    private $datecreate;

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
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;



    /**
     * Get idpromotionnal
     *
     * @return integer
     */
    public function getIdpromotionnal()
    {
        return $this->idpromotionnal;
    }

    /**
     * Set datecreate
     *
     * @param \DateTime $datecreate
     *
     * @return Promotionnal
     */
    public function setDatecreate($datecreate)
    {
        $this->datecreate = $datecreate;

        return $this;
    }

    /**
     * Get datecreate
     *
     * @return \DateTime
     */
    public function getDatecreate()
    {
        return $this->datecreate;
    }

    /**
     * Set datestart
     *
     * @param \DateTime $datestart
     *
     * @return Promotionnal
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
     * @return Promotionnal
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
     * Set url
     *
     * @param string $url
     *
     * @return Promotionnal
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
