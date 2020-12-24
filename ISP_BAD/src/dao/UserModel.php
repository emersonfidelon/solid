<?php

namespace App\dao;

use App\BD;
use App\components\Log;
use App\components\Notification;
use App\interfaces\IRegister;

class UserModel extends BD implements IRegister {
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
