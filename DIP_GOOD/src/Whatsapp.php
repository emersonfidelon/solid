<?php

namespace App;

use App\interfaces\IMessage;

class Whatsapp implements IMessage
{
    public function send(): void
    {
        echo 'Whatsapp: seu token é 445566778';
    }
}
