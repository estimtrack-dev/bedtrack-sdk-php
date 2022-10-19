<?php

namespace Estimtrack\Bedtracksdkphp;

class BookingEntity
{

    /**
     * @var string unique bed reference, usually bed number .
     */
    public string $bed_ref;


    /**
     * @var ?string expected date of patient arrival, a string day in format Y-m-d . generally a date lying in the future .
     */
    public ?string $arrival_at;


    /**
     * @return string
     */
    public function getBedRef(): string
    {
        return $this->bed_ref;
    }

    /**
     * @param string $bed_ref
     * @return BookingEntity
     */
    public function setBedRef(string $bed_ref): BookingEntity
    {
        $this->bed_ref = $bed_ref;
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
