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

        $command->preparePayload();

        $httpClient = new \GuzzleHttp\Client(array(
            'base_uri' => 'http://' . $this->target['ip'] . ':8090/'
        ));

        try {

            if ($command->getMethod() == "POST") {
                $httpResponse = $httpClient->post($command->getPath(), array(
                    'body' => $command->getPayload()
                ));
            } else {
                // use GET request
                $httpResponse = $httpClient->get($command->getPath());
            }

            $response = $command->createResponse($httpResponse->getBody()->getContents());

        } catch (Exception $e) {

            $response = new SoundTouchResponse("");

        }

        return $response;

    }

}