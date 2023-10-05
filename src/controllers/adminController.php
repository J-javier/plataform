<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/models/userVerification.php");


class mainpage 
{
    public function index()
    {
        include_once($_SERVER["DOCUMENT_ROOT"] . "/src/views/login.php" );
    }

    public function login($datos)
    {
        $verification = new verification();
        $verification->loginUser($datos);
    }
    public function addAlumno($datos)
    {
        $agregando = new verification();
        $agregando->agregandoAlum($datos);
    }
    public function addMaestro($datos)
    {
        $agregandoM = new verification();
        $agregandoM->agregandoMaestro($datos);
    }
    public function addClase($datos)
    {
        $agregandoC = new verification();
        $agregandoC->agregandoClase($datos);
    }
    public function deleteA($datos)
    {
        $borrandoA = new verification();
        $borrandoA->borrarAlumno($datos);   
    }
    public function deleteM($datos)
    {
        $borrandoM = new verification();
        $borrandoM->borrarMaestro($datos);   
    }
    public function deleteC($datos)
    {
        $borrandoC = new verification();
        $borrandoC->borrarCurso($datos);   
    }
    
    public function updateA($datos)
    {
        $updateA = new verification();
        $updateA->actualizandoAlumno($datos);   
    }
    
    
}
?>