<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controllers/user_controller.php" );

$controller = new mainpage();



if ($_SERVER["REQUEST_METHOD"] === "POST"  && isset($_POST) ) {

    if (empty($_POST["correo"]) || empty($_POST["contrasena"])) {
        echo "No has ingresado datos correctamente";

    }
    else {

        $admin_view_dash = new mainpage();
        $admin_view_dash->mainmenu($_POST);
    }


    
}else {
    $controller->index();
}


?>