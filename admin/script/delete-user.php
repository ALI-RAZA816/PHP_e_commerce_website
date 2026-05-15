<?php 

    include "config.php";
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $DELETE_USER_ID = $_POST['UserId'];
        $query = "DELETE FROM users WHERE id = {$DELETE_USER_ID}";
        $result = mysqli_query($conn, $query);
        if($result){
            echo "User deleted";
        }else{
            echo mysqli_error($conn);
        }
    }else{
        header("Location: {$host_name}/admin/not-found.php");
        exit();
    }

?>