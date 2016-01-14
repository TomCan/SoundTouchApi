<?php

include('src/SoundTouchClient.php');
include('src/Command/SoundTouchCommand.php');
include('src/Response/SoundTouchResponse.php');
include('src/Command/SoundTouchInfoCommand.php');
include('src/Response/SoundTouchInfoResponse.php');
include('src/Command/SoundTouchNameCommand.php');
include('src/Response/SoundTouchNameResponse.php');

    include('vendor/autoload.php');

    $target = array("ip" => "192.168.151.132");

    $client = new TomCan\SoundTouch\SoundTouchClient($target);

    $command = new \TomCan\SoundTouch\Command\SoundTouchInfoCommand();
    $response = $client->send($command);
    var_dump($response);

    $command = new \TomCan\SoundTouch\Command\SoundTouchNameCommand();
    $command->setName("ST10 refter 2 " . time());
    $response = $client->send($command);
    var_dump($response);