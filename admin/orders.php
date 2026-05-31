<?php 
    // include "header.php";
    include "config.php";
    session_start();
    if(!isset($_SESSION['role']) || $_SESSION['role'] === 'editor'){
        header("Location: {$host_name}/admin/not-found.php");
        exit();
    }
?>
 <div class="error d-flex align-items-center border py-2 px-2 bg-white rounded-2 shadow-sm">
    </div>
<section class='admin-page position-relative'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 p-0 border-end" style='background-color:#F5F4ED;'>
                <?php include "sidebar.php" ?>
            </div>
            <div class="col-10 py-2" style='background-color:#FFF8F5;'>
                <h3 style='color:#064E38;font-size:2.3rem;'>Order Page</h3>
                <div class="row fetch-orders overflow-hidden p-0 g-0">
                       
                </div>
            </div>
        </div>
    </div>
</section>
