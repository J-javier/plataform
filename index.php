<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controllers/adminController.php" );
require_once($_SERVER["DOCUMENT_ROOT"] .  "/src/controllers/studentController.php"  );
require_once($_SERVER["DOCUMENT_ROOT"] .  "/src/controllers/teacherController.php" );

$controller = new mainpage();

if($_SERVER["REQUEST_METHOD"] === "POST" ){
    if(isset($_POST["register"])){
        $controller->addAlumno($_POST);
    }
    if(isset($_POST["registrarM"])){
        $controller->addMaestro($_POST);
    }
    if(isset($_POST["registrarC"])){
        $controller->addClase($_POST);
    }
    if (isset($_POST["login"])) {
        $controller->login($_POST);
    } 
    if (isset($_POST["deleteA"])) {
        $controller->deleteA($_POST);
    } 
    if (isset($_POST["deleteM"])) {
        $controller->deleteM($_POST);
    } 
    if (isset($_POST["deleteC"])) {
        $controller->deleteC($_POST);
    } 
    if (isset($_POST["updateA"])) {
        $controller->updateA($_POST);
    } 
    if (isset($_POST["updateM"])) {
        $controller->updateM($_POST);
    } 
    if (isset($_POST["updateC"])) {
        $controller->updateC($_POST);
    } 

}else {
    $controller->index();
}

?> 