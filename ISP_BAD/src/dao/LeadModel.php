<?php

namespace App\dao;

use App\BD;
use App\components\Log;
use App\components\Notification;
use App\interfaces\IRegister;

class LeadModel extends BD implements IRegister {
    public function save() 
    {
        //logica
    }

    public function logRegister(Log $log) 
    {
        //logica
    }

    public function sendNotification(Notification $notification)
    {
        //logica
    }
}