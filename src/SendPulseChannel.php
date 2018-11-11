<?php

namespace NotificationChannels\SendPulse;


use Sendpulse\RestApi\ApiClient;
use Sendpulse\RestApi\Storage\FileStorage;
use NotificationChannels\SendPulse\Exceptions\CouldNotSendNotification;
use NotificationChannels\SendPulse\Events\MessageWasSent;
use NotificationChannels\SendPulse\Events\SendingMessage;
use Illuminate\Notifications\Notification;

class SendPulseChannel
{
    /** @var ApiClient */
    protected $sendPulse;

    public function __construct(ApiClient $apiClient)
    {
        $this->sendPulse = $apiClient;
    }

    /**
     * Send the given notification.
     *
     * @param mixed $notifiable
     * @param \Illuminate\Notifications\Notification $notification
     *
     * @throws \NotificationChannels\:channel_namespace\Exceptions\CouldNotSendNotification
     */
    public function send($notifiable, Notification $notification)
    {
        //$response = [a call to the api of your notification send]

//        if ($response->error) { // replace this by the code need to check for errors
//            throw CouldNotSendNotification::serviceRespondedWithAnError($response);
//        }
    }
}
