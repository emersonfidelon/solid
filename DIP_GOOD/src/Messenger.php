<?php

namespace App;

use App\interfaces\IMessage;

class Messenger
{
    private $channel;

    public function __construct(IMessage $channel)
    {
        $this->setChannel($channel);
    }

    public function setChannel(IMessage $channel): void 
    {
        $this->channel = $channel;
    }

    public function getChannel(): IMessage
    {
        return $this->channel;
    }

    public function sendToken(): void
    {
        $this->getChannel()->send();
    }
}
