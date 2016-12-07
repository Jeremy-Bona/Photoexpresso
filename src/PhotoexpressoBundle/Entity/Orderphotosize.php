<?php

namespace PhotoexpressoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orderphotosize
 *
 * @ORM\Table(name="OrderPhotoSize", indexes={@ORM\Index(name="fk_PrintSize_has_Order_PrintSize1_idx", columns={"PrintSize_id"}), @ORM\Index(name="fk_PrintSize_has_Order_Photo1_idx", columns={"Photo_id"}), @ORM\Index(name="fk_OrderPhotoSize_Order1_idx", columns={"Order_id"})})
 * @ORM\Entity
 */
class Orderphotosize
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
     * @var integer
     *
     * @ORM\Column(name="number", type="integer", nullable=true)
     */
    private $number;

    /**
     * @var integer
     *
     * @ORM\Column(name="brilliantMat", type="integer", nullable=true)
     */
    private $brilliantmat;

    /**
     * @var integer
     *
     * @ORM\Column(name="marge", type="integer", nullable=true)
     */
    private $marge;

    /**
     * @var string
     *
     * @ORM\Column(name="messagePhoto", type="string", length=255, nullable=true)
     */
    private $messagephoto;

    /**
     * @var \PhotoexpressoBundle\Entity\Order
     *
     * @ORM\ManyToOne(targetEntity="PhotoexpressoBundle\Entity\Order")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Order_id", referencedColumnName="id")
     * })
     */
    private $order;

    /**
     * @var \PhotoexpressoBundle\Entity\Photo
     *
     * @ORM\ManyToOne(targetEntity="PhotoexpressoBundle\Entity\Photo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Photo_id", referencedColumnName="id")
     * })
     */
    private $photo;

    /**
     * @var \PhotoexpressoBundle\Entity\Printsize
     *
     * @ORM\ManyToOne(targetEntity="PhotoexpressoBundle\Entity\Printsize")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PrintSize_id", referencedColumnName="id")
     * })
     */
    private $printsize;



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
     * Set number
     *
     * @param integer $number
     *
     * @return Orderphotosize
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
     * Set brilliantmat
     *
     * @param integer $brilliantmat
     *
     * @return Orderphotosize
     */
    public function setBrilliantmat($brilliantmat)
    {
        $this->brilliantmat = $brilliantmat;

        return $this;
    }

    /**
     * Get brilliantmat
     *
     * @return integer
     */
    public function getBrilliantmat()
    {
        return $this->brilliantmat;
    }

    /**
     * Set marge
     *
     * @param integer $marge
     *
     * @return Orderphotosize
     */
    public function setMarge($marge)
    {
        $this->marge = $marge;

        return $this;
    }

    /**
     * Get marge
     *
     * @return integer
     */
    public function getMarge()
    {
        return $this->marge;
    }

    /**
     * Set messagephoto
     *
     * @param string $messagephoto
     *
     * @return Orderphotosize
     */
    public function setMessagephoto($messagephoto)
    {
        $this->messagephoto = $messagephoto;

        return $this;
    }

    /**
     * Get messagephoto
     *
     * @return string
     */
    public function getMessagephoto()
    {
        return $this->messagephoto;
    }

    /**
     * Set order
     *
     * @param \PhotoexpressoBundle\Entity\Order $order
     *
     * @return Orderphotosize
     */
    public function setOrder(\PhotoexpressoBundle\Entity\Order $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \PhotoexpressoBundle\Entity\Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set photo
     *
     * @param \PhotoexpressoBundle\Entity\Photo $photo
     *
     * @return Orderphotosize
     */
    public function setPhoto(\PhotoexpressoBundle\Entity\Photo $photo = null)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return \PhotoexpressoBundle\Entity\Photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set printsize
     *
     * @param \PhotoexpressoBundle\Entity\Printsize $printsize
     *
     * @return Orderphotosize
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
