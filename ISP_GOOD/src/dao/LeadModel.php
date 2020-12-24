<?php

namespace App\dao;

use App\BD;
use App\components\Notification;
use App\interfaces\INotification;
use App\interfaces\IRegister;

class LeadModel extends BD implements INotification, IRegister {
    public function save() 
    {
        //logica
    }

    public function sendNotification(Notification $notification)
    {
        //logica
    }
}