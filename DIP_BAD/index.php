<?php

require __DIR__."/vendor/autoload.php";

use App\Messenger;

// Email
$messager = new Messenger();
$messager->setChannel('email');
$messager->sendToken();

// Sms
$messager2 = new Messenger();
$messager2->setChannel('sms');
$messager2->sendToken();
