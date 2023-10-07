<?php
    include 'connection.php';

    $email=$_POST["email"];
    $password=$_REQUEST["password"];
    $key = password_hash($password, PASSWORD_BCRYPT);    

    echo "Correo {$email} Contraseña {$key}";
    $sqlInsert= "INSERT INTO users VALUES (1,{$email},{$key})";

    $connect->query($sqlInsert);

?>