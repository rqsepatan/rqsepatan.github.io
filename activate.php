<?php

include('includes/config.php');
include('includes/db.php');

if(isset($_GET['token'])){
    $token = $_GET['token'];
    $query = "update users set status='1' where token='$token'";
    if($db->query($query)){
        header("Location:login.php?success=Akunmu sudah Aktif!! silakan login");
        exit();
    }
    
}

?>