<?php
session_start();

if (!isset($_SESSION["correo_admi"]) || !isset($_SESSION["contrasena_admin"])) {
    header("Location: /src/views/login.php");
    exit(); 
}

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/database/connection.php" );

$id_curso = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/styles/styles_admin/edit_maestro_style.css">
    <title>Edit Clase</title>
</head>
<body class=" w-full h-full">
    <main class=" flex justify-center items-center">
        <div id="myModal" class="">
            <div class="modal-content">
                <h2 class="text-[2rem]">Editar Alumno</h2>
                <?php 
                    $query = "SELECT name_curso FROM curso where id_curso = :id ";
                    $conn = new data();
                    $stmt = $conn->connect()->prepare($query);
                    $stmt->bindParam(':id', $id_curso);
                    $stmt->execute();
                    $dato= $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                <form action="/index.php" method="POST">
                    <div class="form-group">
                        <label class="font-bold " for="nombre">Nombre de materia</label>
                        <input type="text" name="nombre" id="nombre" class="input-field" value="<?= $dato['name_curso']?>" required> 
                    </div>
                    
                    <input type="text" value="<?=$id_curso?>" name="id" hidden>
                    <div class="w-full flex justify-end gap-2">
                        <a href="/src/views/admin_views/admin_clases/dash_class_view.php">
                            <button type="button" id="closeModalButton" class="btn2">Close</button>
                        </a>
                        <form action="/index.php" method="post">
                            <button type="submit" class="btn" name="updateC">Guardar Cambios</button>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>