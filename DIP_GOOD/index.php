<?php

require __DIR__."/vendor/autoload.php";

use App\Messenger;
use App\Email;
use App\Sms;
use App\Whatsapp;

// Email
$messager = new Messenger(new Email());
$messager->sendToken();

// SMS  
$messager = new Messenger(new Sms());
$messager->sendToken();

// WHATSAPP
$messager = new Messenger(new Whatsapp());
$messager->sendToken();
