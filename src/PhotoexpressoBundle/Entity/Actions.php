<?php

namespace PhotoexpressoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actions
 *
 * @ORM\Table(name="Actions", indexes={@ORM\Index(name="fk_Actions_User1_idx", columns={"User_id"})})
 * @ORM\Entity
 */
class Actions
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
     * @ORM\Column(name="datetime", type="datetime", nullable=true)
     */
    private $datetime;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="string", length=255, nullable=true)
     */
    private $details;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="PhotoexpressoBundle\Entity\Photo", mappedBy="actions")
     */
    private $photo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->photo = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Actions
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
     * Set datetime
     *
     * @param \DateTime $datetime
     *
     * @return Actions
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
     * Set details
     *
     * @param string $details
     *
     * @return Actions
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set user
     *
     * @param \PhotoexpressoBundle\Entity\User $user
     *
     * @return Actions
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

    /**
     * Add photo
     *
     * @param \PhotoexpressoBundle\Entity\Photo $photo
     *
     * @return Actions
     */
    public function addPhoto(\PhotoexpressoBundle\Entity\Photo $photo)
    {
        $this->photo[] = $photo;

        return $this;
    }

    /**
     * Remove photo
     *
     * @param \PhotoexpressoBundle\Entity\Photo $photo
     */
    public function removePhoto(\PhotoexpressoBundle\Entity\Photo $photo)
    {
        $this->photo->removeElement($photo);
    }

    /**
     * Get photo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}
