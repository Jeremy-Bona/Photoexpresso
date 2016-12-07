<?php

namespace PhotoexpressoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userrights
 *
 * @ORM\Table(name="UserRights", indexes={@ORM\Index(name="fk_UserRights_User1_idx", columns={"User_id"}), @ORM\Index(name="fk_UserRights_RighstGroup1_idx", columns={"RighstGroup_id"}), @ORM\Index(name="fk_UserRights_Rights1_idx", columns={"Rights_id"})})
 * @ORM\Entity
 */
class Userrights
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
     * @var \PhotoexpressoBundle\Entity\Righstgroup
     *
     * @ORM\OneToOne(targetEntity="PhotoexpressoBundle\Entity\Righstgroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="RighstGroup_id", referencedColumnName="id", unique=true)
     * })
     */
    private $righstgroup;

    /**
     * @var \PhotoexpressoBundle\Entity\Rights
     *
     * @ORM\OneToOne(targetEntity="PhotoexpressoBundle\Entity\Rights")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Rights_id", referencedColumnName="id", unique=true)
     * })
     */
    private $rights;

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
     * @return Userrights
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
     * Set datestart
     *
     * @param \DateTime $datestart
     *
     * @return Userrights
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
     * @return Userrights
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
     * Set righstgroup
     *
     * @param \PhotoexpressoBundle\Entity\Righstgroup $righstgroup
     *
     * @return Userrights
     */
    public function setRighstgroup(\PhotoexpressoBundle\Entity\Righstgroup $righstgroup = null)
    {
        $this->righstgroup = $righstgroup;

        return $this;
    }

    /**
     * Get righstgroup
     *
     * @return \PhotoexpressoBundle\Entity\Righstgroup
     */
    public function getRighstgroup()
    {
        return $this->righstgroup;
    }

    /**
     * Set rights
     *
     * @param \PhotoexpressoBundle\Entity\Rights $rights
     *
     * @return Userrights
     */
    public function setRights(\PhotoexpressoBundle\Entity\Rights $rights = null)
    {
        $this->rights = $rights;

        return $this;
    }

    /**
     * Get rights
     *
     * @return \PhotoexpressoBundle\Entity\Rights
     */
    public function getRights()
    {
        return $this->rights;
    }

    /**
     * Set user
     *
     * @param \PhotoexpressoBundle\Entity\User $user
     *
     * @return Userrights
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
