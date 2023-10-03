<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controllers/adminController.php" );
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
    /* if (isset($_POST["save"])) {
        $controller->inscripcion($_POST);
    } */
    if (isset($_POST["login"])) {
        $controller->login($_POST);
    } 
   /*  if (isset($_POST["update"])) {
        $controller->update($_POST);
    }  */

}else {
    $controller->index();
}

?> 