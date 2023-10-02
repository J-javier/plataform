<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/models/userVerification.php" );

class mainpage
{
    public function index()
    {
        include_once($_SERVER["DOCUMENT_ROOT"] . "/src/views/login.php" );
    }

    public function mainmenu($datos)
    {
        $datos2 = $datos;
        $verification = new vefication();
        $verification->access($datos2);
    }
}
?>