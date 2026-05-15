<?php 

    include "config.php";
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $query1 = "SELECT user_role FROM users";
        $result1 = mysqli_query($conn, $query1);
        $row = mysqli_fetch_assoc($result1);
        
        $USER_NAME = $_POST['edit-user-name'];
        $USER_EMAIL = $_POST['edit-user-email'];
        $EDIT_USER_ID = $_POST['edit-user-id'];
        $USER_ROLE = $_POST['role'];
        $USER_STATUS = $_POST['status'];
        
        if(isset($row['user_role'])){
            if($row['user_role'] != $USER_ROLE){
                session_start();
                session_unset();
                session_destroy();
            }
        }

        $query = "UPDATE users SET name = '{$USER_NAME}', email = '{$USER_EMAIL}', user_role = '{$USER_ROLE}', status='{$USER_STATUS}' WHERE id = {$EDIT_USER_ID}";
        $result = mysqli_query($conn, $query);
        if($result){
            echo "User updated";
        }else{
            echo mysqli_error($conn);
        }
    }else{
        header("Location: {$host_name}/admin/not-found.php");
        exit();
    }
    
?>