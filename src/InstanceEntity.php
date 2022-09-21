<?php

namespace Estimtrack\Bedtracksdkphp;


use Illuminate\Support\Carbon;

class InstanceEntity
{

    public $isEctopic;
    public $forecast_releasable_at;
    public $desti_alta;
    public $arrival_at;
    public $diagnostic;
    public $portardor_via;
    public $antecendents;
    public $special_needs;
    public $proves_pendents;
    public $proves_realitzades;
    public $pending_analytics;
    public $last_deposition;
    public $quirurgic_intervention;
    public $drenatges;
    public $colostomia;
    public $sonda_vesical;
    public $oxigenoterapia;
    public $control_glicemia;
    public $nhc_mother;
    public $birth_at;
    public $part_type;
    public $nhc;
    public $bed_ref;
    public $bed_state;
    public $bed_booked;
    public $doctor_email;
    public $patient_type;
    public $fragility_index;
    public $bolquer;
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


    /**
     * @return mixed
     */
    public function getIsEctopic()
    {
        return $this->isEctopic;
    }

    /**
     * @param mixed $isEctopic
     * @return InstanceEntity
     */
    public function setIsEctopic($isEctopic)
    {
        $this->isEctopic = $isEctopic;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getForecastReleasableAt()
    {
        return $this->forecast_releasable_at;
    }

    /**
     * @param mixed $forecast_releasable_at
     * @return InstanceEntity
     */
    public function setForecastReleasableAt($forecast_releasable_at)
    {
        $this->forecast_releasable_at = $forecast_releasable_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDestiAlta()
    {
        return $this->desti_alta;
    }

    /**
     * @param mixed $desti_alta
     * @return InstanceEntity
     */
    public function setDestiAlta($desti_alta)
    {
        $this->desti_alta = $desti_alta;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getArrivalAt()
    {
        return $this->arrival_at;
    }

    /**
     * @param mixed $arrival_at
     * @return InstanceEntity
     */
    public function setArrivalAt($arrival_at)
    {
        $this->arrival_at = $arrival_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiagnostic()
    {
        return $this->diagnostic;
    }

    /**
     * @param mixed $diagnostic
     * @return InstanceEntity
     */
    public function setDiagnostic($diagnostic)
    {
        $this->diagnostic = $diagnostic;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPortardorVia()
    {
        return $this->portardor_via;
    }

    /**
     * @param mixed $portardor_via
     * @return InstanceEntity
     */
    public function setPortardorVia($portardor_via)
    {
        $this->portardor_via = $portardor_via;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAntecendents()
    {
        return $this->antecendents;
    }

    /**
     * @param mixed $antecendents
     * @return InstanceEntity
     */
    public function setAntecendents($antecendents)
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
    public function setSpecialNeeds($special_needs)
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
    public function setProvesPendents($proves_pendents)
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
    public function setProvesRealitzades($proves_realitzades)
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
    public function setPendingAnalytics($pending_analytics)
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
    public function setLastDeposition($last_deposition)
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
    public function setQuirurgicIntervention($quirurgic_intervention)
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
    public function setDrenatges($drenatges)
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
    public function setColostomia($colostomia)
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
    public function setSondaVesical($sonda_vesical)
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
    public function setOxigenoterapia($oxigenoterapia)
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
    public function setControlGlicemia($control_glicemia)
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
    public function setNhcMother($nhc_mother)
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
    public function setBirthAt($birth_at)
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
    public function setPartType($part_type)
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
    public function setNhc($nhc)
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
    public function setBedRef($bed_ref)
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
    public function setBedState($bed_state)
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
    public function setDoctorEmail($doctor_email)
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
    public function setPatientType($patient_type)
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
    public function setFragilityIndex($fragility_index)
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
    public function setBolquer($bolquer)
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
    public function setIsolationType($isolation_type)
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
    public function setPatientName($patient_name)
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
    public function setPatientGender($patient_gender)
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
    public function setPatientAge($patient_age)
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
    public function setSurname1($surname1)
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
    public function setSurname2($surname2)
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
    public function setAllergies($allergies)
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
    public function setUniqueRef($unique_ref)
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
    public function setDietType($diet_type)
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
    public function setCura($cura)
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
    public function setTherapies($therapies)
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
    public function setAcos($acos)
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
    public function setInformeAltaSignat($informe_alta_signat)
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
    public function setHospIsBaby($hosp_is_baby)
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
    public function setServiceRef($service_ref)
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
    public function setServiceName($service_name)
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
    public function setChecklist($checklist)
    {
        $this->checklist = $checklist;
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
    public function setIsSingleBed($is_single_bed)
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
    public function setIsAltaAdmin($is_alta_admin)
    {
        $this->is_alta_admin = $is_alta_admin;
        return $this;
    }



}
