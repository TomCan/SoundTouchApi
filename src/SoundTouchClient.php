<?php

namespace TomCan\SoundTouch;

use TomCan\SoundTouch\Command\SoundTouchCommand;
use GuzzleHttp\Client;
use TomCan\SoundTouch\Response\SoundTouchInfoResponse;

class SoundTouchClient
{

    private $target;

    public function __construct($target) {

        $this->target = $target;

    }

    public function Send(SoundTouchCommand $command) {

        $httpClient = new \GuzzleHttp\Client(array(
            'base_uri' => 'http://' . $this->target['ip'] . ':8090/'
        ));

        if ($command->getMethod() == "POST") {
            $httpResponse = $httpClient->post($command->getPath(), array(
                'body' => $command->getPayload()
            ));
        } else {
            // use GET request
            $httpResponse = $httpClient->get($command->getPath());
        }

        $response = new SoundTouchInfoResponse($httpResponse->getBody()->getContents());
        return $response;

    }

}