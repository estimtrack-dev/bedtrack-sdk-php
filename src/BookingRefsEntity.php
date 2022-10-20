<?php

namespace Estimtrack\Bedtracksdkphp;

class BookingRefsEntity
{

    /**
     * @var ?array  json encoded array of bed ref and patient nhc
     */
    public ?array $booking_refs = [];


    public function addBookingRef(BookingRefEntity $entity){

        $this->booking_refs[]=  json_decode(json_encode($entity),true);

    }

    public function getBookingRefs(): ?array
    {
        return $this->booking_refs;
    }

}
