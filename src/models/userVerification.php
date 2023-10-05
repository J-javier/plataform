<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/database/connection.php" );

class verification 
{ 
    public function loginUser($detail) 
    {
        $informacion = new data();
        $correo = $detail["correo"];
        $contrasena = $detail["contrasena"];
        
        // Consulta para verificar en la tabla Alumno
        $consultaAlumno = "SELECT * FROM Alumno WHERE correo_alumno = :correo ";
        $stmtAlumno = $informacion->connect()->prepare($consultaAlumno);
        $stmtAlumno->bindParam(':correo', $correo);
        $stmtAlumno->execute();
        $detalleAlumno = $stmtAlumno->fetch(PDO::FETCH_ASSOC);

        // Consulta para verificar en la tabla Administrador
        $consultaAdmin = "SELECT * FROM Administrador WHERE correo_admin = :correo ";
        $stmtAdmin = $informacion->connect()->prepare($consultaAdmin);
        $stmtAdmin->bindParam(':correo', $correo);
        $stmtAdmin->execute();
        $detalleAdmin = $stmtAdmin->fetch(PDO::FETCH_ASSOC);

        // Consulta para verificar en la tabla Maestro
        $consultaMaestro = "SELECT * FROM Maestro WHERE correo_maestro = :correo ";
        $stmtMaestro = $informacion->connect()->prepare($consultaMaestro);
        $stmtMaestro->bindParam(':correo', $correo);
        $stmtMaestro->execute();
        $detalleMaestro = $stmtMaestro->fetch(PDO::FETCH_ASSOC);

        if ($detalleAlumno || $detalleAdmin || $detalleMaestro) {
            if ($detalleAlumno && password_verify($contrasena, $detalleAlumno['password_alumno'])) {
                // Usuario encontrado en la tabla Alumno y contraseña correcta
                session_start();
                $_SESSION["correo_alumno"] = $correo;
                $_SESSION["contrasena_alumno"] = $contrasena;
                header("Location: /src/views/alumno_views/dashboard_alum.php");
                die();
            } elseif ($detalleAdmin && password_verify($contrasena, $detalleAdmin['password_admin'])) {
                // Usuario encontrado en la tabla Administrador y contraseña correcta
                session_start();
                $_SESSION["correo_admi"] = $correo;
                $_SESSION["contrasena_admin"] = $contrasena;
                header("Location: /src/views/admin_views/dashboard_admin.php"); 
                die();
            } elseif ($detalleMaestro && password_verify($contrasena, $detalleMaestro['password_maestro'])) {
                // Usuario encontrado en la tabla Maestro y contraseña correcta
                session_start();
                $_SESSION["correo_maestro"] = $correo;
                $_SESSION["contrasena_maestro"] = $contrasena;
                header("Location: /src/views/maestro_views/dashboard_maestro.php"); 
                die();
            } else {
                // Contraseña incorrecta en todas las tablas
                session_start();
                $_SESSION["mensaje_error_login"] = "Contraseña incorrecta, por favor intente de nuevo.";
                header("Location: /src/views/login.php");
                die();
            }
        } else {
            // Usuario no encontrado en ninguna tabla
            session_start();
            $_SESSION["mensaje_error_login"] = "El usuario no existe, por favor regístrese.";
            header("Location: /src/views/login.php");
            die();
        }

        $informacion->disconnect();
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
    public function borrarAlumno($data)
    {
        $databaseinf = new data();
        $id_alumno=$data["deleteA"];
        $consulta = "DELETE FROM alumno WHERE id_alumno = :id" ;
        $stmt = $databaseinf->connect()->prepare($consulta);
        $stmt->bindParam(':id', $id_alumno, PDO::PARAM_INT);
        $stmt->execute();
        header("Location: /src/views/admin_views/admin_alumno/dash_alum_view.php");
        $databaseinf->disconnect();
    }
    public function borrarMaestro($data)
    {
        $databaseinf = new data();
        $id_maestro=$data["deleteM"];
        $consulta = "DELETE FROM maestro WHERE id_maestro = :id" ;
        $stmt = $databaseinf->connect()->prepare($consulta);
        $stmt->bindParam(':id', $id_maestro, PDO::PARAM_INT);
        $stmt->execute();
        header("Location: /src/views/admin_views/admin_maestro/dash_view_maestro.php");
        $databaseinf->disconnect();
    }
    public function borrarCurso($data)
    {
        $databaseinf = new data();
        $id_curso=$data["deleteC"];
        $consulta = "DELETE FROM curso WHERE id_curso = :id" ;
        $stmt = $databaseinf->connect()->prepare($consulta);
        $stmt->bindParam(':id', $id_curso, PDO::PARAM_INT);
        $stmt->execute();
        header("Location: /src/views/admin_views/admin_clases/dash_class_view.php");
        $databaseinf->disconnect();
    }
    public function actualizandoAlumno($data)
    {
        $databaseinf = new data();
        $id = $data["id"]; // Asegúrate de que tengas el ID del alumno que deseas actualizar
        $nombre = $data["nombre"];
        $apellido = $data["apellido"];
        $matricula = $data["dni"]; // Puedes agregar los otros campos aquí
        $correo = $data["correo"];
        $direccion = $data["direccion"];
        $fechaNacimiento = $data["fecha"];
        $rol = 2;

        // Consulta SQL de actualización
        $consulta = "UPDATE alumno SET name_alumno = :nombre, apellido_alumno = :apellido, 
        matricula = :matricula, correo_alumno = :correo, address = :direccion, fechaNacimiento = :fechaNacimiento
         WHERE id_alumno = $id";

        $stmt = $databaseinf->connect()->prepare($consulta);

        // Enlazar los parámetros
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);
        $stmt->bindParam(':matricula', $matricula, PDO::PARAM_STR);
        $stmt->bindParam(':correo', $correo, PDO::PARAM_STR);
        $stmt->bindParam(':direccion', $direccion, PDO::PARAM_STR);
        $stmt->bindParam(':fechaNacimiento', $fechaNacimiento, PDO::PARAM_STR);
        $stmt->execute();

        header("Location: /src/views/admin_views/admin_alumno/dash_alum_view.php");
        
        $databaseinf->disconnect();
    }
    
}
