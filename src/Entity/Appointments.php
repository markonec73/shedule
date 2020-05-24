<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appointments
 *
 * @ORM\Table(name="appointments", indexes={@ORM\Index(name="Patient_ID", columns={"Patient_ID"}), @ORM\Index(name="Cabinet_ID", columns={"Cabinet_ID"}), @ORM\Index(name="User_ID", columns={"User_ID"})})
 * @ORM\Entity
 */
class Appointments
{
    /**
     * @var int
     *
     * @ORM\Column(name="Appointment_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $appointmentId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_of_appointment", type="datetime", nullable=false)
     */
    private $dateOfAppointment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Time_of_appointment", type="datetime", nullable=false)
     */
    private $timeOfAppointment;

    /**
     * @var \Patients
     *
     * @ORM\ManyToOne(targetEntity="Patients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Patient_ID", referencedColumnName="Patient_ID")
     * })
     */
    private $patient;

    /**
     * @var \Cabinets
     *
     * @ORM\ManyToOne(targetEntity="Cabinets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Cabinet_ID", referencedColumnName="Cabinet_ID")
     * })
     */
    private $cabinet;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="User_ID", referencedColumnName="User_ID")
     * })
     */
    private $user;


}
