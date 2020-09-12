<?php

session_start();
if(isset($_GET['la'])){
    $_SESSION['la'] = $_GET['la'];
    header('Location:'.$_SERVER['PHP_SELF']);
    exit();
}

    switch($_SESSION['la']){
        case "en":
           require('lang/en.php');
       break;
       case "fr":
           require('lang/fr.php');
       break;
       default:
           require('lang/en.php');
       }


