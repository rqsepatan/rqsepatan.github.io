<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "ramdanidid";
$db_name = "rqsepatan";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
$konek = mysqli_connect($db_host, $db_user, $db_pass, $db_name);