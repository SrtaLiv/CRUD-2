<?php

require_once './app/controller/burguerController.php';
require_once './app/controller/userController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home';

if(!empty($_GET['action'])){
    $action = $_GET['action'];
};

$params = explode("/", $action);

$burguerController = new burguerController();
$userController = new userController();

switch($params[0]){
    case 'home':
        $userController->verifyUser();
        break;
    case 'combos':
        $burguerController->showCombos();
        break;
    case 'add':
        $burguerController->addCombo();
        break;
    /*case 'auth':
        echo "Logueado pa";*/
        break;
    default: echo "error"; break;

}
