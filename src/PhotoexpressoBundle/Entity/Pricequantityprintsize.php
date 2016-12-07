<?php

namespace PhotoexpressoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pricequantityprintsize
 *
 * @ORM\Table(name="PriceQuantityPrintSize", indexes={@ORM\Index(name="fk_PriceQuantityPrintSize_PrintSize1_idx", columns={"PrintSize_id"})})
 * @ORM\Entity
 */
class Pricequantityprintsize
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
     * @var integer
     *
     * @ORM\Column(name="fromQuantity", type="integer", nullable=true)
     */
    private $fromquantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="toQuantity", type="integer", nullable=true)
     */
    private $toquantity;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=true)
     */
    private $price;

    /**
     * @var \PhotoexpressoBundle\Entity\Printsize
     *
     * @ORM\OneToOne(targetEntity="PhotoexpressoBundle\Entity\Printsize")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PrintSize_id", referencedColumnName="id", unique=true)
     * })
     */
    private $printsize;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Pricequantityprintsize
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
     * Set fromquantity
     *
     * @param integer $fromquantity
     *
     * @return Pricequantityprintsize
     */
    public function setFromquantity($fromquantity)
    {
        $this->fromquantity = $fromquantity;

        return $this;
    }

    /**
     * Get fromquantity
     *
     * @return integer
     */
    public function getFromquantity()
    {
        return $this->fromquantity;
    }

    /**
     * Set toquantity
     *
     * @param integer $toquantity
     *
     * @return Pricequantityprintsize
     */
    public function setToquantity($toquantity)
    {
        $this->toquantity = $toquantity;

        return $this;
    }

    /**
     * Get toquantity
     *
     * @return integer
     */
    public function getToquantity()
    {
        return $this->toquantity;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Pricequantityprintsize
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
     * Set printsize
     *
     * @param \PhotoexpressoBundle\Entity\Printsize $printsize
     *
     * @return Pricequantityprintsize
     */
    public function setPrintsize(\PhotoexpressoBundle\Entity\Printsize $printsize = null)
    {
        $this->printsize = $printsize;

        return $this;
    }

    /**
     * Get printsize
     *
     * @return \PhotoexpressoBundle\Entity\Printsize
     */
    public function getPrintsize()
    {
        return $this->printsize;
    }
}
