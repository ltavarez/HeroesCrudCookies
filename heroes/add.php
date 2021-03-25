<?php
require_once '../helpers/utilities.php';
require_once 'serviceSession.php';
require_once 'ServiceCookies.php';
require_once 'hero.php';

$service = new ServiceCookies();

    if(isset($_POST["HeroName"]) && isset($_POST["HeroDescription"]) && isset($_POST["CompanyId"])){

        $hero = new Hero(0,$_POST["HeroName"],$_POST["HeroDescription"],$_POST["CompanyId"],true);
        $service->Add($hero);

        header("Location: ../index.php");
    }

?>