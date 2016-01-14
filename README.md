SoundTouchPhp
=============
~ Bringing the Bose SoundTouch API to PHP

SoundTouchPhp is a PHP Library that allows you to interact with Bose SoundTouch speakers.
It allows you to integrate control into your own PHP applications.

- Build your own control panel
- Script / Automate tasks using PHP CLI
- ...

## Installation

At present, the library is not yet listed in Packagist, it will be done when it's done.
For now, the classes aren't even autoloaded (example-loader.php does provide a means to load them automatically, but I wouldn't really call that an autoloader)

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

Following commands are currently implemented
- GET /info
- POST /key
- POST /name
- GET /now_playing
- POST /select
- GET + POST /volume
- GET /getZone
- POST /setZone

Hopefully in the near future (completion of these commands will mark the first non-beta release)
- GET + POST /base
- GET + POST /baseCapabilities
- POST /addZoneSlave
- POST /removeZoneSlave
- GET /sources
- GET /presets

In the more distant future
- Implement Discovery services to locate units
- Implement Websockets notifications

## Donate

Yeah, like that's ever going to happen... ;)
If you really like this library and have some money or gear to spare, I can always use an additional and/or bigger SoundTouch speaker.
Just drop me an e-mail at mot@tom.be.

## Disclaimer

This software is not written by, nor affiliated to or endorsed by Bose. It simply uses the Bose SoundTouch WebServices API. More info regarding the API can be obtained at SoundTouchAPI@bose.com.
