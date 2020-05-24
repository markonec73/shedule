<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roles
 *
 * @ORM\Table(name="roles")
 * @ORM\Entity
 */
class Roles
{
    /**
     * @var int
     *
     * @ORM\Column(name="Role_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $roleId;

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
     * @ORM\ManyToMany(targetEntity="Priveleges", inversedBy="role")
     * @ORM\JoinTable(name="roles_priveleges",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Role_ID", referencedColumnName="Role_ID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Privelege_ID", referencedColumnName="Privelege_ID")
     *   }
     * )
     */
    private $privelege;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->privelege = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
