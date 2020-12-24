<?php

require __DIR__."/vendor/autoload.php";

use App\dao\ContractModel;
use App\dao\LeadModel;
use App\dao\UserModel;

$contractModel = new ContractModel();
var_dump($contractModel);

$leadModel = new LeadModel();
var_dump($leadModel);

$userModel = new UserModel();
var_dump($userModel);