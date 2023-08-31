<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controllers/user_controller.php" );

$controller = new mainpage();

$controller->index();

?>