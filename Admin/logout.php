<?php
include 'config/db.php'; 
require 'config/session.php';
Session::start();
Session::destroy();
header('Location:login.php');
exit();
?>