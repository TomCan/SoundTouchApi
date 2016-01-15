<?php

namespace TomCan\SoundTouch;

use TomCan\SoundTouch\Command\SoundTouchCommand;
use GuzzleHttp\Client;
use TomCan\SoundTouch\Response\SoundTouchInfoResponse;

class SoundTouchClient
{

    private $target;
    private $options = array();

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
                ), $this->options);
            } else {
                // use GET request
                $httpResponse = $httpClient->get($command->getPath(), $this->options);
            }

            $response = $command->createResponse($httpResponse->getBody()->getContents());

        } catch (Exception $e) {

            $response = new SoundTouchResponse("");

        }

        return $response;

    }

    /**
     * @return mixed
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param mixed $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

}