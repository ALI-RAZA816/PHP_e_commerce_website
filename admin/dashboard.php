<?php 
    session_start();
?>
<section class='admin-page position-relative'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 sidebar-box p-0 border-end">
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

