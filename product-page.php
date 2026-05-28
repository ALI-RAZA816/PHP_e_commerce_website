<?php include "header.php" ?>
<section class='product-images py-5' style='background-color:#FFF8F5;'>
    <div class="container">
        <?php 
            include "config.php";
            $query = "SELECT * FROM products WHERE id = {$_GET['product_id']}";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
        ?>
        <div class="row overflow-hidden py-3">
            <div class="col-md-6" data-aos="fade-right">
                <div class="row g-0 p-0  mb-4 mb-md-0 ">
                    <div class="col-2 me-4">
                        <div class='mb-3'>
                            <img src="./admin/images/product_img/<?php echo $row['img1'] ?>" class='img-fluid images' alt="">
                        </div>
                        <div class='mb-3'>
                            <img src="./admin/images/product_img/<?php echo $row['img2'] ?>" class='img-fluid images' alt="">
                        </div>
                        <div class='mb-3'>
                            <img src="./admin/images/product_img/<?php echo $row['img3'] ?>" class='img-fluid images' alt="">
                        </div>
                        <div>
                            <img src="./admin/images/product_img/<?php echo $row['img4'] ?>" class='img-fluid images' alt="">
                        </div>
                    </div>
                    <div class="col-9 border">
                        <img src="./admin/images/product_img/<?php echo $row['img1'] ?>" class='preview-img' height='100%' width='100%' alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class='product-detail'>
                    <h1 class='product-title'><?php echo $row['product_title'] ?></h1>
                    <span class='product-price text-muted fs-1'>$<?php echo $row['product_price'] ?></span>
                    <p class='product-description mt-3 fs-6 '>A lightweight, usually knitted, pullover shirt, close-fitting and with a round neckline and short sleeves, worn as an undershirt or outer garment.</p>
                </div>
                <div class="product-size mt-4">
                    <h3 class='fs-6 text-uppercase mb-3'>Select Size</h3>
                    <form action="">
                        <?php 
                            $product_sizes = explode(',',$row['product_sizes']);
                            foreach($product_sizes as $value ){
                                echo "  <div class='me-4 form-check form-check-inline size-selection position-relative'>
                                            <input class='form-check-input product-size' name='productsize' type='radio' id='{$value}' value='{$value}'>
                                            <label class='form-check-label' for='{$value}'>{$value}</label>
                                        </div>";
                            }
                        ?>
                        <input type="hidden" name='product-id' value='<?php echo $_GET['product_id']?>'>
                        <ul class="nav mt-5 border-top flex-column pt-3 ">
                            <li class="nav-item mb-2" style='font-size:15px;color:#555555;'>100% Original product</li>
                            <li class="nav-item mb-2" style='font-size:15px;color:#555555;'>Cash on delivery is available on this product.</li>
                            <li class="nav-item" style='font-size:15px;color:#555555;'>Easy return and exchange policy within 7 days.</li>
                        </ul>
                        <button type='button' class='rounded-2 text-white text-uppercase btn btn-dark mt-5 add-to-cart' style='height:50px;'>Add to cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class='product-description py-5' style='background-color:#FFF8F5;'>
    <div class="container">
        <div data-aos="fade-up" class="row py-3 rounded-3" >
            <div class="col-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item rounded-0" role="presentation"><button style='width:120px;' class="nav-link rounded-0 bg-transparent text-muted  border-top-0 border-end-0 border-start-0 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Description</button></li>
                    <li class="nav-item" role="presentation"><button style='width:120px;' class="nav-link rounded-0 bg-transparent text-muted  border-top-0 border-end-0 border-start-0" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Reviews</button></li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active  p-3" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0" style='border-bottom:none !important;'>
                        <p style='font-size:14px;color:#3a3a3a;line-height:25px;' class='text-capitalize fw-normal'><?php echo $row['product_description'] ?></p>
                        <!-- <p style='font-size:14px;color:#3a3a3a;font-weight:normal;'>E-commerce websites typically display products or services along with detailed descriptions, images, prices, and any available variations (e.g., sizes, colors). Each product usually has its own dedicated page with relevant information.</p> -->
                    </div>
                    <div class="tab-pane fade p-3" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0" style='border-bottom:none !important;'>
                        <p style='font-size:14px;color:#3a3a3a;line-height:25px;' class='text-capitalize fw-normal'><?php echo $row['product_description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php    }
        }
?>
<section class='related-products' style='background-color:#FFF8F5; padding:8rem 0;'>
    <div class="container">
        <div class="row text-center">
            <div class="col-12 py-4">
                <h1 class='text-uppercase'>Related Products</h1>
                <span class='text-muted fs-6'>Explore our curated selection of similar styles crafted for effortless everyday luxury.</span>
            </div>
               <?php 
                    include "config.php";
                    $query2 = "SELECT COUNT(*)  AS total FROM products";
                    $result2 = mysqli_query($conn, $query2);
                    $row = mysqli_fetch_assoc($result2);
                    $query1 = "SELECT * FROM products LIMIT 3, 4";
                    $result1 = mysqli_query($conn, $query1);
                    if(mysqli_num_rows($result1) > 0){
                        while($row1 = mysqli_fetch_assoc($result1)){
                ?>
                    <div data-aos='zoom-in-up' class="card bg-transparent col-6 col-md-4 col-lg-3 px-2 border-0">
                        <a href="product-page.php?product_id=<?php echo $row1['id'] ?>" class='text-decoration-none'>
                            <div class='d-flex flex-column justify-content-center align-items-center'>
                                <img src="./admin/images/product_img/<?php echo $row1['img1'] ?>" class="img-fluid image rounded-3" alt="...">
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
