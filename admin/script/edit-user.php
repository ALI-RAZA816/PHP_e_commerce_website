<?php 

    include "config.php";
    $USER_NAME = $_POST['edit-user-name'];
    $USER_EMAIL = $_POST['edit-user-email'];
    $EDIT_USER_ID = $_POST['edit-user-id'];
    $USER_ROLE = $_POST['role'];
    $USER_STATUS = $_POST['status'];

    $query = "UPDATE users SET name = '{$USER_NAME}', email = '{$USER_EMAIL}', user_role = '{$USER_ROLE}', status='{$USER_STATUS}' WHERE id = {$EDIT_USER_ID}";

    $result = mysqli_query($conn, $query);
    if($result){
        echo "User updated";
    }else{
        echo mysqli_error($conn);
    }
    
?>