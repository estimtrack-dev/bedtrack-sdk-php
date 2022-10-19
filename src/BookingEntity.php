<?php

namespace Estimtrack\Bedtracksdkphp;

class BookingEntity extends BedPatientEntity
{

    /**
     * @var ?string expected date of patient arrival, a string day in format Y-m-d . generally a date lying in the future .
     */
    public ?string $arrival_at;


    /**
     * @var bool true if we want to make a booking, false if the booking is being undone .
     */
    public bool $isBooked;

    /**
     * @return bool
     */
    public function isBooked(): bool
    {
        return $this->isBooked;
    }

    /**
     * @param bool $isBooked
     * @return BookingEntity
     */
    public function setIsBooked(bool $isBooked): BookingEntity
    {
        $this->isBooked = $isBooked;
        return $this;
    }

    /**
     * @return string
     */
    public function getArrivalAt(): ?string
    {
        return $this->arrival_at;
    }

    /**
     * @param string|null $arrival_at
     * @return BookingEntity
     */
    public function setArrivalAt(?string $arrival_at): BookingEntity
    {
        $this->arrival_at = $arrival_at;
        return $this;
    }


}
