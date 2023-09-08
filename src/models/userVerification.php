<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/database/connection.php" );

class vefication 
{
    
    public function access($detail)
    {

        $email = $detail["correo"];
        $contrasena = $detail["contrasena"];

        if ($email === "admin@admin" && $contrasena === "admin") {
            header("Location: /src/views/admin_views/dashboard_admin.php");
            exit();
        } elseif ($email === "maestro@maestro" && $contrasena === "maestro") {
            header("Location: /src/views/maestro_views/dashboard_maestro.php");
            exit();
        } elseif ($email === "alumno@alumno" && $contrasena === "alumno") {
            header("Location: /src/views/alumno_views/dashboard_alum.php");
            exit();
        } else {
            header("Location: /src/views/login.php");
            exit();
        }
    } 

}
