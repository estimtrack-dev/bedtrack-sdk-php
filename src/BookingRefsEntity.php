<?php

namespace Estimtrack\Bedtracksdkphp;

class BookingRefsEntity
{

    /**
     * @var ?string   json encoded array of bed ref and patient nhc
     */
    public ?string $booking_refs = null;


    public function getArrayBookingRefs()
    {

        $array = json_decode($this->booking_refs, true);

        return $array ?? [];
    }


    public function setArrayBookingRefs(array $bookingRefs)
    {


        $this->booking_refs = json_encode($bookingRefs);


    }

    public function addBookingRef(BookingRefEntity $entity)
    {

        $arrayRefs = $this->getArrayBookingRefs();
        $arrayRefs[] = json_decode(json_encode($entity), true);
        $this->setArrayBookingRefs($arrayRefs);

    }

    public function getBookingRefs(): ?array
    {
        return $this->getArrayBookingRefs();
    }

}
