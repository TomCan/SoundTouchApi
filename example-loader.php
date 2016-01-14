<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 14/01/2016
 * Time: 21:24
 */

// make sure these are loaded first
include('src/Command/SoundTouchCommand.php');
include('src/Response/SoundTouchResponse.php');
// now load the rest
includeAll('src');

function includeAll($dir) {

    $f = scandir($dir);
    foreach ($f as $f2) {
        if ($f2 == "." || $f2 == "..") continue;
        if (is_dir($dir . DIRECTORY_SEPARATOR . $f2)) {
            includeAll($dir . DIRECTORY_SEPARATOR . $f2);
        } else {
            if (substr($f2, -4) == ".php") {
                include_once($dir . DIRECTORY_SEPARATOR . $f2);
            }
        }
    }

}

