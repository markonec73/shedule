<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
{
    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=32, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=32, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="First_name", type="string", length=32, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="Last_name", type="string", length=32, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="Middle_name", type="string", length=32, nullable=false)
     */
    private $middleName;

    /**
     * @var string
     *
     * @ORM\Column(name="Qualifications", type="string", length=32, nullable=false)
     */
    private $qualifications;

    /**
     * @var string
     *
     * @ORM\Column(name="Telephone", type="string", length=32, nullable=false)
     */
    private $telephone;

    /**
     * @var \UsersRoles
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="UsersRoles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="User_ID", referencedColumnName="User_ID")
     * })
     */
    private $user;


}
