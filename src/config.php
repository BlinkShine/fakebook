<?php

$db_host = "localhost";
$db_user = "zerocool";
$db_pass = "Gordon_1";
$db_name = "fakebook";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}


?>