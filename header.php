
<?php 
    $page = basename($_SERVER['PHP_SELF']);
    $page_title = '';
    switch($page){
        case $page === 'index.php':
            $page_title = 'Home';
            break;
        case $page ==='collection.php':
            $page_title = 'Collection'; 
            break;
        case $page ==='about.php':
            $page_title = 'About'; 
            break;
        case $page ==='contact.php':
            $page_title = 'Contact'; 
            break;
        case $page ==='product-page.php':
            $page_title = 'Product Page'; 
            break;
        case $page ==='my-order.php':
            $page_title = 'My Orders'; 
            break;
        case $page ==='cart.php':
            $page_title = 'Cart'; 
            break;
        case $page ==='payment.php':
            $page_title = 'Checkout'; 
            break;
        case $page ==='signup.php':
            $page_title = 'SignUp'; 
            break;
        case $page ==='login.php':
            $page_title = 'Login'; 
            break;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title. " | Forever" ?></title>
    <!-- BOOTSTRAP  -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    <!-- MAIN CSS FILE  -->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/utilities.css">
    <!-- FONTAWESOME CDN  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <div class="error d-flex align-items-center border py-2 px-2 bg-white rounded-2 shadow-sm">
    </div>
    <header data-aos="fade-down" style='position:sticky;top:0px;left:0;z-index:9;'>
        <nav class="navbar px-3 py-3">
            <div class="container-fluid">
                <div class="col-1">
                    <h2 class='website-name'>FOREVER</h2>
                </div>
                <div class="col-7 d-flex justify-content-center align-items-center">
                    <ul class="nav header-nav-tab" id='header-nav-tabs'>
                        <i class='fa-solid fa-xmark nav-tab-cross' style='color:#064E38;'></i>
                        <li class="nav-item"><a class="nav-link pages" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link pages" href="collection.php">Collection</a></li>
                        <li class="nav-item"><a class="nav-link pages" href="about.php">About</a></li>
                        <li class="nav-item border-bottom-0"><a class="nav-link pages" href="contact.php">Contact</a></li>
                    </ul>
                    <?php 
                        include "config.php";
                        session_start();
                        if(isset($_SESSION['role'])){
                            if($_SESSION['role'] != 'reader'){
                                echo " <button class='btn border rounded-5'><a href='admin/dashboard.php' class='text-decoration-none text-dark'>Admin Panel</a></button>";
                            }
                        }else{
                            echo " <button class='btn border d-none rounded-5'><a href='admin/dashboard.php' class='text-decoration-none text-dark'>Admin Panel</a></button>";
                        }
                    ?>
                   
                </div>
                <div class="col-2  d-flex justify-content-end align-items-center">
                    <a href="collection.php"><i class="fa-solid me-3 fa-magnifying-glass header-icons"></i></a>
                    <div class='user-profile'>
                        <i class="fa-regular me-3 fa-user header-icons user-icon"></i>
                        <div class="profile">
                            <p class='mb-1 text-muted bg-secondary-subtle d-flex align-items-center rounded-2 py-2 ps-2' style='background-color:#efefef;'><i class="fa-solid me-2 fa-cart-arrow-down"></i><a href="my-order.php" class='text-decoration-none text-dark'>Orders</a></p>
                            <?php 
                                if(isset($_SESSION['name'])){
                                    echo "<p class='mb-1 text-muted bg-secondary-subtle rounded-2 py-2 ps-2 d-flex align-items-center' style='background-color:#efefef;'><i class='fa-solid me-2 fa-arrow-right-from-bracket text-danger'></i><a href='#' class='text-decoration-none text-danger logout'>Logout</a></p>"; 
                                } else{
                                    echo "<p class='mb-1 text-muted bg-secondary-subtle rounded-2 py-2 ps-2 d-flex align-items-center' style='background-color:#efefef;'><i class='fa-solid me-2 fa-user-plus'></i><a href='signup.php' class='text-decoration-none text-dark'>Sign Up</a></p>"; 
                                }
                            ?>
                        </div>
                    </div>
                    <a href="cart.php" class='position-relative text-decoration-none'><i class="fa-solid fa-bag-shopping header-icons"></i><span class='total-item text-white'>0</span></a>
                    <i class="fa-solid fa-bars-staggered ms-3 nav-bars" style='color:#064E38;'></i>
                </div>
            </div>
        </nav>
    </header>
    <script src='./js/jquery.js'></script>
    <script src='./js/main.js'></script>
    <script src='./js/imagepath.js'></script>
    <script src='./js/script.js'></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
           // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 120, // offset (in px) from the original trigger point
            delay: 120, // values from 0 to 3000, with step 50ms
            duration: 1000, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: true, // whether animation should happen only once - while scrolling down
        });
    </script>
</body>
</html>
