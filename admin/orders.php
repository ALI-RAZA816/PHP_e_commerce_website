<?php 
    include "header.php";
    include "config.php";
    if(!isset($_SESSION['role']) || $_SESSION['role'] === 'editor'){
        header("Location: {$host_name}/admin/not-found.php");
        exit();
    }
?>
<section class='admin-page position-relative'>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <?php include "sidebar.php" ?>
            </div>
            <div class="col-10 py-2">
                <p class='text-muted'>Order Page</p>
                <div class="row p-0 g-0">
                    <div class="col-12 border p-4 mb-3">
                        <div class="row p-0 g-0 d-flex justify-content-betweem">
                            <div class='col-3 col-md-1 mb-3 mb-md-0'>
                                <img src="./images/Rectangle 3608.png" class='img-fluid' alt="">
                            </div>
                            <div class ='col-md-4 px-md-4 mb-3 mb-md-0'>
                                <p class='product-title mb-1 text-muted'>Men Tapered Fit Flat-Front Trousers x 1 L</p>
                                <p class='name fw-bold text-muted mb-1'>John Doe</p>
                                <p class='street mb-0 text-muted'>123 Main St,</p>
                                <p class='city country state zip-code mb-0 text-muted'>New York, NY, USA, 10001,</p>
                                <p class='phone mb-0 text-muted'>123456789</p>
                            </div>
                            <div class ='col-md-3 px-md-4 mb-3 mb-md-0'>
                                <p class='text-muted mb-1'>Items:1</p>
                                <p class='mb-0 text-muted'>Method:COD</p>
                                <p class='mb-0 text-muted'>Payment:Pending</p>
                                <p class='mb-0 text-muted'>Date:05/04/2026</p>
                            </div>
                            <div class='col-md-2 text-md-center'>
                                <p class="price text-muted">$79</p>
                            </div>
                            <div class='col-lg-2 mt-3 mt-lg-0'>
                                <select name="" id="" class='form-select rounded-0' style='box-shadow:none;outline:none;'>
                                    <option value="">Order placed</option>
                                    <option value="">Packing</option>
                                    <option value="">Shipped</option>
                                    <option value="">Out for delivery</option>
                                    <option value="">Deliverd</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 border p-4">
                        <div class="row p-0 g-0 d-flex justify-content-betweem">
                            <div class='col-3 col-md-1 mb-3 mb-md-0'>
                                <img src="./images/Rectangle 3608.png" class='img-fluid' alt="">
                            </div>
                            <div class ='col-md-4 px-md-4 mb-3 mb-md-0'>
                                <p class='product-title mb-1 text-muted'>Men Tapered Fit Flat-Front Trousers x 1 L</p>
                                <p class='name fw-bold text-muted mb-1'>John Doe</p>
                                <p class='street mb-0 text-muted'>123 Main St,</p>
                                <p class='city country state zip-code mb-0 text-muted'>New York, NY, USA, 10001,</p>
                                <p class='phone mb-0 text-muted'>123456789</p>
                            </div>
                            <div class ='col-md-3 px-md-4 mb-3 mb-md-0'>
                                <p class='text-muted mb-1'>Items:1</p>
                                <p class='mb-0 text-muted'>Method:COD</p>
                                <p class='mb-0 text-muted'>Payment:Pending</p>
                                <p class='mb-0 text-muted'>Date:05/04/2026</p>
                            </div>
                            <div class='col-md-2 text-md-center'>
                                <p class="price text-muted">$79</p>
                            </div>
                            <div class='col-lg-2 mt-3 mt-lg-0'>
                                <select name="" id="" class='form-select rounded-0' style='box-shadow:none;outline:none;'>
                                    <option value="">Order placed</option>
                                    <option value="">Packing</option>
                                    <option value="">Shipped</option>
                                    <option value="">Out for delivery</option>
                                    <option value="">Deliverd</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>