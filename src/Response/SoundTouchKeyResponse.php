<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 14/01/2016
 * Time: 22:10
 */

namespace TomCan\SoundTouch\Response;


class SoundTouchKeyResponse extends  SoundTouchResponse
{
    /*
        The command returns only a status, which is handled by the SoundTouchResponse class.
        This wrapper is only provided for code/naming consistency.
        And who knows they might change the behaviour in future versions of the API ;)
     */
}