<?php

namespace Estimtrack\Bedtracksdkphp;


class InstanceEntity extends BedPatientEntity
{

    /**
     * @var ?string hospitalization unique reference
     */
    public ?string $unique_ref;


    /**
     * @var ?string  string with patient allergies
     */
    public ?string $allergies;

    /**
     * @var ?string patient's diet type
     */
    public ?string $diet_type;

    /**
     * @var ?string some extra required care treatment .
     */
    public ?string $cura;

    /**
     * @var ?string  required therapies .
     */
    public ?string $therapies;

    /**
     * @var ?string acos .
     */
    public ?string $acos;


    /**
     * @var ?string  json encoded array of checklists
     */
    public ?string $checklist;
    /**
     * @var ?string  unique area reference
     */

    public ?string $area_ref;
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
    public ?string $proves_realitzades;

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
     * @var ?string  doctor reference (ideally email but not necessary) ->unique
     */
    public ?string $doctor_email;



    /**
     * @var ?string  patient carries intravenous route
     */
    public ?string $portador_via;

    /**
     * @var ?string isolation description
     */
    public ?string $isolation_desc;


    /**
     * @var ?int  current bed state . useful for disabling a bed or enabling it.
     * the integer should correspond to one of the states specified in BedtrackConstants.php,
     * ideally only one of those three
     *
     * BED_FREE
     * BED_OCCUPIED
     * BED_DISABLED
     */
    public ?int $bed_state;


    /**
     * @var ?int patient type, corresponding to one of the possible ids in bedtrack constants
     * PATIENT_TYPE_PRIVATE_ID = 1;
     * PATIENT_TYPE_MUTUA_ID = 2;
     * PATIENT_TYPE_CATSALUT_ID = 3;
     * PATIENT_TYPE_CATSALUT_PRIVATE_ID = 4;
     *
     */
    public ?int $patient_type;

    /**
     * @var ?int fragility index, corresponding to one of the possible ids in bedtrack constants
     * FRAG_INDEX_1_ID = 1;
     * FRAG_INDEX_2_ID = 2;
     * FRAG_INDEX_3_ID = 3;
     * FRAG_INDEX_4_ID = 4;
     *
     */
    public ?int $fragility_index;

    /**
     * @var ?int isolation type, corresponding to one of the possible ids in bedtrack constants
     * ISO_AIR_ID = 1;
     * ISO_CONTACT_ID = 2;
     * ISO_DROPS_ID = 3;
     * ISO_CONTACT_DROPS_ID = 4;
     * ISO_CONTACT_AIR_ID = 5;
     *
     */
    public ?int $isolation_type;


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
     * @var ?bool  true if patient is isolated -> ideally , if true, the isolation_type field should also be provided
     */
    public ?bool $isolation;

    /**
     * @var ?bool true if  discharge report has been signed .
     */
    public ?bool $informe_alta_signat;

    /**
     * @var ?bool true if  the patient hospitalized is a newborn .
     */

    public ?bool $hosp_is_baby;

    /**
     * @var ?bool true if the bed is the only one in the room .
     */
    public ?bool $is_single_bed;

    /**
     * @var ?bool true if  patient has been officially discharged.
     */
    public ?bool $is_alta_admin;
    /**
     * @var mixed
     */
    private $colostomia;

    /**
     * @return string|null
     */
    public function getAreaRef(): ?string
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
     * @return string|null
     */
    public function getSpecialNeeds(): ?string
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
     * @return string|null
     */
    public function getProvesPendents(): ?string
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
     * @return string|null
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
     * @return string|null
     */
    public function getLastDeposition(): ?string
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
     * @return string|null
     */
    public function getQuirurgicIntervention(): ?string
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
     * @return bool
     */
    public function getOxigenoterapia(): bool
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
     * @return bool
     */
    public function getControlGlicemia(): bool
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
     * @return string|null
     */
    public function getNhcMother(): ?string
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
     * @return string|null
     */
    public function getBirthAt(): ?string
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
     * @return string|null
     */
    public function getPartType(): ?string
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
     * @return int|null
     */
    public function getBedState(): ?int
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
     * @return string|null
     */
    public function getDoctorEmail(): ?string
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
     * @return int|null
     */
    public function getPatientType(): ?int
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
     * @return int|null
     */
    public function getFragilityIndex(): ?int
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
     * @return string|null
     */
    public function getAllergies(): ?string
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
     * @return string|null
     */
    public function getUniqueRef(): ?string
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
     * @return string|null
     */
    public function getDietType(): ?string
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
     * @return string|null
     */
    public function getCura(): ?string
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
     * @return string|null
     */
    public function getTherapies(): ?string
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
     * @return bool|null
     */
    public function getHospIsBaby(): ?bool
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
     * @return string|null
     */
    public function getChecklist(): ?string
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

    /**
     * @return string|null
     */
    public function getIsolationDesc(): ?string
    {
        return $this->isolation_desc;
    }

    /**
     * @param string|null $isolation_desc
     * @return InstanceEntity
     */
    public function setIsolationDesc(?string $isolation_desc): InstanceEntity
    {
        $this->isolation_desc = $isolation_desc;
        return $this;
    }

}
