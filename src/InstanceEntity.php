<?php

namespace Estimtrack\Bedtracksdkphp;


class InstanceEntity
{

    /**
     * @var ?string  a string day in the format of Y-m-d
     */
    public ?string $forecast_releasable_at;

    /**
     * @var ?string  a free text field specifying the patient's next location after discharging her/him .
     */
    public ?string $desti_alta;

    /**
     * @var ?string patients date of arrival , ideally a timestamp . if not possible , a string day in format Y-m-d
     */
    public ?string $arrival_at;

    /**
     * @var ?string  patient's diagnosis
     */
    public ?string $diagnostic;
    /**
     * @var ?string  a free text field specifying  patient's medical history
     */
    public ?string $antecendents;

    /**
     * @var ?string  a free text field specifying which kind of special needs does the patient require (if any)
     */
    public ?string $special_needs;

    /**
     * @var ?string  a string specifying the patient's  pending tests
     */
    public ?string $proves_pendents;

    /**
     * @var ?string  a string specifying the patient's  performed tests
     */
    public  ?string $proves_realitzades;

    /**
     * @var ?string  a string specifying the patient's pending analysis
     */
    public ?string $pending_analytics;

    /**
     * @var ?string  a string  date with the format Y-m-d specifying the last patient's deposition ->standard Estimtrack date format can be found in BedtrackConstants.php
     */

    public ?string $last_deposition;

    /**
     * @var ?string  a string specifying the next quirurgic intervention (if any)
     */
    public ?string $quirurgic_intervention;


    /**
     * @var ?bool  true if patient requires  urinary catheter
     */

    public ?bool $sonda_vesical;

    /**
     * @var bool  true if patient requires  drainage
     */

    public bool $drenatges = false;

    /**
     * @var bool  true if patient requires  oxigenotherapy
     */
    public bool $oxigenoterapia = false;

    /**
     * @var bool  true if patient requires glycemia control
     */
    public bool $control_glicemia = false;

    /**
     * @var ?bool  true if patient is ectopic (a bed or unit that she/he is not supposed to be in)
     */

    public ?bool $isEctopic;

    /**
     * @var ?string  patient carries intravenous route
     */
    public ?string $portador_via;

    /**
     * @var ?bool  true if patient is isolated -> ideally , if true, the isolation_type field should also be provided
     */
    public ?bool $isolation;

    /**
     * @var ?string mother unique identifier, expected to be filled if the patient is a newborn
     */
    public ?string $nhc_mother;

    /**
     * @var ?string  birth type (for newborn patients) -> a string timestamp
     */
    public ?string $birth_at;

    /**
     * @var ?string  birth type (for newborn patients)
     */
    public ?string $part_type;

    /**
     * @var ?string  patient unique identifier
     */
    public ?string $nhc;

    /**
     * @var ?string  bed reference -> (or bed number)
     */
    public ?string $bed_ref;

    /**
     * @var ?int  current bed state . useful for disabling a bed or enabling it. the integer should correspond to one of the states specified in BedtrackConstants.php,
     * ideally only one of those three
     *
     * BED_FREE
     * BED_OCCUPIED
     * BED_DISABLED
     */
    public ?int $bed_state;
    public $bed_booked;
    public $doctor_email;
    public $patient_type;
    public $fragility_index;
    public $isolation_type;
    public $patient_name;
    public $patient_gender;
    public $patient_age;
    public $surname1;
    public $surname2;
    public $allergies;
    public $unique_ref;
    public $diet_type;
    public $cura;
    public $therapies;
    public $acos;
    public $informe_alta_signat;
    public $hosp_is_baby;
    public $service_ref;
    public $service_name;
    public $checklist;
    public $is_single_bed;
    public $is_alta_admin;

    public $area_ref;

    /**
     * @return mixed
     */
    public function getAreaRef()
    {
        return $this->area_ref;
    }

