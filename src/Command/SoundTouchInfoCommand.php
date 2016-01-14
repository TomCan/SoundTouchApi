<?php

namespace TomCan\SoundTouch\Command;


class SoundTouchInfoCommand extends SoundTouchCommand
{



    public function __construct() {

        parent::__construct('GET', 'info');

    }

}