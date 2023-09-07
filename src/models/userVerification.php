<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/database/connection.php" );

class vefication
{
    
    public function access($detail)
    {

        $coneccion = new data();
        $email = $detail["correo"];
        $contrasena = $detail["contrasena"];

        function administrador()
        {
            include_once($_SERVER["DOCUMENT_ROOT"] . "/src/views/admin_views/dashboard_admin.php" );
        }
         function alumno()
        {
            include_once($_SERVER["DOCUMENT_ROOT"] . "/src/views/alumno_views/dashboard_alum.php" );   
        }
         function maestro()
        {
            include_once($_SERVER["DOCUMENT_ROOT"] . "/src/views/maestro_views/dashboard_maestro.php" );     
        }

        // Realiza una consulta SQL para verificar las credenciales en cada tabla
        // Aquí asumimos que estás usando mysqli, asegúrate de configurar correctamente la conexión
        $admin_query = "SELECT * FROM administrador WHERE correo_admin = '$email' AND password_admin = '$contrasena'";
        $alumno_query = "SELECT * FROM alumno WHERE correo_alumno = '$email' AND password_alumno = '$contrasena'";
        $maestro_query = "SELECT * FROM maestro WHERE correo_maestro = '$email' AND password_maestro = '$contrasena'";

        // Ejecuta las consultas y verifica las coincidencias
        $admin_result = $coneccion->connect()->query($admin_query);
        $alumno_result = $coneccion->connect()->query($alumno_query);
        $maestro_result = $coneccion->connect()->query($maestro_query);


    }

}

?>