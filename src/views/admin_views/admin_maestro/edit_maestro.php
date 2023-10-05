<?php
session_start();

if (!isset($_SESSION["correo_admi"]) || !isset($_SESSION["contrasena_admin"])) {
    header("Location: /src/views/login.php");
    exit(); 
}

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/database/connection.php" );

$id_maestro = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/styles/styles_admin/edit_maestro_style.css">
    <title>Edit Alumno</title>
</head>
<body class=" w-full h-full">
    <main class=" flex justify-center items-center">
        <div id="myModal" class="">
            <div class="modal-content">
                <h2 class="text-[2rem]">Editar Alumno</h2>
                <?php 
                    $query = "SELECT name_maestro, apellido_maestro, correo_alumno, address, fechaNacimiento FROM maestro where id_alumno = :id ";
                    $conn = new data();
                    $stmt = $conn->connect()->prepare($query);
                    $stmt->bindParam(':id', $id_maestro);
                    $stmt->execute();
                    $dato= $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                <form action="/index.php" method="POST">
                    <div class="form-group">
                        <label class="font-bold " for="correo">Correo Electronico</label>
                        <input type="email" name="correo" id="correo" class="input-field" value="<?= $dato['correo_maestro']?>" readonly required> 
                    </div>
                    <div class="form-group">
                        <label class="font-bold " for="nombre">Nombre(s)</label>
                        <input type="text" name="nombre" id="nombre" class="input-field" value="<?= $dato['name_maestro']?>" required>
                    </div>
                    <div class="form-group">
                        <label class="font-bold " for="apellido">Apellido(s)</label>
                        <input type="text" name="apellido" id="apellido" class="input-field" value="<?= $dato['apellido_maestro']?>" required>
                    </div>
                    <div class="form-group">
                        <label class="font-bold " for="direccion">Direccion</label>
                        <input type="text" name="direccion" id="direccion" class="input-field" value="<?= $dato['address']?>" required>
                    </div>
                    <div class="form-group">
                        <label class="font-bold " for="fecha">Fecha de nacimiento</label>
                        <input type="text" name="fecha" id="fecha" class="input-field" value="<?= $dato['fechaNacimiento']?>" required>
                    </div>
                    <input type="text" value="<?=$id_maestro?>" name="id" hidden>
                    <div class="w-full flex justify-end gap-2">
                        <a href="/src/views/admin_views/admin_alumno/dash_alum_view.php">
                            <button type="button" id="closeModalButton" class="btn2">Close</button>
                        </a>
                        <form action="/index.php" method="post">
                            <button type="submit" class="btn" name="updateA">Guardar Cambios</button>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>