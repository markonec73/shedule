<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patients
 *
 * @ORM\Table(name="patients")
 * @ORM\Entity
 */
class Patients
{
    /**
     * @var int
     *
     * @ORM\Column(name="Patient_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $patientId;

    /**
     * @var string
     *
     * @ORM\Column(name="First_name", type="string", length=32, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="Middle_name", type="string", length=32, nullable=false)
     */
    private $middleName;

    /**
     * @var string
     *
     * @ORM\Column(name="Last_name", type="string", length=32, nullable=false)
     */
    private $lastName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_of_birth", type="datetime", nullable=false)
     */
    private $dateOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="Gender", type="string", length=32, nullable=false)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="Telephone", type="string", length=32, nullable=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="Other_details", type="string", length=32, nullable=false)
     */
    private $otherDetails;


}
