<?php

namespace PhotoexpressoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Token
 *
 * @ORM\Table(name="Token", indexes={@ORM\Index(name="fk_Token_User1_idx", columns={"User_id"})})
 * @ORM\Entity
 */
class Token
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
     * @ORM\Column(name="token", type="string", length=255, nullable=true)
     */
    private $token;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreate", type="datetime", nullable=true)
     */
    private $datecreate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateExpire", type="datetime", nullable=true)
     */
    private $dateexpire;

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
     * @return Token
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
     * Set token
     *
     * @param string $token
     *
     * @return Token
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set datecreate
     *
     * @param \DateTime $datecreate
     *
     * @return Token
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
     * Set dateexpire
     *
     * @param \DateTime $dateexpire
     *
     * @return Token
     */
    public function setDateexpire($dateexpire)
    {
        $this->dateexpire = $dateexpire;

        return $this;
    }

    /**
     * Get dateexpire
     *
     * @return \DateTime
     */
    public function getDateexpire()
    {
        return $this->dateexpire;
    }

    /**
     * Set user
     *
     * @param \PhotoexpressoBundle\Entity\User $user
     *
     * @return Token
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
