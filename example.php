<?php

include('example-loader.php');


    include('vendor/autoload.php');

    $target = array("ip" => "192.168.151.132");

    $client = new TomCan\SoundTouch\SoundTouchClient($target);

    $command = new \TomCan\SoundTouch\Command\SoundTouchInfoCommand();
    $response = $client->send($command);
    echo "Name: " . $response->getName() . "\n";

    $member = new stdClass();
    $member->ip = $response->getIpAddress();
    $member->mac = $response->getMacAddress();

$command = new \TomCan\SoundTouch\Command\SoundTouchNowPLayingCommand();
$response = $client->send($command);
var_dump($response->isSuccess(), $response->getSource());

$command = new \TomCan\SoundTouch\Command\SoundTouchKeyCommand();
$command->setValue(\TomCan\SoundTouch\Constants\KeyValue::PRESET_1);
$command->setState(\TomCan\SoundTouch\Constants\KeyState::PRESS);
$response = $client->send($command);
var_dump($response->isSuccess());

$command = new \TomCan\SoundTouch\Command\SoundTouchKeyCommand();
$command->setValue(\TomCan\SoundTouch\Constants\KeyValue::PRESET_1);
$command->setState(\TomCan\SoundTouch\Constants\KeyState::RELEASE);
$response = $client->send($command);
var_dump($response->isSuccess());

sleep(10);

$command = new \TomCan\SoundTouch\Command\SoundTouchNowPLayingCommand();
$response = $client->send($command);
var_dump($response->isSuccess(), $response->getSource());


/*
$command = new \TomCan\SoundTouch\Command\SoundTouchSelectCommand();
$command->setSource(\TomCan\SoundTouch\Constants\Source::STANDBY);
$response = $client->send($command);
var_dump($response);
*/

$command = new \TomCan\SoundTouch\Command\SoundTouchKeyCommand();
$command->setValue(\TomCan\SoundTouch\Constants\KeyValue::POWER);
$command->setState(\TomCan\SoundTouch\Constants\KeyState::PRESS);
$response = $client->send($command);
var_dump($response->isSuccess());

$command = new \TomCan\SoundTouch\Command\SoundTouchKeyCommand();
$command->setValue(\TomCan\SoundTouch\Constants\KeyValue::POWER);
$command->setState(\TomCan\SoundTouch\Constants\KeyState::RELEASE);
$response = $client->send($command);
var_dump($response->isSuccess());

$command = new \TomCan\SoundTouch\Command\SoundTouchNowPLayingCommand();
$response = $client->send($command);
var_dump($response->isSuccess());

/*

    $command = new \TomCan\SoundTouch\Command\SoundTouchZoneSetCommand();
    $command->setMaster($member);
    $command->setMembers(array($member));
    $response = $client->send($command);
    var_dump(
        $response
    );

    $command = new \TomCan\SoundTouch\Command\SoundTouchZoneGetCommand();
    $response = $client->send($command);
    var_dump(
        $response
    );
*/