<?php include "header.php" ?>
<main>
    <section class='header-section'>
        <div class="container mt-2">
            <div class="row border p-0 g-0">
                <div class="col-sm-6 d-flex flex-column text-center text-sm-left py-sm-0 py-5 justify-content-sm-center align-items-sm-start ps-sm-5">
                    <span class='text-uppercase'><i class="fa-solid fa-minus" style='color:#2A2A2A'></i>Our bestseller</span>
                    <h2 style='font-family: "Prata", serif;' class='my-2 fs-1'>Latest Arrival</h2>
                    <span class='text-uppercase'>Shop Now<i class="fa-solid fa-minus" style='color:#2A2A2A'></i></span>
                </div>
                <div class="col-sm-6">
                    <img src="./images/header_img.png" class='img-fluid hero-image' alt="">
                </div>
            </div>
        </div>
    </section>
    <section class='latest-collection-section'>
        <div class="container">
            <div class="row text-center" style='margin:8rem 0;'>
                <div class="col-12">
                    <h1 class='text-muted text-uppercase fs-2'>Latest <span class='fw-bold text-dark'>Collections</span><i class="fa-solid fa-minus" style='color:#2A2A2A'></i></h1>
                    <span class='text-muted'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</span>
                </div>
            </div>
            <div class="row gy-4">
                <?php 
                    include "config.php";
                    $query = "SELECT * FROM products ORDER BY id DESC LIMIT 0, 8";
                    $result = mysqli_query($conn, $query);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo " <div class='card col-6 col-md-4 col-lg-3 p-0 rounded-0 border-0'>
                                    <a href='product-page.php?product_id={$row['id']}' class='text-decoration-none'>
                                        <div class='px-3'>
                                            <img src='./admin/images/product_img/{$row['img1']}' class='img-fluid image' alt='...'>
                                            <div class='card-body p-0 d-flex flex-column'>
                                                <span class='text-muted '>{$row['product_title']}</span>
                                                <span class='fw-bold text-dark'><span>$</span>{$row['product_price']}</span>
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
        <div class="container">
            <div class="row text-center my-5" style='margin:8rem 0;'>
                <div class="col-12">
                    <h1 class='text-muted text-uppercase fs-2'>Best <span class='fw-bold text-dark'>Seller</span><i class="fa-solid fa-minus" style='color:#2A2A2A'></i></h1>
                    <span class='text-muted'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</span>
                </div>
            </div>
            <div class="row gy-4 p-0">
                <?php 
                    include "config.php";
                    $query2 = "SELECT COUNT(*) AS total FROM products WHERE bestseller = 'bestseller'";
                    $result2 = mysqli_query($conn, $query2);
                    $row2 = mysqli_fetch_assoc($result2);
                    $offset = rand(0, $row2['total']);
                    $query1 = "SELECT * FROM products WHERE bestseller = 'bestseller' LIMIT {$offset}, 6";
                    $result1 = mysqli_query($conn, $query1);
                    if(mysqli_num_rows($result1) > 0){
                        while($row1 = mysqli_fetch_assoc($result1)){
                            echo " <div class='card col-6 col-md-4 col-lg-2 p-0 rounded-0 border-0'>
                                    <a href='product-page.php?product_id={$row1['id']}' class='text-decoration-none'>
                                        <div class='px-3'>
                                            <img src='./admin/images/product_img/{$row1['img1']}' class='img-fluid image' alt='...'>
                                            <div class='card-body p-0 d-flex flex-column'>
                                                <span class='text-muted '>{$row1['product_title']}</span>
                                                <span class='fw-bold text-dark'><span>$</span>{$row1['product_price']}</span>
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
    <section class="support-section">
        <div class="container">
            <div class='row' style='margin:8rem 0 3rem 0;'>
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
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-lg-6 text-center" style='margin:10rem 0;'>
                    <h2>Subscribe now & get 20% off</h2>
                    <p class='text-muted'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <div class="subscription d-flex">
                        <input type="text" placeholder='Enter your email address' class='form-control rounded-0'>
                        <button class='text-white bg-dark btn rounded-0 text-uppercase'>Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php" ?>