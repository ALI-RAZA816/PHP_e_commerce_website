<?php 
    include "config.php";
    if(!isset($_SESSION['role']) || $_SESSION['role'] === 'reader'){
        header("Location: {$host_name}/admin/not-found.php");
        exit();
    }

    $statistics = basename($_SERVER['PHP_SELF']) === "statistics.php" ? "active-link" : '';
    $items = basename($_SERVER['PHP_SELF']) === "dashboard.php" ? "active-link" : '';
    $list_items = basename($_SERVER['PHP_SELF']) === "list-items.php" ? "active-link" : '';
    $orders = basename($_SERVER['PHP_SELF']) === "orders.php" ? "active-link" : '';
    $users = basename($_SERVER['PHP_SELF']) === "users.php" ? "active-link" : '';

    

    $page = basename($_SERVER['PHP_SELF']);
    $page_title = '';
    switch($page){
        case $page === 'statistics.php':
            $page_title = ' Admin | Dashboard';
            break;
        case $page ==='dashboard.php':
            $page_title = ' Admin | Add Product'; 
            break;
        case $page ==='list-items.php':
            $page_title = ' Admin | Items'; 
            break;
        case $page ==='orders.php':
            $page_title = ' Admin | Orders'; 
            break;
        case $page ==='users.php':
            $page_title = 'Admin | Users'; 
            break;
        case $page ==='edit-product.php':
            $page_title = 'Admin | Edit Product'; 
            break;
        case $page ==='edit-user-page.php':
            $page_title = 'Admin | Edit User'; 
            break;
        default:
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title . " | Forever" ?></title>
    <!-- BOOTSTRAP  -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    <!-- MAIN CSS FILE  -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/utilities.css">
    <!-- FONTAWESOME CDN  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<div class='sidebar d-flex flex-column justify-content-between pt-3 pt-lg-0 px-2 px-md-4 overflow-hidden' style='min-height:100vh;position:sticky;top:0;'>
    <div>
        <h2 class='mb-0 d-none d-lg-block mt-2 text-uppercase'>Forever</h2>
        <h2 class='mb-0 d-none d-lg-block'>Admin</h2>
        <p class='text-muted d-none d-lg-block text-uppercase'>Management Portal</p>
        <ul class="nav flex-column">
            <?php 
                if($_SESSION['role'] === 'super-admin'){
                    echo "<li class='nav-item'><a class='text-muted nav-link $statistics dashboard-links text-dark mb-3 rounded-2 d-flex align-items-center' href='statistics.php'><i class='fa-solid fa-dice-d6 fs-5 me-2'></i><span class='d-none d-lg-block'>Dashboard</span></a></li>
                    <li class='nav-item'><a class='text-muted nav-link $items dashboard-links text-dark mb-3 rounded-2 d-flex align-items-center' href='dashboard.php'><i class='fa-regular fa-square-plus fs-5 me-2'></i><span class='d-none d-lg-block'>Add Items</span></a></li>
                        <li class='nav-item'><a class='text-muted nav-link $list_items dashboard-links text-dark  mb-3 rounded-2 d-flex align-items-center' href='list-items.php'><i class='fa-solid fa-list fs-5 me-2'></i><span class='d-none d-lg-block'>List Items</span></a></li>
                        <li class='nav-item'><a class='text-muted nav-link $orders dashboard-links text-dark  mb-3 rounded-2 d-flex align-items-center' href='orders.php'><i class='fa-solid fa-shopping-cart fs-5 me-2'></i><span class='d-none d-lg-block'>Orders</span></a></li>
                        <li class='nav-item'><a class='text-muted nav-link $users dashboard-links text-dark mb-3 rounded-2 d-flex align-items-center' href='users.php'><i class='fa-solid fa-user-group fs-5 me-2'></i><span class='d-none d-lg-block'>Users</span></a></li>";
                }
                else if($_SESSION['role'] === 'admin'){
                    echo "<li class='nav-item'><a class='text-muted nav-link $orders dashboard-links text-dark mb-3 rounded-2 d-flex align-items-center' href='orders.php'><i class='fa-solid fa-arrow-up-a-z fs-5 me-2'></i><span class='d-none d-md-block'>Orders</span></a></li>
                    <li class='nav-item'><a class='text-muted nav-link $users dashboard-links text-dark  mb-3 rounded-2 d-flex align-items-center' href='users.php'><i class='fa-solid fa-user-group fs-5 me-2'></i><span class='d-none d-md-block'>Users</span></a></li>";
                }
                else if($_SESSION['role'] === 'editor'){
                    echo "<li class='nav-item'><a class='text-muted nav-link $list_items dashboard-links text-dark  mb-3 rounded-2 d-flex align-items-center' href='list-items.php'><i class='fa-solid fa-list fs-5 me-2'></i><span class='d-none d-md-block'>List Items</span></a></li>";
                }
            ?>
            <!-- <li class="nav-item"><a class="nav-link dashboard-links text-dark border border-end-0 mb-3 rounded-start-2 d-flex align-items-center" href="dashboard.php"><i class="fa-regular fa-square-plus text-dark fs-5 me-2"></i><span class='d-none d-md-block'>Add Items</span></a></li>
            <li class="nav-item"><a class="nav-link dashboard-links text-dark border border-end-0 mb-3 rounded-start-2 d-flex align-items-center" href="list-items.php"><i class="fa-solid fa-list fs-5 me-2"></i><span class='d-none d-md-block'>List Items</span></a></li>
            <li class="nav-item"><a class="nav-link dashboard-links text-dark border border-end-0 mb-3 rounded-start-2 d-flex align-items-center" href="orders.php"><i class="fa-solid fa-arrow-up-a-z fs-5 me-2"></i><span class='d-none d-md-block'>Orders</span></a></li>
            <li class="nav-item"><a class="nav-link dashboard-links text-dark border border-end-0 mb-3 rounded-start-2 d-flex align-items-center" href="users.php"><i class="fa-solid fa-user-group fs-5 me-2"></i><span class='d-none d-md-block'>Users</span></a></li> -->
        </ul>
    </div>
    <button style='background-color:rgba(61, 61, 61,.20);' class='btn mb-5 text-muted admin-logout d-flex align-items-center justify-content-center'><i class="fa-solid me-2 py-2 fa-right-from-bracket"></i><span class='d-none d-lg-block'>Logout</span></button>
</div>
    <script src='../js/jquery.js'></script>
    <script src='../js/main.js'></script>
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