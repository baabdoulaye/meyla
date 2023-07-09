<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



include_once('view/accueil.php');

include_once('controller/router.php');
include_once('view/login.php');
include_once('model/usersModel.php');
include_once('controller/usersController.php');
