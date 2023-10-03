<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/database/connection.php" );

class verification 
{ 
    public function loginUser($detail) 
    {

        $email = $detail["correo"];
        $contrasena = $detail["contrasena"];

    
    }
    
    public function agregandoAlum($data)
    {
        $databaseinf = new data();
        $dni=$data["dni"];
        $correo=$data["correo"];
        $contrasena=$data["contrasena"];
        $nombre=$data["nombre"];
        $apellido=$data["apellido"];
        $direccion=$data["direccion"];
        $fechaNacimiento=$data["fecha"];
        $rol=2;
        $hash = password_hash($contrasena , PASSWORD_DEFAULT);

        $consulta = "INSERT INTO alumno (name_alumno, apellido_alumno, matricula, correo_alumno, password_alumno, address, fechaNacimiento, rol_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $databaseinf->connect()->prepare($consulta);
        $stmt->execute([$nombre, $apellido, $dni,$correo,$hash,$direccion,$fechaNacimiento,$rol ]);
        header("Location: /src/views/admin_views/admin_alumno/dash_alum_view.php");
        $databaseinf->disconnect();
    }
    public function agregandoClase($data)
    {
        $databaseinf = new data();
        $nombre=$data["nombre"];

        $consulta = "INSERT INTO curso (name_curso) VALUES (?)";
        $stmt = $databaseinf->connect()->prepare($consulta);
        $stmt->execute([$nombre]);
        header("Location: /src/views/admin_views/admin_clases/dash_class_view.php");
        $databaseinf->disconnect();
    }
    public function agregandoMaestro($data)
    {
        $databaseinf = new data();
        $dni=$data["matricula"];
        $correo=$data["correo"];
        $contrasena=$data["contrasena"];
        $nombre=$data["nombre"];
        $apellido=$data["apellido"];
        $direccion=$data["direccion"];
        $fechaNacimiento=$data["fecha"];
        $rol=3;
        $hash = password_hash($contrasena , PASSWORD_DEFAULT);

        $consulta = "INSERT INTO maestro (name_maestro, apellido_maestro, matricula, correo_maestro, password_maestro, address, fechaNacimiento, rol_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $databaseinf->connect()->prepare($consulta);
        $stmt->execute([$nombre, $apellido, $dni,$correo,$hash,$direccion,$fechaNacimiento,$rol ]);
        header("Location: /src/views/admin_views/admin_maestro/dash_view_maestro.php");
        $databaseinf->disconnect();
    }
    
}
