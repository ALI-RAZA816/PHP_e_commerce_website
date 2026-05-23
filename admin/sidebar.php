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
?>
<div class='sidebar border-end py-2 overflow-hidden vh-100'>
    <ul class="nav flex-column">
        <?php 
            if($_SESSION['role'] === 'super-admin'){
                echo "<li class='nav-item'><a class='nav-link $statistics dashboard-links text-dark border border-end-0 mb-3 rounded-start-2 d-flex align-items-center' href='statistics.php'><i class='fa-solid fa-dice-d6 fs-5 me-2'></i><span class='d-none d-md-block'>Dashboard</span></a></li>
                <li class='nav-item'><a class='nav-link $items dashboard-links text-dark border border-end-0 mb-3 rounded-start-2 d-flex align-items-center' href='dashboard.php'><i class='fa-regular fa-square-plus text-dark fs-5 me-2'></i><span class='d-none d-md-block'>Add Items</span></a></li>
                    <li class='nav-item'><a class='nav-link $list_items dashboard-links text-dark border border-end-0 mb-3 rounded-start-2 d-flex align-items-center' href='list-items.php'><i class='fa-solid fa-list fs-5 me-2'></i><span class='d-none d-md-block'>List Items</span></a></li>
                    <li class='nav-item'><a class='nav-link $orders dashboard-links text-dark border border-end-0 mb-3 rounded-start-2 d-flex align-items-center' href='orders.php'><i class='fa-solid fa-arrow-up-a-z fs-5 me-2'></i><span class='d-none d-md-block'>Orders</span></a></li>
                    <li class='nav-item'><a class='nav-link $users dashboard-links text-dark border border-end-0 mb-3 rounded-start-2 d-flex align-items-center' href='users.php'><i class='fa-solid fa-user-group fs-5 me-2'></i><span class='d-none d-md-block'>Users</span></a></li>";
            }
            else if($_SESSION['role'] === 'admin'){
                echo "<li class='nav-item'><a class='nav-link $orders dashboard-links text-dark border border-end-0 mb-3 rounded-start-2 d-flex align-items-center' href='orders.php'><i class='fa-solid fa-arrow-up-a-z fs-5 me-2'></i><span class='d-none d-md-block'>Orders</span></a></li>
                <li class='nav-item'><a class='nav-link $users dashboard-links text-dark border border-end-0 mb-3 rounded-start-2 d-flex align-items-center' href='users.php'><i class='fa-solid fa-user-group fs-5 me-2'></i><span class='d-none d-md-block'>Users</span></a></li>";
            }
            else if($_SESSION['role'] === 'editor'){
                echo "<li class='nav-item'><a class='nav-link $list_items dashboard-links text-dark border border-end-0 mb-3 rounded-start-2 d-flex align-items-center' href='list-items.php'><i class='fa-solid fa-list fs-5 me-2'></i><span class='d-none d-md-block'>List Items</span></a></li>";
            }
        ?>
        <!-- <li class="nav-item"><a class="nav-link dashboard-links text-dark border border-end-0 mb-3 rounded-start-2 d-flex align-items-center" href="dashboard.php"><i class="fa-regular fa-square-plus text-dark fs-5 me-2"></i><span class='d-none d-md-block'>Add Items</span></a></li>
        <li class="nav-item"><a class="nav-link dashboard-links text-dark border border-end-0 mb-3 rounded-start-2 d-flex align-items-center" href="list-items.php"><i class="fa-solid fa-list fs-5 me-2"></i><span class='d-none d-md-block'>List Items</span></a></li>
        <li class="nav-item"><a class="nav-link dashboard-links text-dark border border-end-0 mb-3 rounded-start-2 d-flex align-items-center" href="orders.php"><i class="fa-solid fa-arrow-up-a-z fs-5 me-2"></i><span class='d-none d-md-block'>Orders</span></a></li>
        <li class="nav-item"><a class="nav-link dashboard-links text-dark border border-end-0 mb-3 rounded-start-2 d-flex align-items-center" href="users.php"><i class="fa-solid fa-user-group fs-5 me-2"></i><span class='d-none d-md-block'>Users</span></a></li> -->
    </ul>
</div>