<?php 
session_start();
function loggedIn(){
    if(isset($_SESSION['user']) || isset($_COOKIE['user'])){
        return true;
    }else return false;
} ?>







