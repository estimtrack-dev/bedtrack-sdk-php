<?php

namespace Estimtrack\Bedtracksdkphp;


use GuzzleHttp\Client;

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

    public function syncInstance(InstanceEntity $entity, $guzzleConfig = [])
    {

        $params = json_decode(json_encode($entity),true) ;


        $sendEpisodeUrl = 'sync/instance';
        $client = new Client($guzzleConfig);
        $response = $client->request('POST', $this->url . $sendEpisodeUrl, [
            'form_params' => $params
        ]);

        return $response->getBody()->getContents();
    }



}
