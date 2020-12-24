<?php

namespace App;

use App\interfaces\IMessage;

class Email implements IMessage
{
    public function send(): void
    {
        echo 'Email: seu token é 445566778';
    }
}
