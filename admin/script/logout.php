<?php 

include "config.php";
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    function logout_out(){
        session_start();
        session_unset();
        session_destroy();
        echo 'You logged out';
    }
    logout_out();
}else{
    header("Location: {$host_name}/admin/not-found.php");
}


?>