<?php

namespace Estimtrack\Bedtracksdkphp;

class BedPatientEntity extends BedEntity
{

    /**
     * @var ?string name of the patient
     */
    public ?string $patient_name;

    /**
     * @var ?mixed patient gender, 0 for man, 1 for woman .
     */
    public $patient_gender;

    /**
     * @var ?string  patient first surname
     */
    public ?string $surname1;

    /**
     * @var ?string  patient second surname
     */
    public ?string $surname2;

    /**
     * @var ?string  patient unique identifier
     */
    public ?string $nhc;

    /**
     * @var ?int patient age .
     */
    public ?int $patient_age;


    /**
     * @return string|null
     */
    public function getPatientName(): ?string
    {
        return $this->patient_name;
    }

    /**
     * @param mixed $patient_name
     * @return BedPatientEntity
     */
    public function setPatientName($patient_name): BedPatientEntity
    {
        $this->patient_name = $patient_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPatientGender()
    {
        return $this->patient_gender;
    }

    /**
     * @param mixed $patient_gender
     * @return BedPatientEntity
     */
    public function setPatientGender($patient_gender): BedPatientEntity
    {
        $this->patient_gender = $patient_gender;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPatientAge(): ?int
    {
        return $this->patient_age;
    }

    /**
     * @param mixed $patient_age
     * @return BedPatientEntity
     */
    public function setPatientAge($patient_age): BedPatientEntity
    {
        $this->patient_age = $patient_age;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSurname1(): ?string
    {
        return $this->surname1;
    }

    /**
     * @param mixed $surname1
     * @return BedPatientEntity
     */
    public function setSurname1($surname1): BedPatientEntity
    {
        $this->surname1 = $surname1;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSurname2(): ?string
    {
        return $this->surname2;
    }

    /**
     * @param mixed $surname2
     * @return BedPatientEntity
     */
    public function setSurname2($surname2): BedPatientEntity
    {
        $this->surname2 = $surname2;
        return $this;
    }

}
