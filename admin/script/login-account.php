<?php 

    include "config.php";
    session_start();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $LOGIN_EMAIL = strtolower(mysqli_real_escape_string($conn, $_POST['login_email']));
        $LOGIN_PASSWORD = $_POST['login_password'];
        
        $query = "SELECT * FROM users WHERE email = '{$LOGIN_EMAIL}'";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) === 0){
            echo "Incorrect email";
            die();
        }
            
        $row = mysqli_fetch_assoc($result);
        $isValid = password_verify($LOGIN_PASSWORD, $row['password']);
        if($isValid === false){
            echo "Incorrect password";
            die();
        }

        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['role'] = $row['user_role'];
        echo 'Login successfull';

    }else{
        header("Location: {$host_name}/admin/not-found.php");
    }
 

?>