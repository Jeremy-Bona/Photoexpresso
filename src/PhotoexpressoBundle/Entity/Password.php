<?php

namespace PhotoexpressoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Password
 *
 * @ORM\Table(name="Password", indexes={@ORM\Index(name="fk_Password_User_idx", columns={"User_id"})})
 * @ORM\Entity
 */
class Password
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
     * @ORM\Column(name="pwd_sha256", type="string", length=255, nullable=true)
     */
    private $pwdSha256;

    /**
     * @var string
     *
     * @ORM\Column(name="datetime", type="string", length=45, nullable=true)
     */
    private $datetime;

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
     * @return Password
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
     * Set pwdSha256
     *
     * @param string $pwdSha256
     *
     * @return Password
     */
    public function setPwdSha256($pwdSha256)
    {
        $this->pwdSha256 = $pwdSha256;

        return $this;
    }

    /**
     * Get pwdSha256
     *
     * @return string
     */
    public function getPwdSha256()
    {
        return $this->pwdSha256;
    }

    /**
     * Set datetime
     *
     * @param string $datetime
     *
     * @return Password
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * Get datetime
     *
     * @return string
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Set user
     *
     * @param \PhotoexpressoBundle\Entity\User $user
     *
     * @return Password
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
