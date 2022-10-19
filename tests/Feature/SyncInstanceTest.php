<?php

namespace Estimtrack\Bedtracksdkphp\Tests\Feature;

use Estimtrack\Bedtracksdkphp\BedtrackAPIClient;
use Estimtrack\Bedtracksdkphp\InstanceEntity;
use GuzzleHttp\Exception\GuzzleException;
use Tests\TestCase;

class SyncInstanceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * @throws GuzzleException
     */
    public function test_example()
    {

        $instanceEntity = new InstanceEntity();
        $instanceEntity->setUniqueRef(123123);

        $bedtrackAPIClient = new BedtrackAPIClient();
        $bedtrackAPIClient->syncInstance($instanceEntity);
    }
}
