<?php 
    include "config.php";
    session_start();
    if($_SESSION['role'] === 'admin'){
        header("Location: {$host_name}/admin/not-found.php");
        exit();
    }
?>
<section class='admin-page position-relative'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 p-0 border-end " style='background-color:#F5F4ED;'>
                <?php include "sidebar.php" ?>
            </div>
            <div class="col-10 py-2" style='background-color:#FFF8F5;'>
                <div class='d-flex py-3 inventory-list justify-content-between align-items-center'>
                    <h3 class='text-muted'>All Product List</h3>
                    <a href="dashboard.php" class='btn text-nowrap text-decoration-none d-flex align-items-center'><i class='fa-solid text-white fa-plus'></i><button class='btn text-white'>Add Product</button></a>
                </div>
                <div class="all-products-list">
                </div>
            </div>
        </div>
    </div>
</section>
