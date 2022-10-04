<?php

namespace Estimtrack\Bedtracksdkphp;

class BedtrackConstants
{

    // bed states expected to be received

    const BED_FREE = 1;
    const BED_OCCUPIED = 2;
    const BED_EMPTY_OUT_PENDING = 3;
    const BED_CLEAN_PENDING = 4;
    const BED_PREPARE_PENDING = 5;
    const BED_DISABLED = 6;

    //patient types

    const PATIENT_TYPE_PRIVATE_ID = 1;
    const PATIENT_TYPE_MUTUA_ID = 2;
    const PATIENT_TYPE_CATSALUT_ID = 3;
    const PATIENT_TYPE_CATSALUT_PRIVATE_ID = 4;

    //fragility index
    const FRAG_INDEX_1_ID = 1;
    const FRAG_INDEX_2_ID = 2;
    const FRAG_INDEX_3_ID = 3;
    const FRAG_INDEX_4_ID = 4;

    // isolation type ids => 1,2,3,4,5
    const ISO_AIR_ID = 1;
    const ISO_CONTACT_ID = 2;
    const ISO_DROPS_ID = 3;
    const ISO_CONTACT_DROPS_ID = 4;
    const ISO_CONTACT_AIR_ID = 5;


    //accepted checklist answers .
    const CREATE_FALSE_CHECK = 2;
    const CREATE_CHECK_UNDEFINED = 0;
    const CREATE_TRUE_CHECK = 1;

    //standard accepted format days
    const FORMAT_DAY = 'Y-m-d';

}
