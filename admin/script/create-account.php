<?php 

    include "config.php";
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $NAME = strtolower(mysqli_real_escape_string($conn, $_POST['name']));
        $EMAIL = strtolower(mysqli_real_escape_string($conn, $_POST['email']));
        $PASSWORD = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query1 = "SELECT * FROM users WHERE name = '{$NAME}'";
        $result1 = mysqli_query($conn, $query1);
        $query2 = "SELECT * FROM users WHERE email = '{$EMAIL}'";
        $result2 = mysqli_query($conn, $query2);
        
        if(mysqli_num_rows($result1) > 0){
            echo "Name already exist";
            die();
        }
        
        if(mysqli_num_rows($result2) > 0){
            echo "Email already exist";
            die();
        }

        $query3 = "INSERT INTO users(name, email, password) VALUES('{$NAME}','{$EMAIL}','{$PASSWORD}')";
        $result3 = mysqli_query($conn, $query3);
        if($result3){
            echo "Account Created";
        }else{
            echo "Cannot create account";
        }
    }else{
        header("Location: {$host_name}/admin/not-found.php");
    }

?>