<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cabinets
 *
 * @ORM\Table(name="cabinets")
 * @ORM\Entity
 */
class Cabinets
{
    /**
     * @var int
     *
     * @ORM\Column(name="Cabinet_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cabinetId;

    /**
     * @var string
     *
     * @ORM\Column(name="Responsible_of_cab", type="string", length=32, nullable=false)
     */
    private $responsibleOfCab;

    /**
     * @var string
     *
     * @ORM\Column(name="Telephone_of_cab", type="string", length=32, nullable=false)
     */
    private $telephoneOfCab;


}