    /**
     * @param mixed $area_ref
     */
    public function setAreaRef($area_ref): InstanceEntity
    {
        $this->area_ref = $area_ref;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAreaName()
    {
        return $this->area_name;
    }

    /**
     * @param mixed $area_name
     */
    public function setAreaName($area_name): InstanceEntity
    {
        $this->area_name = $area_name;
        return $this;
    }

    public $area_name;


    /**
     * @return bool|null
     */
    public function getIsEctopic(): ?bool
    {
        return $this->isEctopic;
    }

    /**
     * @param mixed $isEctopic
     * @return InstanceEntity
     */
    public function setIsEctopic($isEctopic): InstanceEntity
    {
        $this->isEctopic = $isEctopic;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getForecastReleasableAt(): ?string
    {
        return $this->forecast_releasable_at;
    }

    /**
     * @param mixed $forecast_releasable_at
     * @return InstanceEntity
     */
    public function setForecastReleasableAt($forecast_releasable_at): InstanceEntity
    {
        $this->forecast_releasable_at = $forecast_releasable_at;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDestiAlta(): ?string
    {
        return $this->desti_alta;
    }

    /**
     * @param mixed $desti_alta
     * @return InstanceEntity
     */
    public function setDestiAlta($desti_alta): InstanceEntity
    {
        $this->desti_alta = $desti_alta;
        return $this;
    }


    public function getArrivalAt(): ?string
    {
        return $this->arrival_at;
    }

    /**
     * @param mixed $arrival_at
     * @return InstanceEntity
     */
    public function setArrivalAt($arrival_at): InstanceEntity
    {
        $this->arrival_at = $arrival_at;
        return $this;
    }


    public function getDiagnostic(): ?string
    {
        return $this->diagnostic;
    }

    /**
     * @param $diagnostic
     * @return InstanceEntity
     */
    public function setDiagnostic($diagnostic): InstanceEntity
    {
        $this->diagnostic = $diagnostic;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPortadorVia(): ?string
    {
        return $this->portador_via;
    }

    /**
     * @param mixed $portador_via
     * @return InstanceEntity
     */
    public function setPortadorVia($portador_via): InstanceEntity
    {
        $this->portador_via = $portador_via;
        return $this;
    }


    /**
     * @return string|null
     */
    public function getAntecendents(): ?string
    {
        return $this->antecendents;
    }

    /**
     * @param  $antecendents
     * @return InstanceEntity
     */
    public function setAntecendents($antecendents): InstanceEntity
    {
        $this->antecendents = $antecendents;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSpecialNeeds()
    {
        return $this->special_needs;
    }

    /**
     * @param mixed $special_needs
     * @return InstanceEntity
     */
    public function setSpecialNeeds($special_needs): InstanceEntity
    {
        $this->special_needs = $special_needs;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProvesPendents()
    {
        return $this->proves_pendents;
    }

    /**
     * @param mixed $proves_pendents
     * @return InstanceEntity
     */
    public function setProvesPendents($proves_pendents): InstanceEntity
    {
        $this->proves_pendents = $proves_pendents;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProvesRealitzades()
    {
        return $this->proves_realitzades;
    }

    /**
     * @param mixed $proves_realitzades
     * @return InstanceEntity
     */
    public function setProvesRealitzades($proves_realitzades): InstanceEntity
    {
        $this->proves_realitzades = $proves_realitzades;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPendingAnalytics()
    {
        return $this->pending_analytics;
    }

    /**
     * @param mixed $pending_analytics
     * @return InstanceEntity
     */
    public function setPendingAnalytics($pending_analytics): InstanceEntity
    {
        $this->pending_analytics = $pending_analytics;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastDeposition()
    {
        return $this->last_deposition;
    }

    /**
     * @param mixed $last_deposition
     * @return InstanceEntity
     */
    public function setLastDeposition($last_deposition): InstanceEntity
    {
        $this->last_deposition = $last_deposition;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuirurgicIntervention()
    {
        return $this->quirurgic_intervention;
    }

    /**
     * @param mixed $quirurgic_intervention
     * @return InstanceEntity
     */
    public function setQuirurgicIntervention($quirurgic_intervention): InstanceEntity
    {
        $this->quirurgic_intervention = $quirurgic_intervention;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDrenatges()
    {
        return $this->drenatges;
    }

    /**
     * @param mixed $drenatges
     * @return InstanceEntity
     */
    public function setDrenatges($drenatges): InstanceEntity
    {
        $this->drenatges = $drenatges;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getColostomia()
    {
        return $this->colostomia;
    }

    /**
     * @param mixed $colostomia
     * @return InstanceEntity
     */
    public function setColostomia($colostomia): InstanceEntity
    {
        $this->colostomia = $colostomia;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSondaVesical()
    {
        return $this->sonda_vesical;
    }

    /**
     * @param mixed $sonda_vesical
     * @return InstanceEntity
     */
    public function setSondaVesical($sonda_vesical): InstanceEntity
    {
        $this->sonda_vesical = $sonda_vesical;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOxigenoterapia()
    {
        return $this->oxigenoterapia;
    }

    /**
     * @param mixed $oxigenoterapia
     * @return InstanceEntity
     */
    public function setOxigenoterapia($oxigenoterapia): InstanceEntity
    {
        $this->oxigenoterapia = $oxigenoterapia;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getControlGlicemia()
    {
        return $this->control_glicemia;
    }

    /**
     * @param mixed $control_glicemia
     * @return InstanceEntity
     */
    public function setControlGlicemia($control_glicemia): InstanceEntity
    {
        $this->control_glicemia = $control_glicemia;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNhcMother()
    {
        return $this->nhc_mother;
    }

    /**
     * @param mixed $nhc_mother
     * @return InstanceEntity
     */
    public function setNhcMother($nhc_mother): InstanceEntity
    {
        $this->nhc_mother = $nhc_mother;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBirthAt()
    {
        return $this->birth_at;
    }

    /**
     * @param mixed $birth_at
     * @return InstanceEntity
     */
    public function setBirthAt($birth_at): InstanceEntity
    {
        $this->birth_at = $birth_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPartType()
    {
        return $this->part_type;
    }

    /**
     * @param mixed $part_type
     * @return InstanceEntity
     */
    public function setPartType($part_type): InstanceEntity
    {
        $this->part_type = $part_type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNhc()
    {
        return $this->nhc;
    }

    /**
     * @param mixed $nhc
     * @return InstanceEntity
     */
    public function setNhc($nhc): InstanceEntity
    {
        $this->nhc = $nhc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBedRef()
    {
        return $this->bed_ref;
    }

    /**
     * @param mixed $bed_ref
     * @return InstanceEntity
     */
    public function setBedRef($bed_ref): InstanceEntity
    {
        $this->bed_ref = $bed_ref;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBedState()
    {
        return $this->bed_state;
    }

    /**
     * @param mixed $bed_state
     * @return InstanceEntity
     */
    public function setBedState($bed_state): InstanceEntity
    {
        $this->bed_state = $bed_state;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBedBooked()
    {
        return $this->bed_booked;
    }

    /**
     * @param mixed $bed_booked
     * @return InstanceEntity
     */
    public function setBedBooked($bed_booked)
    {
        $this->bed_booked = $bed_booked;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDoctorEmail()
    {
        return $this->doctor_email;
    }

    /**
     * @param mixed $doctor_email
     * @return InstanceEntity
     */
    public function setDoctorEmail($doctor_email): InstanceEntity
    {
        $this->doctor_email = $doctor_email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPatientType()
    {
        return $this->patient_type;
    }

    /**
     * @param mixed $patient_type
     * @return InstanceEntity
     */
    public function setPatientType($patient_type): InstanceEntity
    {
        $this->patient_type = $patient_type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFragilityIndex()
    {
        return $this->fragility_index;
    }

    /**
     * @param mixed $fragility_index
     * @return InstanceEntity
     */
    public function setFragilityIndex($fragility_index): InstanceEntity
    {
        $this->fragility_index = $fragility_index;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBolquer()
    {
        return $this->bolquer;
    }

    /**
     * @param mixed $bolquer
     * @return InstanceEntity
     */
    public function setBolquer($bolquer): InstanceEntity
    {
        $this->bolquer = $bolquer;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsolationType()
    {
        return $this->isolation_type;
    }

    /**
     * @param mixed $isolation_type
     * @return InstanceEntity
     */
    public function setIsolationType($isolation_type): InstanceEntity
    {
        $this->isolation_type = $isolation_type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPatientName()
    {
        return $this->patient_name;
    }

    /**
     * @param mixed $patient_name
     * @return InstanceEntity
     */
    public function setPatientName($patient_name): InstanceEntity
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
     * @return InstanceEntity
     */
    public function setPatientGender($patient_gender): InstanceEntity
    {
        $this->patient_gender = $patient_gender;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPatientAge()
    {
        return $this->patient_age;
    }

    /**
     * @param mixed $patient_age
     * @return InstanceEntity
     */
    public function setPatientAge($patient_age): InstanceEntity
    {
        $this->patient_age = $patient_age;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSurname1()
    {
        return $this->surname1;
    }

    /**
     * @param mixed $surname1
     * @return InstanceEntity
     */
    public function setSurname1($surname1): InstanceEntity
    {
        $this->surname1 = $surname1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSurname2()
    {
        return $this->surname2;
    }

    /**
     * @param mixed $surname2
     * @return InstanceEntity
     */
    public function setSurname2($surname2): InstanceEntity
    {
        $this->surname2 = $surname2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAllergies()
    {
        return $this->allergies;
    }

    /**
     * @param mixed $allergies
     * @return InstanceEntity
     */
    public function setAllergies($allergies): InstanceEntity
    {
        $this->allergies = $allergies;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUniqueRef()
    {
        return $this->unique_ref;
    }

    /**
     * @param mixed $unique_ref
     * @return InstanceEntity
     */
    public function setUniqueRef($unique_ref): InstanceEntity
    {
        $this->unique_ref = $unique_ref;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDietType()
    {
        return $this->diet_type;
    }

    /**
     * @param mixed $diet_type
     * @return InstanceEntity
     */
    public function setDietType($diet_type): InstanceEntity
    {
        $this->diet_type = $diet_type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCura()
    {
        return $this->cura;
    }

    /**
     * @param mixed $cura
     * @return InstanceEntity
     */
    public function setCura($cura): InstanceEntity
    {
        $this->cura = $cura;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTherapies()
    {
        return $this->therapies;
    }

    /**
     * @param mixed $therapies
     * @return InstanceEntity
     */
    public function setTherapies($therapies): InstanceEntity
    {
        $this->therapies = $therapies;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAcos()
    {
        return $this->acos;
    }

    /**
     * @param mixed $acos
     * @return InstanceEntity
     */
    public function setAcos($acos): InstanceEntity
    {
        $this->acos = $acos;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInformeAltaSignat()
    {
        return $this->informe_alta_signat;
    }

    /**
     * @param mixed $informe_alta_signat
     * @return InstanceEntity
     */
    public function setInformeAltaSignat($informe_alta_signat): InstanceEntity
    {
        $this->informe_alta_signat = $informe_alta_signat;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHospIsBaby()
    {
        return $this->hosp_is_baby;
    }

    /**
     * @param mixed $hosp_is_baby
     * @return InstanceEntity
     */
    public function setHospIsBaby($hosp_is_baby): InstanceEntity
    {
        $this->hosp_is_baby = $hosp_is_baby;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getServiceRef()
    {
        return $this->service_ref;
    }

    /**
     * @param mixed $service_ref
     * @return InstanceEntity
     */
    public function setServiceRef($service_ref): InstanceEntity
    {
        $this->service_ref = $service_ref;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * @param mixed $service_name
     * @return InstanceEntity
     */
    public function setServiceName($service_name): InstanceEntity
    {
        $this->service_name = $service_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getChecklist()
    {
        return $this->checklist;
    }

    /**
     * @param mixed $checklist
     * @return InstanceEntity
     */
    public function setChecklist($checklist): InstanceEntity
    {
        $this->checklist = json_encode($checklist);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsSingleBed()
    {
        return $this->is_single_bed;
    }

    /**
     * @param mixed $is_single_bed
     * @return InstanceEntity
     */
    public function setIsSingleBed($is_single_bed): InstanceEntity
    {
        $this->is_single_bed = $is_single_bed;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsAltaAdmin()
    {
        return $this->is_alta_admin;
    }

    /**
     * @param mixed $is_alta_admin
     * @return InstanceEntity
     */
    public function setIsAltaAdmin($is_alta_admin): InstanceEntity
    {
        $this->is_alta_admin = $is_alta_admin;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsolation(): ?bool
    {
        return $this->isolation;
    }

    /**
     * @param bool|null $isolation
     * @return InstanceEntity
     */
    public function setIsolation(?bool $isolation): InstanceEntity
    {
        $this->isolation = $isolation;
        return $this;
    }

}
