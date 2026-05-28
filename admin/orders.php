<?php 
    // include "header.php";
    include "config.php";
    session_start();
    if(!isset($_SESSION['role']) || $_SESSION['role'] === 'editor'){
        header("Location: {$host_name}/admin/not-found.php");
        exit();
    }
?>
<section class='admin-page position-relative'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 p-0 border-end">
                <?php include "sidebar.php" ?>
            </div>
            <div class="col-10 py-2" style='background-color:#FFF8F5;'>
                <h3 style='color:#064E38;font-size:2.3rem;'>Order Page</h3>
                <div class="row overflow-hidden p-0 g-0">
                    
                        <?php 
                            include "config.php";
                            $query = "SELECT * FROM orders";
                            $result = mysqli_query($conn, $query);
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<div data-aos='fade-up' data-aos-offset='200' class='bg-white col-12 order border p-4 mb-3 rounded-3'>
                                                <div class='row p-0 g-0 d-flex justify-content-betweem'>
                                                    <div class='col-3 col-md-1 mb-3 mb-md-0'>
                                                        <img src='./images/product_img/{$row['image']}' class='img-fluid rounded' alt=''>
                                                    </div>
                                                    <div class ='col-md-4 px-md-4 mb-3 mb-md-0'>
                                                        <p class='product-title mb-1 text-muted'>{$row['title']}</p>
                                                        <p class='name fw-bold mb-1'>{$row['first_name']}</p>
                                                        <p class='street mb-0 text-muted'>{$row['street']}</p>
                                                        <p class='city country state zip-code mb-0 text-muted'>{$row['state']}, {$row['country']}, {$row['city']}, {$row['zip_code']}</p>
                                                        <p class='phone fs-5 mb-0'>{$row['phone']}</p>
                                                    </div>
                                                    <div class ='col-md-3 px-md-4 mb-3 mb-md-0'>
                                                        <p class='text-muted mb-1 quantity'>Items:{$row['quantity']}</p>
                                                        <p class='text-muted mb-1 size'>Size: {$row['size']}</p>
                                                        <p class='mb-0 text-muted method'>Method:{$row['pay_method']}</p>
                                                        <p class='mb-0 text-muted status'>Payment:{$row['status']}</p>
                                                        <p class='mb-0 text-muted date'>Date:{$row['order_date']}</p>
                                                    </div>
                                                    <div class='col-md-2 text-md-center'>
                                                        <p class='price mb-0 text-muted unit-price'>Unit Price:<span>$</span>{$row['unitprice']}</p>
                                                        <p class='price mb-0 text-muted total-price'>Unit Price:<span>$</span>{$row['totalprice']}</p>
                                                    </div>
                                                    <div class='col-lg-2 mt-3 mt-lg-0'>
                                                        <select name='' id='{$row['id']}' class='form-select order-status rounded-2' style='box-shadow:none;outline:none;background-color:#F4ECE8;'>";
                                                        if($row['order_status'] === 'order placed'){
                                                            echo " <option selected value='order placed'>Order placed</option>
                                                            <option value='packing'>Packing</option>
                                                            <option value='shipped'>Shipped</option>
                                                            <option value='out for delivery'>Out for delivery</option>
                                                            <option value='deliverd'>Deliverd</option>
                                                            <option value='cancelled'>Cancelled</option>";
                                                        }
                                                        else if($row['order_status'] === 'packing'){
                                                              echo " <option value='order placed'>Order placed</option>
                                                            <option  selected  value='packing'>Packing</option>
                                                            <option value='shipped'>Shipped</option>
                                                            <option value='out for delivery'>Out for delivery</option>
                                                            <option value='deliverd'>Deliverd</option>
                                                            <option value='cancelled'>Cancelled</option>";
                                                        }
                                                        else if($row['order_status'] === 'shipped'){
                                                              echo " <option value='order placed'>Order placed</option>
                                                            <option value='packing'>Packing</option>
                                                            <option selected value='shipped'>Shipped</option>
                                                            <option value='out for delivery'>Out for delivery</option>
                                                            <option value='deliverd'>Deliverd</option>
                                                            <option value='cancelled'>Cancelled</option>";
                                                        }
                                                        else if($row['order_status'] === 'out for delivery'){
                                                              echo " <option value='order placed'>Order placed</option>
                                                            <option value='packing'>Packing</option>
                                                            <option  value='shipped'>Shipped</option>
                                                            <option selected value='out for delivery'>Out for delivery</option>
                                                            <option value='deliverd'>Deliverd</option>
                                                            <option value='cancelled'>Cancelled</option>";
                                                        }
                                                        else if($row['order_status'] === 'deliverd'){
                                                              echo " <option value='order placed'>Order placed</option>
                                                            <option value='packing'>Packing</option>
                                                            <option value='shipped'>Shipped</option>
                                                            <option value='out for delivery'>Out for delivery</option>
                                                            <option selected value='deliverd'>Deliverd</option>
                                                            <option value='cancelled'>Cancelled</option>";
                                                        }
                                                        else if($row['order_status'] === 'cancelled'){
                                                              echo " <option value='order placed'>Order placed</option>
                                                            <option value='packing'>Packing</option>
                                                            <option  value='shipped'>Shipped</option>
                                                            <option value='out for delivery'>Out for delivery</option>
                                                            <option  value='deliverd'>Deliverd</option>
                                                            <option selected value='cancelled'>Cancelled</option>";
                                                        }
                                                           
                                                        echo "</select>
                                                    </div>
                                                </div>
                                            </div>";
                                }
                            }else{
                                echo "<div class='d-flex flex-column justify-content-center align-items-center' style='height:80vh;'>
                                        <i class='fa-solid fa-box' style='color:#efefef;font-size:5rem;'></i>
                                        <h5 class='m-0 mt-2 text-muted'>No Orders</h5>
                                    </div>";
                            }
                        ?>
                </div>
            </div>
        </div>
    </div>
</section>