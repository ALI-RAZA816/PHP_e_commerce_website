<?php 

    include "config.php";
    $DELETE_USER_ID = $_POST['UserId'];
    $query = "DELETE FROM users WHERE id = {$DELETE_USER_ID}";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "User deleted";
    }else{
        echo mysqli_error($conn);
    }

?>