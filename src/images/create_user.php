<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["email"] !== "" && $_POST["passwrd"] !== ""){
    $correo = $_POST["email"];
    $contrasena = $_POST["passwrd"];
    
    try {
        require_once("conection.php");

        $hash = password_hash($contrasena, PASSWORD_DEFAULT);

        $result = $mysqli->query("INSERT INTO user (email,passwrd) VALUES ('$correo','$hash');");

        if ($result){
            $stmt = $mysqli->query("SELECT * FROM user WHERE email= '$correo'");
            if($stmt->num_rows === 1) {
                $data = $stmt->fetch_assoc();
                session_start();
                $_SESSION["user_data"]=$data;
                header("location: ../views/profile.php");
            }
        }

    } catch (mysqli_sql_exception $e) {
        echo "Error:" .$e->getMessage();
    }

}else {
    echo " No estas accediendo desde POST";
}

?>