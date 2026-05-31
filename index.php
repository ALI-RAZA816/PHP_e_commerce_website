<?php include "header.php" ?>
<main>
    <section class='header-section'>
        <div class="container-fluid mt-4">
            <div class="row overflow-hidden p-0 g-0">
                <div data-aos="fade-right" class="col-sm-6 d-flex flex-column text-align-left text-sm-left py-sm-0 py-5 hero-section justify-content-sm-center align-items-sm-start ps-sm-5">
                    <span class='text-uppercase'><i class="fa-solid fa-minus" ></i>Our bestseller</span>
                    <h1 class='my-2'>Latest Arrival</h1>
                    <span class='text-uppercase'>Shop Now<i class="fa-solid fa-minus"></i></span>
                </div>
                <div data-aos="fade-left" class="col-sm-6 p-0">
                    <img src="./images/ChatGPT Image May 25, 2026, 09_01_46 PM.png" class='img-fluid hero-image' alt="">
                </div>
            </div>
        </div>
    </section>
    <section class='latest-collection-section'>
        <div class="container bg-white px-4">
            <div class="row text-center">
                <div class="col-12 collection-text">
                    <h1 class='text-uppercase mt-5'>Latest Collections<i class="fa-solid fa-minus"></i></h1>
                    <span class='text-muted'>Experience the intersection of luxury and everyday comfort. Our newest pieces are curated with precision for the modern individual.</span>
                </div>
            </div>
            <div class="row gy-4">
                <?php 
                    include "config.php";
                    $query = "SELECT * FROM products ORDER BY id DESC LIMIT 0, 8";
                    $result = mysqli_query($conn, $query);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo " <div data-aos='zoom-in-up' class='card col-6 col-md-4 col-lg-3 px-2 border-0'>
                                    <a href='product-page.php?product_id={$row['id']}' class='text-decoration-none'>
                                        <div class='d-flex flex-column justify-content-center align-items-center'>
                                            <img src='./admin/images/product_img/{$row['img1']}' class='img-fluid image rounded-3 w-100' alt='...'>
                                            <div class='card-body mt-1 w-100 p-0 d-flex flex-column'>
                                                <span class='text-muted title'>{$row['product_title']}</span>
                                                <span class='fw-bold price text-muted'><span>$</span>{$row['product_price']}</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>";
                        }   
                    }
                ?>
            </div>
        </div>
    </section>
    <section class='best-seller-section'>
        <div class="container px-4">
            <div class="row text-center">
                <div class="col-12  best-seller-text">
                    <h1 class='text-uppercase  mt-5 '>Best Seller<i class="fa-solid fa-minus"></i></h1>
                    <span class='text-muted'>Our most beloved silhouettes, redefined for the season. Timeless designs that resonate with quality and purpose.</span>
                </div>
            </div>
            <div class="row g-0 pb-5 p-0">
                <?php 
                    include "config.php";
                    $query2 = "SELECT COUNT(*) AS total FROM products WHERE bestseller = 'bestseller'";
                    $result2 = mysqli_query($conn, $query2);
                    $row2 = mysqli_fetch_assoc($result2);
                    $query1 = "SELECT * FROM products WHERE bestseller = 'bestseller' LIMIT 0, 4";
                    $result1 = mysqli_query($conn, $query1);
                    if(mysqli_num_rows($result1) > 0){
                        while($row1 = mysqli_fetch_assoc($result1)){
                            echo " <div data-aos='zoom-in-up' class='card bg-transparent col-6 col-md-4 col-lg-3 px-2 border-0'>
                                    <a href='product-page.php?product_id={$row1['id']}' class='text-decoration-none'>
                                        <div class='d-flex flex-column justify-content-center align-items-center'>
                                            <img src='./admin/images/product_img/{$row1['img1']}' class='img-fluid image rounded-3 w-100' alt='...'>
                                            <div class='card-body mt-1 w-100 p-0 d-flex flex-column'>
                                                <span class='text-muted title '>{$row1['product_title']}</span>
                                                <span class='fw-bold price text-muted'><span>$</span>{$row1['product_price']}</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>";
                        }   
                    }
                ?>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container-fluid p-0 support ">
            <div data-aos='zoom-in-up' class='row rounded-4'>
                <div class="col-sm-6 mt-5 mt-sm-0 col-lg-4 d-flex flex-column justify-content-center align-items-center">
                    <img src="./images/exchange_icon.png" style='height:50px;width:50px;' class='img-fluid mb-3' alt="">
                    <span class='text-dark fw-bold'>Easy Exchange Policy</span>
                    <span class='text-muted'>We offer hassle free  exchange policy</span>
                </div>
                <div class="col-sm-6 mt-5 mt-sm-0 col-lg-4 d-flex flex-column justify-content-center align-items-center">
                    <img src="./images/quality_icon.png" style='height:50px;width:50px;' class='img-fluid mb-3' alt="">
                    <span class='text-dark fw-bold'>7 Days Return Policy</span>
                    <span class='text-muted'>We provide 7 days free return policy </span>
                </div>
                <div class="col-md-6 mt-5 mt-lg-0 col-lg-4 d-flex flex-column justify-content-center align-items-center">
                    <img src="./images/support_img.png" style='height:50px;width:50px;' class='img-fluid mb-3' alt="">
                    <span class='text-dark fw-bold'>Best Customer Support</span>
                    <span class='text-muted'>We provide 24/7 customer support</span>
                </div>
            </div>
        </div>
    </section>
    <?php include "subscription.php" ?>
</main>
<?php include "footer.php" ?>