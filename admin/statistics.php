<?php 
    include "header.php";
    include "config.php";
    if(!isset($_SESSION['role']) || $_SESSION['role'] === 'editor' || $_SESSION['role'] === 'admin'){
        header("Location: {$host_name}/admin/not-found.php");
        exit();
    }
?>
<section class='dashboard-page position-relative'>
    <div class="container">
        <div class="row mt-5">
            <div class="col-3 border-end " data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
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
            <div  class="col-9 ">
                <div data-aos="fade-up"
                data-aos-duration="1000" class="row bg-white g-0 mt-4 p-3 py-4" >
                    <div class="col-md-6 col-lg-3 mt-4 mt-lg-0 pe-md-3">
                        <div class='rounded-3 bg-white p-3' style='box-shadow:0 0 10px 1px #efefef;'>
                            <p class='text-muted mb-2 text-uppercase' style='font-size:15px;'><i class="fa-solid fa-money-bills fs-6 me-2"></i>Revenue</p>
                            <h3 class='text-success m-0 fs-3 fw-bold'>$ <?php echo $revenue['revenue'] ?></h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mt-4 mt-lg-0 px-lg-3">
                        <div class='rounded-3 bg-white p-3' style='box-shadow:0 0 10px 1px #efefef;'>
                            <p class='text-muted mb-2 text-uppercase' style='font-size:15px;'><i class="fa-solid fa-cart-shopping fs-6 me-2"></i>Orders</p>
                            <h3 class='text-warning m-0 fs-3 fw-bold'><?php echo $placeOrder['place_orders'] ?></h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mt-4 mt-lg-0 pe-md-3 px-lg-3">
                        <div class='rounded-3 bg-white p-3' style='box-shadow:0 0 10px 1px #efefef;'>
                            <p class='text-muted mb-2 text-uppercase' style='font-size:15px;'><i class="fa-solid fa-user-group fs-6 me-2"></i>Customers</p>
                            <h3 class='text-primary m-0 fs-3 fw-bold'><?php echo $customers['customer'] ?></h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mt-4 mt-lg-0  ps-lg-3">
                        <div class='rounded-3 bg-white p-3' style='box-shadow:0 0 10px 1px #efefef;'>
                            <p class='text-muted mb-2 text-uppercase' style='font-size:15px;'><i class="fa-solid fa-ban fs-6 me-2"></i>Cancelled</p>
                            <h3 class='text-danger m-0 fs-3 fw-bold'><?php echo $cancelledOrder['c_order'] ?></h3>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up"
     data-aos-duration="3000" class="row bg-white g-0 p-3 mt-4">
                    <div class="col-lg-8 mt-5">
                        <?php 
                            $query5 = "SELECT SUM(totalprice) AS revenue, DATE_FORMAT(order_date, '%M %Y') AS month_label 
                                    FROM orders 
                                    WHERE order_status = 'deliverd' 
                                    GROUP BY month_label";
                            $result5 = mysqli_query($conn, $query5);
                            $dataPoints = array();
                            if(mysqli_num_rows($result5) > 0){
                                while($row5 = mysqli_fetch_assoc($result5)){
                                    $dataPoints[] = array("y" => $row5['revenue'],"label" => $row5['month_label']);
                                }
                            }
            
                        ?>
                        <div class='pe-lg-4'>
                            <script>
                                window.onload = function() {
                                
                                var chart = new CanvasJS.Chart("chartContainer", {
                                    animationEnabled: true,
                                    title:{
                                        text: "Revenue"
                                    },
                                    axisX: {
                                        title: "Month",
                                        labelAngle: -30,          // Rotates labels to avoid overlap
                                        interval: 1,              // Shows every month label
                                        labelFontSize: 12
                                    },
                                    axisY: {
                                        title: "Revenue (in USD)",
                                        includeZero: true,
                                        prefix: "$",
                                        suffix:  "k"
                                    },
                                    data: [{
                                        type: "column",
                                        yValueFormatString: "$#,##0K",
                                        indexLabel: "{y}",
                                        indexLabelPlacement: "inside",
                                        indexLabelFontWeight: "bolder",
                                        indexLabelFontColor: "white",
                                        showInLegend: true,
                                        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                                    }]
                                });
                                chart.render();
                                
                                }
                            </script>
                        <div id="chartContainer" class='bg-white rounded-3 p-2 py-3' style="height: 370px; width: 100%;box-shadow:0 0 10px 1px #efefef;"></div>
                        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
                    </div>
                    </div>
                    <div class="col-lg-4 mt-5 bg-white rounded-3 p-2 px-3" style='box-shadow:0 0 10px 1px #33333321;'>
                        <p class='fw-bold'>Recent Orders</p>
                        <div>
                            <?php 
                                $query6 = "SELECT * FROM orders ORDER BY id DESC LIMIT 0,7";
                                $result6 = mysqli_query($conn, $query6);
                                if(mysqli_num_rows($result6) > 0){
                                    while($row6 = mysqli_fetch_assoc($result6)){
                                        echo "<div class='d-flex justify-content-between border-bottom py-2'>
                                                <div>
                                                    <p class='mb-0 fw-bold' style='font-size:14px; line-height:15px;'>#ORD-00{$row6['id']}</p>
                                                    <p class='mb-0' style='font-size:14px; line-height:15px;'>{$row6['username']}</p>
                                                </div>
                                                <div>
                                                    <p class='mb-0 fw-bold' style='font-size:14px;text-align:right; line-height:15px;'><span>$</span>{$row6['unitprice']}</p>
                                                    <p class='mb-0 text-success text-capitalize' style='font-size:14px; line-height:15px;'>{$row6['order_status']}</p>
                                                </div>
                                            </div>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up"
     data-aos-duration="3000" class="row mt-4 bg-white p-4 rounded-3 " style='box-shadow:0 0 10px 1px #33333321;'>
                    <p class='fw-bold mb-0'>Order Status</p>
                    <div class='col-12'>
                        <?php 
                            $query7 = "SELECT AVG(id) AS average FROM orders WHERE order_status = 'deliverd'";
                            $result7 = mysqli_query($conn, $query7);
                            $row7 = mysqli_fetch_assoc($result7);
                            $deliver_avg = ceil($row7['average']);

                            $query8 = "SELECT AVG(id) AS packing FROM orders WHERE order_status = 'packing'";
                            $result8 = mysqli_query($conn, $query8);
                            $row8 = mysqli_fetch_assoc($result8);
                            $packing_avg = ceil($row8['packing']);

                            $query9 = "SELECT AVG(id) AS shipped FROM orders WHERE order_status = 'shipped'";
                            $result9 = mysqli_query($conn, $query9);
                            $row9 = mysqli_fetch_assoc($result9);
                            $shipping_avg = ceil($row9['shipped']);

                            $query10 = "SELECT AVG(id) AS out_delivered FROM orders WHERE order_status = 'out for delivery'";
                            $result10 = mysqli_query($conn, $query10);
                            $row10 = mysqli_fetch_assoc($result10);
                            $outdelivery_avg = ceil($row10['out_delivered']);

                            $query11 = "SELECT AVG(id) AS cancelled FROM orders WHERE order_status = 'cancelled'";
                            $result11 = mysqli_query($conn, $query11);
                            $row11 = mysqli_fetch_assoc($result11);
                            $cancelled_avg = ceil($row11['cancelled']);
                        ?>
                        <div class='mb-3 border-bottom py-2'>
                            <div class='d-flex justify-content-between'>
                                <div class='d-flex align-items-center'>
                                    <i class="fa-solid fa-truck me-1 text-success" style='font-size:14px;'></i>
                                    <p class='mb-0 text-success'>Delivered</p>
                                </div>
                                <p class='mb-0 fw-bold'><?php echo $deliver_avg ?>%</p>
                            </div>
                            <div class='w-100 border rounded-2'>
                                <div class='rounded-2 bg-success' style='height:5px;width:<?php echo $deliver_avg ?>%;'></div>
                            </div>
                        </div>
                        <div class='mb-3 border-bottom py-2'>
                            <div class='d-flex justify-content-between'>
                                <div class='d-flex align-items-center'>
                                    <i class="fa-brands fa-space-awesome me-1 text-warning" style='font-size:14px;'></i>
                                    <p class='mb-0 text-warning'>Packing</p>
                                </div>
                                <p class='mb-0 fw-bold'><?php echo $packing_avg ?>%</p>
                            </div>
                            <div class='w-100 border rounded-2'>
                                <div class='rounded-2 bg-warning' style='height:5px;width:<?php echo $packing_avg ?>%;'></div>
                            </div>
                        </div>
                        <div class='mb-3 border-bottom py-2'>
                            <div class='d-flex justify-content-between'>
                                <div class='d-flex align-items-center'>
                                    <i class="fa-solid fa-ship me-1 text-info" style='font-size:14px;'></i>
                                    <p class='mb-0 text-info'>Shipping</p>
                                </div>
                                <p class='mb-0 fw-bold'><?php echo $shipping_avg ?>%</p>
                            </div>
                            <div class='w-100 border rounded-2'>
                                <div class='rounded-2 bg-info' style='height:5px;width:<?php echo $shipping_avg ?>%;'></div>
                            </div>
                        </div>
                        <div class='mb-3 border-bottom py-2'>
                            <div class='d-flex justify-content-between'>
                                <div class='d-flex align-items-center'>
                                    <i class="fa-solid fa-truck-fast me-1 text-muted" style='font-size:14px;'></i>
                                    <p class='mb-0 text-muted'>Out for delivery</p>
                                </div>
                                <p class='mb-0 fw-bold'><?php echo $outdelivery_avg ?>%</p>
                            </div>
                            <div class='w-100 border rounded-2'>
                                <div class='rounded-2 bg-secondary' style='height:5px;width:<?php echo $outdelivery_avg ?>%;'></div>
                            </div>
                        </div>
                        <div class='mb-3 border-bottom py-2'>
                            <div class='d-flex justify-content-between'>
                                <div class='d-flex align-items-center'>
                                    <i class="fa-solid fa-ban me-1 text-danger" style='font-size:14px;'></i>
                                    <p class='mb-0 text-danger'>Cancelled</p>
                                </div>
                                <p class='mb-0 fw-bold'><?php echo $cancelled_avg ?>%</p>
                            </div>
                            <div class='w-100 border rounded-2'>
                                <div class='rounded-2 bg-danger' style='height:5px;width:<?php echo $cancelled_avg ?>%;'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
