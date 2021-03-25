<?php

require_once 'hero.php';
require_once '../helpers/utilities.php';
require_once 'serviceSession.php';
require_once 'ServiceCookies.php';

$service = new ServiceCookies();

    $containId = isset($_GET["id"]);

    if($containId){

        $service->Delete($_GET["id"]);
    }

    header("Location: ../index.php");
    exit();
?>