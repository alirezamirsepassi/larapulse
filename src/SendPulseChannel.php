<?php

namespace NotificationChannels\SendPulse;


use Sendpulse\RestApi\ApiClient;
use Illuminate\Notifications\Notification;
use NotificationChannels\SendPulse\Exceptions\InvalidToSendPulseReturnType;

class SendPulseChannel
{
    /** @var ApiClient */
    protected $sendPulse;

    /**
     * SendPulseChannel constructor.
     *
     * @param ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient)
    {
        $this->sendPulse = $apiClient;
    }

    /**
     * Send the given notification.
     *
     * @param mixed                                  $notifiable
     * @param \Illuminate\Notifications\Notification $notification
     *
     * @return \stdClass
     * @throws InvalidToSendPulseReturnType
     */
    public function send($notifiable, Notification $notification)
    {
        /** @var SendPulseMessage $message */
        $message = $notification->toSendPulse($notifiable);
        if (! $message instanceof SendPulseMessage) {
            throw new InvalidToSendPulseReturnType();
        }

        return $this->sendPulse->createPushTask($message->payload['task'], $message->payload['additionalParams']);
    }
}
