<?php 
    include "config.php";
    session_start();
    if(isset($_SESSION['name'])){
        $query = "SELECT COUNT(*) AS total FROM cart WHERE user = '{$_SESSION['name']}'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        echo $row['total'];
    }else{
        echo 0;
    }
?>