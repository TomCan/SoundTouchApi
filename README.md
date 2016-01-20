SoundTouchPhp
=============
~ Bringing the Bose SoundTouch API to PHP

SoundTouchPhp is a PHP Library that allows you to interact with Bose SoundTouch speakers.
It allows you to integrate control into your own PHP applications.

- Build your own control panel
- Script / Automate tasks using PHP CLI
- ...

## Installation

You can install the package through composer:
```
# php composer.phar require tomcan/soundtouchapi
# php composer.phar install
```
Then just include the composer autoloader to load it into your project:
```
require __DIR__ . '/vendor/autoload.php';
```

## Usage

You can use all the commands in the same way. You create the command, send it to the client and receive a response back.
```php
// initialize the client
$client = new SoundTouchClient(array('ip' => 'ip-address-of-system'));

// set the volume to 42
$command = new SoundTouchVolumeSetCommand();
$command->setVolume(42);
$response = $client->send($command);

// read the volume from the unit
$command = new SoundTouchVolumeGetCommand();
$response = $client->send($command);

echo "The volume is set to " . $response->getActual();
```

## Status and TODO

All the commands documented in the Bose Webservices API documentation have been implemented. 
(note: unlike documented in the API, /POST baseCapabilities does not exist)

In the more distant future
- Implement Discovery services to locate units
- Implement Websockets notifications

## Donate

Yeah, like that's ever going to happen... ;)
If you really like this library and have some money or gear to spare, I can always use an additional and/or bigger SoundTouch speaker.
Just drop me an e-mail at mot@tom.be.

## Disclaimer

This software is not written by, nor affiliated to or endorsed by Bose. It simply uses the Bose SoundTouch WebServices API. More info regarding the API can be obtained at SoundTouchAPI@bose.com.
