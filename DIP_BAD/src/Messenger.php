<?php

namespace App;

use App\Email;

class Messenger
{
    private $channel;

    public function setChannel(string $channel): void 
    {
        $this->channel = $channel;
    }

    public function getChannel(): string
    {
        return $this->channel;
    }

    public function sendToken(): void
    {
        $class = 'App\\'.ucfirst($this->getChannel());
        $object = new $class;
        $object->send();
    }
}
