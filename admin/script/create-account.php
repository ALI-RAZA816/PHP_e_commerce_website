<?php 

    include "config.php";
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $DATE = date('d F Y');
        $NAME = mysqli_real_escape_string($conn, $_POST['name']);
        $EMAIL = mysqli_real_escape_string($conn, $_POST['email']);
        $PASSWORD = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $query1 = "SELECT * FROM users WHERE Lower(name) = Lower('{$NAME}')";
        $result1 = mysqli_query($conn, $query1);
        if(mysqli_num_rows($result1) > 0){
            if($result1){
                echo "Name already exist";
                exit();
            }else{
                echo mysqli_error($conn);
            }
        }

        $query2 = "SELECT * FROM users WHERE Lower(email) = Lower('{$EMAIL}')";
        $result2 = mysqli_query($conn, $query2);
        if(mysqli_num_rows($result2) > 0){
            if($result2){
                echo "Email already exist";
                exit();
            }else{
                echo mysqli_error($conn);
            }
        }

        $query3 = "INSERT INTO users (name, email, password, join_date) VALUES (Lower('{$NAME}'),Lower('{$EMAIL}'),'{$PASSWORD}','{$DATE}')";
        $result3 = mysqli_query($conn, $query3);
        if($result3){
            echo "Account Created";
        }else{
            echo "Cannot create account";
        }

    }else{
        header("Location: {$host_name}/admin/not-found.php");
        exit();
    }

?>