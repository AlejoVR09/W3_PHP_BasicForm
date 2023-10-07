<?php
    $server = "localhost";
    $DB = "test";
    $user = "root";

    $connect = new PDO("mysql: server:{$server}; dbname={$DB}", $user, ""); 

?>