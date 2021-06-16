<?php
// làm bộ định tuyến (routes)
include_once "controllers/Controller.php";
$route = isset($_GET["route"])?$_GET["route"]:"";
$controller = new Controller();

switch ($route){
    case "listsp":$controller->listSP();break;
    case "themsp": $controller->themSP();break;
    case "luusp": $controller->luuSP();break;
    case "suasp": $controller->suaSP();break;
    default: $controller->listSP();
}