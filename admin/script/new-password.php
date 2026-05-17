<?php 

    include "config.php";
    $EMAIL = mysqli_real_escape_string($conn, $_POST['fetchemail']);
    $PASSWORD = mysqli_real_escape_string($conn, $_POST['newpassword']);
    $R_PASSWORD = mysqli_real_escape_string($conn, $_POST['repeatpassword']);

    if($PASSWORD !== $R_PASSWORD){
        echo "Password doesn't match";
        die();
    }else{
        $HASHED_PASSWORD = password_hash($PASSWORD, PASSWORD_DEFAULT);
        $query = "UPDATE users SET password = '{$HASHED_PASSWORD}' WHERE email = '{$EMAIL}'";
        $result = mysqli_query($conn, $query);
        if($result){
            echo "Password changed";
            die();
        }
    }
?>