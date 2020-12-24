<?php

namespace App\dao;

use App\BD;
use App\components\Notification;
use App\components\Log;
use App\interfaces\IRegister;

class ContractModel extends BD implements IRegister{
    public function save() 
    {
        //
    }

    public function logRegister(Log $log) 
    {
        //
    }

    public function sendNotification(Notification $notification)
    {
        //    
    }
}