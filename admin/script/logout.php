<?php 

include "config.php";
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    function logout_out(){
        session_unset();
        session_destroy();
        echo 'You logged out';
    }
    if($_SESSION['name'] && $_SESSION['role'] && $_SESSION['email']){
        logout_out();
        exit();
    }
}else{
    header("Location: {$host_name}/admin/not-found.php");
}


?>