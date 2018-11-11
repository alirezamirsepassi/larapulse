<?php

namespace NotificationChannels\SendPulse\Exceptions;

class InvalidToSendPulseReturnType extends \Exception
{
    public static function serviceRespondedWithAnError($response)
    {
        return new static("Return type must be instance of SendPulseMessage");
    }
}
