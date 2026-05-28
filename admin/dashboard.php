<?php 
    session_start();
    include "config.php";
    if($_SESSION['role'] === 'admin'){
        header("Location: {$host_name}/admin/orders.php");
        exit();
    }else if( $_SESSION['role'] === 'editor'){
        header("Location: {$host_name}/admin/list-items.php");
        exit();
    }
?>
 <div class="error d-flex align-items-center border py-2 px-2 bg-white rounded-2 shadow-sm">
    </div>
<section class='admin-page position-relative'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 sidebar-box p-0 border-end" style='background-color:#F5F4ED;position:sticky;top:0;'>
                <?php include "sidebar.php" ?>
            </div>
            <div class="col-10 p-0 m-0">
                <?php 
                    include "add-product.php";
                 ?>
            </div>
        </div>
    </div>
</section>
<script src='../js/sidebar.js'></script>

