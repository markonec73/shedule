<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersRoles
 *
 * @ORM\Table(name="users_roles", indexes={@ORM\Index(name="Role_ID", columns={"Role_ID"})})
 * @ORM\Entity
 */
class UsersRoles
{
    /**
     * @var int
     *
     * @ORM\Column(name="User_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId;

    /**
     * @var \Roles
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Role_ID", referencedColumnName="Role_ID")
     * })
     */
    private $role;


}
