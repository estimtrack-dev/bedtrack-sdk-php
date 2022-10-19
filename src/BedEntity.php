<?php

namespace Estimtrack\Bedtracksdkphp;

class BedEntity
{

    /**
     * @var ?string unique  bed reference, usually bed number .
     */
    public ?string $bed_ref;

    /**
     * @var ?string unique service reference
     *
     */
    public ?string $service_ref;

    /**
     * @var ?string unique service name
     *
     */
    public ?string $service_name;

    /**
     * @return string|null
     */
    public function getBedRef(): ?string
    {
        return $this->bed_ref;
    }

    /**
     * @param mixed $bed_ref
     * @return BedEntity
     */
    public function setBedRef($bed_ref): BedEntity
    {
        $this->bed_ref = $bed_ref;
        return $this;
    }


    /**
     * @return string|null
     */
    public function getServiceRef(): ?string
    {
        return $this->service_ref;
    }

    /**
     * @param mixed $service_ref
     * @return BedEntity
     */
    public function setServiceRef($service_ref): BedEntity
    {
        $this->service_ref = $service_ref;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getServiceName(): ?string
    {
        return $this->service_name;
    }

    /**
     * @param mixed $service_name
     * @return BedEntity
     */
    public function setServiceName($service_name): BedEntity
    {
        $this->service_name = $service_name;
        return $this;
    }

}
