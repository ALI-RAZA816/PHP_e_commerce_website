<?php include "header.php" ?>
<section class='product-images'>
    <div class="container">
        <?php 
            include "config.php";
            $query = "SELECT * FROM products WHERE id = {$_GET['product_id']}";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
        ?>
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="row g-0 p-0  mb-4 mb-md-0 ">
                    <div class="col-2 me-4">
                        <div class='mb-3'>
                            <img src="./admin/images/product_img/<?php echo $row['img1'] ?>" class='img-fluid' alt="">
                        </div>
                        <div class='mb-3'>
                            <img src="./admin/images/product_img/<?php echo $row['img2'] ?>" class='img-fluid' alt="">
                        </div>
                        <div class='mb-3'>
                            <img src="./admin/images/product_img/<?php echo $row['img3'] ?>" class='img-fluid' alt="">
                        </div>
                        <div>
                            <img src="./admin/images/product_img/<?php echo $row['img4'] ?>" class='img-fluid' alt="">
                        </div>
                    </div>
                    <div class="col-9 border">
                        <img src="./admin/images/product_img/<?php echo $row['img1'] ?>" class='preview-img' height='100%' width='100%' alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class='product-detail'>
                    <h1 class='product-title text-dark fs-3'><?php echo $row['product_title'] ?></h1>
                    <span class='product-price fs-4'>$<?php echo $row['product_price'] ?></span>
                    <p class='product-description mt-3 fs-6 '>A lightweight, usually knitted, pullover shirt, close-fitting and with a round neckline and short sleeves, worn as an undershirt or outer garment.</p>
                </div>
                <div class="product-size mt-4">
                    <h3 class='fs-5 mb-3' style='color:#555555;'>Select Size</h3>
                    <form action="">
                        <?php 
                            $product_sizes = explode(',',$row['product_sizes']);
                            foreach($product_sizes as $value ){
                                echo "  <div class='me-4 form-check form-check-inline size-selection position-relative'>
                                            <input class='form-check-input size-input' name='size' type='radio' id='{$value}' value='{$value}'>
                                            <label class='form-check-label' for='{$value}'>{$value}</label>
                                        </div>";
                            }
                        ?>
                        <input type="text" value='<?php echo $_GET['product_id']?>'>
                        <ul class="nav mt-5 border-top flex-column pt-3 ">
                            <li class="nav-item mb-2" style='font-size:15px;color:#555555;'>100% Original product</li>
                            <li class="nav-item mb-2" style='font-size:15px;color:#555555;'>Cash on delivery is available on this product.</li>
                            <li class="nav-item" style='font-size:15px;color:#555555;'>Easy return and exchange policy within 7 days.</li>
                        </ul>
                        <button type='button' class='bg-dark text-white text-uppercase btn btn-dark rounded-0 mt-5' style='height:50px;'>Add to cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class='product-description'>
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item rounded-0" role="presentation"><button style='width:120px;' class="nav-link rounded-0 border text-dark active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Description</button></li>
                    <li class="nav-item" role="presentation"><button style='width:120px;' class="nav-link rounded-0 border text-dark" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Reviews</button></li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active border p-3" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <p style='font-size:14px;color:#3a3a3a;font-weight:normal;'><?php echo $row['product_description'] ?></p>
                        <!-- <p style='font-size:14px;color:#3a3a3a;font-weight:normal;'>E-commerce websites typically display products or services along with detailed descriptions, images, prices, and any available variations (e.g., sizes, colors). Each product usually has its own dedicated page with relevant information.</p> -->
                    </div>
                    <div class="tab-pane fade border p-3" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <p style='font-size:14px;color:#3a3a3a;font-weight:normal;'><?php echo $row['product_description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php    }
        }
?>
<section class='related-products' style='margin-bottom:10rem;'>
    <div class="container mb-5">
        <div class="row text-center my-5" style='margin:8rem 0;'>
            <div class="col-12" style='margin:5rem 0;'>
                <h1 class='text-muted text-uppercase fs-2'>Related <span class='fw-bold text-dark'>Products</span><i class="fa-solid fa-minus" style='color:#2A2A2A'></i></h1>
                <span class='text-muted'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</span>
            </div>
               <?php 
                    include "config.php";
                    $query2 = "SELECT COUNT(*)  AS total FROM products";
                    $result2 = mysqli_query($conn, $query2);
                    $row = mysqli_fetch_assoc($result2);
                    $offset = rand(0, $row['total']);
                    $query1 = "SELECT * FROM products LIMIT {$offset}, 6";
                    $result1 = mysqli_query($conn, $query1);
                    if(mysqli_num_rows($result1) > 0){
                        while($row1 = mysqli_fetch_assoc($result1)){
                ?>
                    <div class="card col-6 col-md-3 mb-5 mb-lg-0 col-lg-2 p-0 rounded-0 border-0">
                        <a href="product-page.php?product_id=<?php echo $row1['id'] ?>" class='text-decoration-none'>
                            <div class='px-3'>
                                <img src="./admin/images/product_img/<?php echo $row1['img1'] ?>" class="img-fluid image" alt="...">
                                <div class="card-body p-0 d-flex flex-column">
                                    <span class='text-muted d-inline-block'style='font-size:14px;text-align:left;'><?php echo $row1['product_title'] ?></span>
                                    <span class='fw-bold text-dark d-inline-block' style='text-align:left;'>$<?php echo $row1['product_price'] ?></span>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php    }
                }
            ?>
        </div>
    </div>
</section>
<?php include "footer.php" ?>
