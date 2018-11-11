<?php

namespace NotificationChannels\SendPulse;

use Illuminate\Support\Arr;

class SendPulseMessage
{
    /** @var \Illuminate\Support\Collection */
    public $payload;

    /**
     * SendPulseMessage constructor.
     */
    public function __construct()
    {
        $this->payload = ['task' => [], 'additionalParams' => []];
    }

    public static function create()
    {
        return new static();
    }

    public function setTitle($title)
    {
        $this->payload['task']['title'] = $title;
        return $this;
    }

    public function setBody($body)
    {
        $this->payload['task']['body'] = $body;
        return $this;
    }

    public function setWebsiteId($websiteId)
    {
        $this->payload['task']['website_id'] = $websiteId;
        return $this;
    }

    public function setTtl($ttl)
    {
        $this->payload['task']['ttl'] = $ttl;
        return $this;
    }

    public function setStretchTime($stretch_time)
    {
        $this->payload['task']['stretch_time'] = $stretch_time;
        return $this;
    }

    public function setAdditionalParameters(Array $parameters)
    {
        $this->payload['additionalParams'] = $parameters;
        return $this;
    }
}
