<?php 
    // include "header.php";
    include "config.php";
    session_start();
    if(!isset($_SESSION['role']) || $_SESSION['role'] === 'editor' || $_SESSION['role'] === 'admin'){
        header("Location: {$host_name}/admin/not-found.php");
        exit();
    }

    
    $page = basename($_SERVER['PHP_SELF']);
    $page_title = '';
    switch($page){
        case $page === 'statistics.php':
            $page_title = 'Admin | Dashboard';
            break;
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
     <div class="error d-flex align-items-center border py-2 px-2 bg-white rounded-2 shadow-sm">
    </div>
<section class='dashboard-page overflow-hidden position-relative'>
    <div class="container-fluid p-0">
        <div class="row p-0">
            <div class="col-2 p-0 border-end" style='background-color:#F5F4ED;'>
                <?php 
                    include "sidebar.php";
                    $query = "SELECT *, SUM(totalprice) AS revenue FROM orders WHERE order_status = 'deliverd'";
                    $result = mysqli_query($conn, $query);
                    $revenue = mysqli_fetch_assoc($result);
                    
                    $query1 = "SELECT COUNT(order_status) AS place_orders FROM orders WHERE order_status = 'order placed'";
                    $result1 = mysqli_query($conn, $query1);
                    $placeOrder = mysqli_fetch_assoc($result1);
                    $query2 = "SELECT COUNT(user_role) AS customer FROM users WHERE user_role = 'reader'";
                    $result2 = mysqli_query($conn, $query2);
                    $customers = mysqli_fetch_assoc($result2);
                    $query3 = "SELECT COUNT(order_status) AS c_order FROM orders WHERE order_status = 'cancelled'";
                    $result3 = mysqli_query($conn, $query3);
                    $cancelledOrder = mysqli_fetch_assoc($result3);
                 ?>
            </div>
            <div  class="col-10 px-md-5 border " style='background-color:#FFF8F5;'>
                <div>
                    <h2 class='my-3 fs-1' style='color:#064E38;'>Overview</h2>
                </div>
                <div data-aos="fade-up" data-aos-duration="1000" class="row g-0 mt-md-4 px-3 py-4">
                    <div class="col-md-6 col-lg-3 mt-4 mt-lg-0 pe-md-3" >
                        <div class='rounded-3 dashboard-cards bg-white p-3' style='box-shadow:0 2px 10px 1px rgba(51, 51, 51,.05);'>
                            <i class="fa-solid fa-money-bills fs-6 me-2"></i>
                            <p class='text-muted mb-2 text-uppercase' style='font-size:15px;'>Revenue</p>
                            <h3 class='m-0 fs-3 fw-bold'>$ <?php echo $revenue['revenue']; ?></h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mt-4 mt-lg-0 px-lg-3">
                        <div class='rounded-3 dashboard-cards bg-white p-3' style='box-shadow:0 2px 10px 1px rgba(51, 51, 51,.05);'>
                            <i class="fa-solid fa-cart-shopping fs-6 me-2"></i>
                            <p class='text-muted mb-2 text-uppercase' style='font-size:15px;'>Orders</p>
                            <h3 class='m-0 fs-3 fw-bold'><?php echo $placeOrder['place_orders'] ?></h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mt-4 mt-lg-0 pe-md-3 px-lg-3">
                        <div class='rounded-3 dashboard-cards bg-white p-3' style='box-shadow:0 2px 10px 1px rgba(51, 51, 51,.05);'>
                            <i class="fa-solid fa-user-group fs-6 me-2"></i>
                            <p class='text-muted mb-2 text-uppercase' style='font-size:15px;'>Customers</p>
                            <h3 class='m-0 fs-3 fw-bold'><?php echo $customers['customer'] ?></h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mt-4 mt-lg-0  ps-lg-3">
                        <div class='rounded-3 dashboard-cards bg-white p-3' style='box-shadow:0 2px 10px 1px rgba(51, 51, 51,.05);'>
                            <i class="fa-solid fa-ban text-danger fs-6 me-2"></i>
                            <p class='text-muted mb-2 text-uppercase' style='font-size:15px;'>Cancelled</p>
                            <h3 class='m-0 fs-3 fw-bold'><?php echo $cancelledOrder['c_order'] ?></h3>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="3000" class="row">
                    <div class="col-lg-8 mt-5" >
                        <?php 
                            $totalOrders = "SELECT COUNT(*) as total FROM orders";
                            $result12 = mysqli_query($conn, $totalOrders);
                            $orders = mysqli_fetch_assoc($result12);
                            $total_orders = $orders['total'];

                            $query7 = "SELECT COUNT(*) AS average FROM orders WHERE order_status = 'deliverd'";
                            $result7 = mysqli_query($conn, $query7);
                            $row7 = mysqli_fetch_assoc($result7);
                            $deliver_avg = round(($row7['average']/$total_orders) * 100, 2);

                            $query8 = "SELECT COUNT(*) AS packing FROM orders WHERE order_status = 'packing'";
                            $result8 = mysqli_query($conn, $query8);
                            $row8 = mysqli_fetch_assoc($result8);
                            $packing_avg = round(($row8['packing']/$total_orders) * 100, 2);

                            $query9 = "SELECT COUNT(*) AS shipped FROM orders WHERE order_status = 'shipped'";
                            $result9 = mysqli_query($conn, $query9);
                            $row9 = mysqli_fetch_assoc($result9);
                            $shipping_avg = round(($row9['shipped']/$total_orders) * 100, 2);

                            $query10 = "SELECT COUNT(*) AS out_delivered FROM orders WHERE order_status = 'out for delivery'";
                            $result10 = mysqli_query($conn, $query10);
                            $row10 = mysqli_fetch_assoc($result10);
                            $outdelivery_avg = round(($row10['out_delivered']/$total_orders) * 100, 2);

                            $query11 = "SELECT COUNT(*) AS cancelled FROM orders WHERE order_status = 'cancelled'";
                            $result11 = mysqli_query($conn, $query11);
                            $row11 = mysqli_fetch_assoc($result11);
                            $cancelled_avg = round(($row11['cancelled']/$total_orders)*100,2);
                        ?>
                        <div  class='p-3 overflow-hidden delivery-status bg-white rounded-3' style='box-shadow:0 0 10px 1px rgba(51, 51, 51,.08);'>
                            <h1>Delivery Status</h1>
                            <p class='text-muted mb-4'>Logistics performance for the current quarter.</p>
                            <div class='mb-3 py-2'>
                                <div class='d-flex justify-content-between'>
                                    <div class='d-flex align-items-center'>
                                        <p class='mb-0 text-uppercase text-dark fw-bold mb-3' style='font-size:13px;'>Delivered</p>
                                    </div>
                                    <p class='mb-0 fw-bold' style='color:#064E38;'><?php echo $deliver_avg ?>%</p>
                                </div>
                                <div class='w-100 rounded-2' style='background-color:#F4ECE8;'>
                                    <div class='rounded-2 'style='background-color:#003527;height:8px;width:<?php echo $deliver_avg ?>%;'></div>
                                </div>
                            </div>
                            <div class='mb-3 py-2'>
                                <div class='d-flex justify-content-between'>
                                    <div class='d-flex align-items-center'>
                                        <p class='mb-0 text-dark fw-bold mb-3 text-uppercase' style='font-size:13px;'>Packing</p>
                                    </div>
                                    <p class='mb-0 fw-bold' style='color:#064E38;'><?php echo $packing_avg ?>%</p>
                                </div>
                                <div class='w-100 rounded-2' style='background-color:#F4ECE8;'>
                                    <div class='rounded-2' style='background-color:#627E74;height:8px;width:<?php echo $packing_avg ?>%;'></div>
                                </div>
                            </div>
                            <div class='mb-3 py-2'>
                                <div class='d-flex justify-content-between'>
                                    <div class='d-flex align-items-center'>
                                        
                                        <p class='mb-0 text-uppercase text-dark fw-bold mb-3' style='font-size:13px;'>Shipping</p>
                                    </div>
                                    <p class='mb-0 fw-bold'  style='color:#064E38;'><?php echo $shipping_avg ?>%</p>
                                </div>
                                <div class='w-100 rounded-2' style='background-color:#F4ECE8;'>
                                    <div class='rounded-2' style='background-color:#31594E;height:8px;width:<?php echo $shipping_avg ?>%;'></div>
                                </div>
                            </div>
                            <div class='mb-3 py-2'>
                                <div class='d-flex justify-content-between'>
                                    <div class='d-flex align-items-center'>
                                        
                                        <p class='mb-0 text-dark fw-bold mb-3 text-uppercase' style='font-size:13px;'>Out for delivery</p>
                                    </div>
                                    <p class='mb-0 fw-bold' style='color:#064E38;'><?php echo $outdelivery_avg ?>%</p>
                                </div>
                                <div class='w-100 rounded-2' style='background-color:#F4ECE8;'>
                                    <div class='rounded-2 bg-secondary' style='background-color:#627E74;height:8px;width:<?php echo $outdelivery_avg ?>%;'></div>
                                </div>
                            </div>
                            <div class='mb-3 py-2'>
                                <div class='d-flex justify-content-between'>
                                    <div class='d-flex align-items-center'>
                                        <p class='mb-0 text-dark fw-bold mb-3 text-uppercase' style='font-size:13px;'>Cancelled</p>
                                    </div>
                                    <p class='mb-0 fw-bold'style='color:#064E38;'><?php echo $cancelled_avg ?>%</p>
                                </div>
                                <div class='w-100 rounded-2' style='background-color:#F4ECE8;'>
                                    <div class='rounded-2 bg-danger' style='height:8px;width:<?php echo $cancelled_avg ?>%;'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5 rounded-3 p-4" style='background-color:#FAF2EE;'>
                        <h2 class='fw-bold' style='color:#064E38;'>Recent  Transactions</h2>
                        <div>
                            <?php 
                                $query6 = "SELECT * FROM orders ORDER BY id DESC LIMIT 0,7";
                                $result6 = mysqli_query($conn, $query6);
                                if(mysqli_num_rows($result6) > 0){
                                    while($row6 = mysqli_fetch_assoc($result6)){
                                        $textColor = '';
                                        if($row6['order_status'] === 'order placed'){
                                            $textColor = '#B0F0D6';
                                        }else if($row6['order_status'] === 'deliverd'){
                                            $textColor = '#B0F0D6';
                                        }else if($row6['order_status'] === 'packing'){
                                            $textColor = '#E6DEDA';
                                        }else if($row6['order_status'] === 'shipped'){
                                            $textColor = '#E6DEDA';
                                        }else if($row6['order_status'] === 'out of delivery'){
                                            $textColor = '#E6DEDA';
                                        }else if($row6['order_status'] === 'cancelled'){
                                            $textColor = '#FFDAD6';
                                        }
                                        echo "<div class='d-flex transaction justify-content-between border-bottom py-2'>
                                                <div>
                                                    <p class='mb-0 text-dark' >{$row6['username']}</p>
                                                    <p class='mb-0'>#ORD-00{$row6['id']}</p>
                                                </div>
                                                <div>
                                                    <p class='mb-0 fw-bold text-right' style='color:#064E38;'><span>$</span>{$row6['unitprice']}.00</p>
                                                    <p class='mb-0 text-dark rounded-1 px-2 text-capitalize' style='font-size:13px;background-color:{$textColor};'>{$row6['order_status']}</p>
                                                </div>
                                            </div>";
                                    }
                                }else{
                                    echo "No recent orders";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <script src='../js/jquery.js'></script>
    <script src='../js/main.js'></script>
    <script src='../js/sidebar.js'></script>
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
