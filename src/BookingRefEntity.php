<?php

namespace Estimtrack\Bedtracksdkphp;

class BookingRefEntity
{

    /**
     * @var ?string  patient unique identifier
     */
    public ?string $nhc;

    /**
     * @var ?string unique  bed reference, usually bed number .
     */
    public ?string $bed_ref;



    /**
     * @return string|null
     */
    public function getNhc(): ?string
    {
        return $this->nhc;
    }

    /**
     * @param mixed $nhc
     * @return BookingRefEntity
     */
    public function setNhc($nhc): self
    {
        $this->nhc = $nhc;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBedRef(): ?string
    {
        return $this->bed_ref;
    }

    /**
     * @param mixed $bed_ref
     */
    public function setBedRef($bed_ref): self
    {
        $this->bed_ref = $bed_ref;
        return $this;
    }

}
