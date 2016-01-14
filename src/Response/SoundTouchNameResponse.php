<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 14/01/2016
 * Time: 0:18
 */

namespace TomCan\SoundTouch\Response;


class SoundTouchNameResponse extends SoundTouchInfoResponse
{
    /*
        the POST /name command actually returns the same as the info command
        This wrapper is only provided for code/naming consistency.
        And who knows they might change the behaviour in future versions of the API ;)
     */
}