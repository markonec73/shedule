<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Priveleges
 *
 * @ORM\Table(name="priveleges")
 * @ORM\Entity
 */
class Priveleges
{
    /**
     * @var int
     *
     * @ORM\Column(name="Privelege_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $privelegeId;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=32, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=32, nullable=false)
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Roles", mappedBy="privelege")
     */
    private $role;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->role = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
