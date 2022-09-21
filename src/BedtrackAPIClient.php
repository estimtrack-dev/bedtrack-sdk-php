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

    public function syncHospRequest( $entity, $guzzleConfig = [])
    {

        $params = [];

        $sendEpisodeUrl = 'public/episodes';
        $client = new Client($guzzleConfig);
        $response = $client->request('POST', $this->url . $sendEpisodeUrl, [
            'form_params' => $params
        ]);

        return $response->getBody()->getContents();
    }



}
