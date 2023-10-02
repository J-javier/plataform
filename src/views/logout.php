<?php

include_once($_SERVER["DOCUMENT_ROOT"] . "/src/controllers/adminController.php");

session_start();
session_destroy();

$objeto = new  mainpage();
$objeto->index();

?>