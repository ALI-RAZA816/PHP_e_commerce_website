<?php 
    include "header.php";
    include "config.php";

    if($_SESSION['role'] === 'admin'){
        header("Location: {$host_name}/admin/not-found.php");
        exit();
    }
?>
<section class='admin-page position-relative'>
    <div class="container">
        <div class="row mt-5">
            <div class="col-3 " data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
                <?php include "sidebar.php" ?>
            </div>
            <div data-aos="fade-left"
     data-aos-duration="1500" class="col-9 py-2 rounded-3 bg-white" style='box-shadow:0 0 10px 1px #33333321;'>
                <p class='text-muted'>All Product List</p>
                <div class="all-products-list">
                    <!-- <table class="table">
                        <thead>
                            <tr class='border'>
                                <th>Image</th>
                                <th>Name</th>
                                <th class='text-center'>Category</th>
                                <th class='text-center'>Price</th>
                                <th class='text-center'>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class='align-middle border'>
                                <th class='col-1'>
                                    <img src="./images/Rectangle 3634.png" height='40px' width='40px' class='img-fluid' alt="">
                                </th>
                                <td class='text-muted'>Men Tapered Fit Flat-Front Trousers</td>
                                <td class='text-muted text-center'>Men</td>
                                <td class='text-muted text-center'>$23</td>
                                <td class='text-muted text-center'><i class="fa-solid fa-pen-to-square me-1" style='cursor:pointer;'></i><i class='fa-solid fa-trash text-danger' style='cursor:pointer;'></i></td>
                            </tr>
                            <tr class='align-middle border'>
                                <th class='col-1'>
                                    <img src="./images/Rectangle 3634.png" height='40px' width='40px' class='img-fluid' alt="">
                                </th>
                                <td class='text-muted'>Men Tapered Fit Flat-Front Trousers</td>
                                <td class='text-muted text-center'>Men</td>
                                <td class='text-muted text-center'>$23</td>
                                <td class='text-muted text-center'><i class="fa-solid fa-pen-to-square me-1" style='cursor:pointer;'></i><i class='fa-solid fa-trash text-danger' style='cursor:pointer;'></i></td>
                            </tr>
                            <tr class='align-middle border'>
                                <th class='col-1'>
                                    <img src="./images/Rectangle 3634.png" height='40px' width='40px' class='img-fluid' alt="">
                                </th>
                                <td class='text-muted'>Men Tapered Fit Flat-Front Trousers</td>
                                <td class='text-muted text-center'>Men</td>
                                <td class='text-muted text-center'>$23</td>
                                <td class='text-muted text-center'><i class="fa-solid fa-pen-to-square me-1" style='cursor:pointer;'></i><i class='fa-solid fa-trash text-danger' style='cursor:pointer;'></i></td>
                            </tr>
                            <tr class='align-middle border'>
                                <th class='col-1'>
                                    <img src="./images/Rectangle 3634.png" height='40px' width='40px' class='img-fluid' alt="">
                                </th>
                                <td class='text-muted'>Men Tapered Fit Flat-Front Trousers</td>
                                <td class='text-muted text-center'>Men</td>
                                <td class='text-muted text-center'>$23</td>
                                <td class='text-muted text-center'><i class="fa-solid fa-pen-to-square me-1" style='cursor:pointer;'></i><i class='fa-solid fa-trash text-danger' style='cursor:pointer;'></i></td>
                            </tr>
                        </tbody>
                    </table> -->
                </div>
            </div>
        </div>
    </div>
</section>
