<?php

namespace App\interfaces;

use App\components\Notification;

interface INotification {
    public function sendNotification(Notification $notification);
}