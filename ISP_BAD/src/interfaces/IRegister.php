<?php

namespace App\interfaces;

use App\components\Log;
use App\components\Notification;

interface IRegister {
    public function save();
    public function logRegister(Log $log);
    public function sendNotification(Notification $notification);
}