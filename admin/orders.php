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
                    
                        <?php 
                            include "config.php";
                            $query = "SELECT * FROM orders";
                            $result = mysqli_query($conn, $query);
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<div class='col-12 border p-4 mb-3'>
                                                <div class='row p-0 g-0 d-flex justify-content-betweem'>
                                                    <div class='col-3 col-md-1 mb-3 mb-md-0'>
                                                        <img src='./images/product_img/{$row['image']}' class='img-fluid' alt=''>
                                                    </div>
                                                    <div class ='col-md-4 px-md-4 mb-3 mb-md-0'>
                                                        <p class='product-title mb-1 text-muted'>{$row['title']}</p>
                                                        <p class='name fw-bold text-muted mb-1'>{$row['first_name']}</p>
                                                        <p class='street mb-0 text-muted'>{$row['street']}</p>
                                                        <p class='city country state zip-code mb-0 text-muted'>{$row['state']}, {$row['country']}, {$row['city']}, {$row['zip_code']}</p>
                                                        <p class='phone mb-0 text-muted'>{$row['phone']}</p>
                                                    </div>
                                                    <div class ='col-md-3 px-md-4 mb-3 mb-md-0'>
                                                        <p class='text-muted mb-1'>Items:{$row['quantity']}</p>
                                                        <p class='text-muted mb-1'>Size: {$row['size']}</p>
                                                        <p class='mb-0 text-muted'>Method:{$row['pay_method']}</p>
                                                        <p class='mb-0 text-muted'>Payment:{$row['status']}</p>
                                                        <p class='mb-0 text-muted'>Date:{$row['order_date']}</p>
                                                    </div>
                                                    <div class='col-md-2 text-md-center'>
                                                        <p class='price mb-0 text-muted'>Unit Price:<span>$</span>{$row['unitprice']}</p>
                                                        <p class='price mb-0 text-muted'>Unit Price:<span>$</span>{$row['totalprice']}</p>
                                                    </div>
                                                    <div class='col-lg-2 mt-3 mt-lg-0'>
                                                        <select name='' id='{$row['id']}' class='form-select order-status rounded-0' style='box-shadow:none;outline:none;'>";
                                                        if($row['order_status'] === 'order placed'){
                                                            echo " <option selected value='order placed'>Order placed</option>
                                                            <option value='packing'>Packing</option>
                                                            <option value='shipped'>Shipped</option>
                                                            <option value='out for delivery'>Out for delivery</option>
                                                            <option value='deliverd'>Deliverd</option>
                                                            <option value='cancelled'>Cancelled</option>";
                                                        }
                                                        else if($row['order_status'] === 'packing'){
                                                              echo " <optionvalue='order placed'>Order placed</optionvalue=>
                                                            <option  selected  value='packing'>Packing</option>
                                                            <option value='shipped'>Shipped</option>
                                                            <option value='out for delivery'>Out for delivery</option>
                                                            <option value='deliverd'>Deliverd</option>
                                                            <option value='cancelled'>Cancelled</option>";
                                                        }
                                                        else if($row['order_status'] === 'shipped'){
                                                              echo " <optionvalue='order placed'>Order placed</optionvalue=>
                                                            <option value='packing'>Packing</option>
                                                            <option selected value='shipped'>Shipped</option>
                                                            <option value='out for delivery'>Out for delivery</option>
                                                            <option value='deliverd'>Deliverd</option>
                                                            <option value='cancelled'>Cancelled</option>";
                                                        }
                                                        else if($row['order_status'] === 'out for delivery'){
                                                              echo " <optionvalue='order placed'>Order placed</optionvalue=>
                                                            <option value='packing'>Packing</option>
                                                            <option  value='shipped'>Shipped</option>
                                                            <option selected value='out for delivery'>Out for delivery</option>
                                                            <option value='deliverd'>Deliverd</option>
                                                            <option value='cancelled'>Cancelled</option>";
                                                        }
                                                        else if($row['order_status'] === 'deliverd'){
                                                              echo " <optionvalue='order placed'>Order placed</optionvalue=>
                                                            <option value='packing'>Packing</option>
                                                            <option value='shipped'>Shipped</option>
                                                            <option value='out for delivery'>Out for delivery</option>
                                                            <option selected value='deliverd'>Deliverd</option>
                                                            <option value='cancelled'>Cancelled</option>";
                                                        }
                                                        else if($row['order_status'] === 'cancelled'){
                                                              echo " <optionvalue='order placed'>Order placed</optionvalue=>
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
                            }
                        ?>
                </div>
            </div>
        </div>
    </div>
</section>