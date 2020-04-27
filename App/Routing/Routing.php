<?php

use App\Controller\AnimalController;
use App\Controller\UserController;
use Model\DbInterface;
use Model\AnimalModel;


if ((isset($_GET["page"]) && $_GET["page"] == 'home') || !isset($_GET["page"])) {
    $controller = new AnimalController();
    $controller->home();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'newAnimal') {
    $controller = new AnimalController();
    $controller->newAnimal();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'singleAnimal') {
    $controller = new AnimalController();
    $controller->single();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'modifyAnimal') {
    $controller = new AnimalController();
    $controller->modify();


} elseif (isset($_GET["page"]) && $_GET["page"] == 'deleteAnimal') {
    $controller = new AnimalController();
    $controller->delete();
}


if ((isset($_GET["page"]) && $_GET["page"] == 'signup')) {
$controller = new UserController();
$controller->signup();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'login') {
$controller = new UserController();
$controller->login();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'logout') {
$controller = new UserController();
$controller->logout();

}