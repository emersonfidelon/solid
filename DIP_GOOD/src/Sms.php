<?php

namespace App;

use App\interfaces\IMessage;

class Sms implements IMessage
{
    public function send(): void
    {
        echo 'SMS: seu token é 445566778';
    }
}
