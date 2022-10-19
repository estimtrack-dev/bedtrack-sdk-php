<?php

namespace Estimtrack\Bedtracksdkphp;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class BedtrackAPIClient
{
    /**
     * @var mixed|string
     */
    private $url;

    public function __construct($core_api_url = 'http://localhost:8000/api/')
    {
        $this->url = $core_api_url;
    }

    /**
     * @throws GuzzleException
     */
    public function syncInstance(InstanceEntity $entity, $guzzleConfig = []): ResponseInterface
    {

        $params = json_decode(json_encode($entity),true) ;


        $sendEpisodeUrl = 'sync/instance';
        $client = new Client($guzzleConfig);
        return $client->request('POST', $this->url . $sendEpisodeUrl, [
            'form_params' => $params
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function syncBooking(BookingEntity $entity, $guzzleConfig = []): ResponseInterface
    {
        $params = json_decode(json_encode($entity),true) ;
        $sendEpisodeUrl = 'sync/booking';
        $client = new Client($guzzleConfig);
        return $client->request('POST', $this->url . $sendEpisodeUrl, [
            'form_params' => $params
        ]);
    }
}
