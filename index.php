<?php

use App\Core\Session;
include "vendor/autoload.php";

$session = new Session();
$session->set("name","John Doe");
echo $session->get("name");