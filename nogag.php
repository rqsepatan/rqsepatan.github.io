<?php 
session_reset();
function loggedIn(){
    if(isset($_SESSION['user']) || isset($_COOKIE['user'])){
        return true;
    }else return false;
} ?>