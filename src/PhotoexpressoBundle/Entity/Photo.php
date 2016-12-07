<?php

namespace PhotoexpressoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 *
 * @ORM\Table(name="Photo")
 * @ORM\Entity
 */
class Photo
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
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="basename", type="string", length=45, nullable=true)
     */
    private $basename;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="PhotoexpressoBundle\Entity\Actions", inversedBy="photo")
     * @ORM\JoinTable(name="photo_has_actions",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Photo_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Actions_id", referencedColumnName="id"),
     *     @ORM\JoinColumn(name="Actions_User_id", referencedColumnName="User_id")
     *   }
     * )
     */
    private $actions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actions = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set path
     *
     * @param string $path
     *
     * @return Photo
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set basename
     *
     * @param string $basename
     *
     * @return Photo
     */
    public function setBasename($basename)
    {
        $this->basename = $basename;

        return $this;
    }

    /**
     * Get basename
     *
     * @return string
     */
    public function getBasename()
    {
        return $this->basename;
    }

    /**
     * Add action
     *
     * @param \PhotoexpressoBundle\Entity\Actions $action
     *
     * @return Photo
     */
    public function addAction(\PhotoexpressoBundle\Entity\Actions $action)
    {
        $this->actions[] = $action;

        return $this;
    }

    /**
     * Remove action
     *
     * @param \PhotoexpressoBundle\Entity\Actions $action
     */
    public function removeAction(\PhotoexpressoBundle\Entity\Actions $action)
    {
        $this->actions->removeElement($action);
    }

    /**
     * Get actions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActions()
    {
        return $this->actions;
    }
}
