<?php

namespace PhotoexpressoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserPromo
 *
 * @ORM\Table(name="User_Promo", indexes={@ORM\Index(name="fk_User_Promo_User1_idx", columns={"User_id"}), @ORM\Index(name="fk_User_Promo_Promotionnal1_idx", columns={"Promotionnal_idPromotionnal"})})
 * @ORM\Entity
 */
class UserPromo
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
     * @ORM\Column(name="checked", type="datetime", nullable=true)
     */
    private $checked;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="used", type="datetime", nullable=true)
     */
    private $used;

    /**
     * @var \PhotoexpressoBundle\Entity\Promotionnal
     *
     * @ORM\OneToOne(targetEntity="PhotoexpressoBundle\Entity\Promotionnal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Promotionnal_idPromotionnal", referencedColumnName="idPromotionnal", unique=true)
     * })
     */
    private $promotionnalpromotionnal;

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
     * @return UserPromo
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
     * Set checked
     *
     * @param \DateTime $checked
     *
     * @return UserPromo
     */
    public function setChecked($checked)
    {
        $this->checked = $checked;

        return $this;
    }

    /**
     * Get checked
     *
     * @return \DateTime
     */
    public function getChecked()
    {
        return $this->checked;
    }

    /**
     * Set used
     *
     * @param \DateTime $used
     *
     * @return UserPromo
     */
    public function setUsed($used)
    {
        $this->used = $used;

        return $this;
    }

    /**
     * Get used
     *
     * @return \DateTime
     */
    public function getUsed()
    {
        return $this->used;
    }

    /**
     * Set promotionnalpromotionnal
     *
     * @param \PhotoexpressoBundle\Entity\Promotionnal $promotionnalpromotionnal
     *
     * @return UserPromo
     */
    public function setPromotionnalpromotionnal(\PhotoexpressoBundle\Entity\Promotionnal $promotionnalpromotionnal = null)
    {
        $this->promotionnalpromotionnal = $promotionnalpromotionnal;

        return $this;
    }

    /**
     * Get promotionnalpromotionnal
     *
     * @return \PhotoexpressoBundle\Entity\Promotionnal
     */
    public function getPromotionnalpromotionnal()
    {
        return $this->promotionnalpromotionnal;
    }

    /**
     * Set user
     *
     * @param \PhotoexpressoBundle\Entity\User $user
     *
     * @return UserPromo
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
