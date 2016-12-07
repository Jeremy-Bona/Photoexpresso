<?php

namespace PhotoexpressoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Righstgroup
 *
 * @ORM\Table(name="RighstGroup")
 * @ORM\Entity
 */
class Righstgroup
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
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="right_container", type="string", length=45, nullable=true)
     */
    private $rightContainer;



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
     * Set name
     *
     * @param string $name
     *
     * @return Righstgroup
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

    /**
     * Set rightContainer
     *
     * @param string $rightContainer
     *
     * @return Righstgroup
     */
    public function setRightContainer($rightContainer)
    {
        $this->rightContainer = $rightContainer;

        return $this;
    }

    /**
     * Get rightContainer
     *
     * @return string
     */
    public function getRightContainer()
    {
        return $this->rightContainer;
    }
}
