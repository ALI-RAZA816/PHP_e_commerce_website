<?php include "header.php"?>
<section class='dashboard-page position-relative'>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <?php include "sidebar.php" ?>
            </div>
            <div class="col-10">
                <div class="row g-0 mt-4 p-0">
                    <div class="col-md-3 mt-4 mt-md-0 pe-3">
                        <div class='rounded-3 bg-white p-3' style='box-shadow:0 0 10px 1px #efefef;'>
                            <p class='text-muted mb-2 text-uppercase' style='font-size:15px;'><i class="fa-solid fa-money-bills fs-6 me-2"></i>Revenue</p>
                            <h3 class='text-success m-0 fs-3 fw-bold'>$84,200</h3>
                        </div>
                    </div>
                    <div class="col-md-3 mt-4 mt-md-0 px-3">
                        <div class='rounded-3 bg-white p-3' style='box-shadow:0 0 10px 1px #efefef;'>
                            <p class='text-muted mb-2 text-uppercase' style='font-size:15px;'><i class="fa-solid fa-cart-shopping fs-6 me-2"></i>Orders</p>
                            <h3 class='text-warning m-0 fs-3 fw-bold'>$84,200</h3>
                        </div>
                    </div>
                    <div class="col-md-3 mt-4 mt-md-0 px-3">
                        <div class='rounded-3 bg-white p-3' style='box-shadow:0 0 10px 1px #efefef;'>
                            <p class='text-muted mb-2 text-uppercase' style='font-size:15px;'><i class="fa-solid fa-user-group fs-6 me-2"></i>Customers</p>
                            <h3 class='text-primary m-0 fs-3 fw-bold'>$84,200</h3>
                        </div>
                    </div>
                    <div class="col-md-3 mt-4 mt-md-0 ps-3">
                        <div class='rounded-3 bg-white p-3' style='box-shadow:0 0 10px 1px #efefef;'>
                            <p class='text-muted mb-2 text-uppercase' style='font-size:15px;'><i class="fa-solid fa-ban fs-6 me-2"></i>Cancelled</p>
                            <h3 class='text-danger m-0 fs-3 fw-bold'>$84,200</h3>
                        </div>
                    </div>
                </div>
                <div class="row g-0 p-0">
                    <div class="col-8 mt-5">
                        <div class='pe-4'>
                        <?php
    
                            $dataPoints1 = array(
                                array("label"=> "2010", "y"=> 36.12),
                                array("label"=> "2011", "y"=> 34.87),
                                array("label"=> "2012", "y"=> 40.30),
                                array("label"=> "2013", "y"=> 35.30),
                                array("label"=> "2014", "y"=> 39.50),
                                array("label"=> "2015", "y"=> 50.82),
                                array("label"=> "2016", "y"=> 74.70)
                            );
                            $dataPoints2 = array(
                                array("label"=> "2010", "y"=> 64.61),
                                array("label"=> "2011", "y"=> 70.55),
                                array("label"=> "2012", "y"=> 72.50),
                                array("label"=> "2013", "y"=> 81.30),
                                array("label"=> "2014", "y"=> 63.60),
                                array("label"=> "2015", "y"=> 69.38),
                                array("label"=> "2016", "y"=> 98.70)
                            );
                        
                        ?>
                        <script>
                         window.onload = function () {
                            
                            var chart = new CanvasJS.Chart("chartContainer", {
                                animationEnabled: true,
                                theme: "light2",
                                title:{
                                    text: "Revenue vs Orders"
                                },
                                axisY:{
                                    includeZero: true
                                },
                                legend:{
                                    cursor: "pointer",
                                    verticalAlign: "center",
                                    horizontalAlign: "right",
                                    itemclick: toggleDataSeries
                                },
                                data: [{
                                    type: "column",
                                    name: "Revenue",
                                    indexLabel: "{y}",
                                    yValueFormatString: "$#0.##",
                                    showInLegend: true,
                                    dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
                                },{
                                    type: "column",
                                    name: "Orders",
                                    indexLabel: "{y}",
                                    yValueFormatString: "$#0.##",
                                    showInLegend: true,
                                    dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
                                }]
                            });
                            chart.render();
                            
                            function toggleDataSeries(e){
                                if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                                    e.dataSeries.visible = false;
                                }
                                else{
                                    e.dataSeries.visible = true;
                                }
                                chart.render();
                            }
                            
                            }
                        </script>
                        <div id="chartContainer" class='bg-white rounded-3 p-2 py-3' style="height: 370px; width: 100%;box-shadow:0 0 10px 1px #efefef;"></div>
                    </div>
                    </div>
                    <div class="col-4 mt-5 bg-white rounded-3 p-2 px-3" style="box-shadow:0 0 10px 1px #efefef;">
                        <p class='fw-bold'>Recent Orders</p>
                        <div>
                            <div class='d-flex justify-content-between border-bottom py-2'>
                                <div>
                                    <p class='mb-0 fw-bold' style='font-size:14px; line-height:15px;'>#ORD-8841</p>
                                    <p class='mb-0' style='font-size:14px; line-height:15px;'>SaraK</p>
                                </div>
                                <div>
                                    <p class='mb-0 fw-bold' style='font-size:14px; line-height:15px;'>$120</p>
                                    <p class='mb-0 text-success' style='font-size:14px; line-height:15px;'>Delivered</p>
                                </div>
                            </div>
                            <div class='d-flex justify-content-between border-bottom py-2'>
                                <div>
                                    <p class='mb-0 fw-bold' style='font-size:14px; line-height:15px;'>#ORD-8841</p>
                                    <p class='mb-0' style='font-size:14px; line-height:15px;'>SaraK</p>
                                </div>
                                <div>
                                    <p class='mb-0 fw-bold' style='font-size:14px; line-height:15px;'>$120</p>
                                    <p class='mb-0 text-success' style='font-size:14px; line-height:15px;'>Delivered</p>
                                </div>
                            </div>
                            <div class='d-flex justify-content-between border-bottom py-2'>
                                <div>
                                    <p class='mb-0 fw-bold' style='font-size:14px; line-height:15px;'>#ORD-8841</p>
                                    <p class='mb-0' style='font-size:14px; line-height:15px;'>SaraK</p>
                                </div>
                                <div>
                                    <p class='mb-0 fw-bold' style='font-size:14px; line-height:15px;'>$120</p>
                                    <p class='mb-0 text-success' style='font-size:14px; line-height:15px;'>Delivered</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 bg-white py-2 rounded-3 " style="box-shadow:0 0 10px 1px #efefef;">
                    <p class='fw-bold mb-0'>Order Status</p>
                    <div class='col-12' >
                        <div class='mb-3 border-bottom py-2'>
                            <div class='d-flex justify-content-between'>
                                <div class='d-flex align-items-center'>
                                    <i class="fa-solid fa-truck me-1 text-muted" style='font-size:14px;'></i>
                                    <p class='mb-0 text-muted'>Delivery</p>
                                </div>
                                <p class='mb-0 fw-bold'>68%</p>
                            </div>
                            <div class='rounded-2 bg-success' style='height:5px;width:100%;'></div>
                        </div>
                        <div class='mb-3 border-bottom py-2'>
                            <div class='d-flex justify-content-between'>
                                <div class='d-flex align-items-center'>
                                    <i class="fa-solid fa-truck me-1 text-muted" style='font-size:14px;'></i>
                                    <p class='mb-0 text-muted'>Delivery</p>
                                </div>
                                <p class='mb-0 fw-bold'>68%</p>
                            </div>
                            <div class='rounded-2 bg-success' style='height:5px;width:100%;'></div>
                        </div>
                        <div class='mb-3 border-bottom py-2'>
                            <div class='d-flex justify-content-between'>
                                <div class='d-flex align-items-center'>
                                    <i class="fa-solid fa-truck me-1 text-muted" style='font-size:14px;'></i>
                                    <p class='mb-0 text-muted'>Delivery</p>
                                </div>
                                <p class='mb-0 fw-bold'>68%</p>
                            </div>
                            <div class='rounded-2 bg-success' style='height:5px;width:100%;'></div>
                        </div>
                        <div class='mb-3 border-bottom py-2'>
                            <div class='d-flex justify-content-between'>
                                <div class='d-flex align-items-center'>
                                    <i class="fa-solid fa-truck me-1 text-muted" style='font-size:14px;'></i>
                                    <p class='mb-0 text-muted'>Delivery</p>
                                </div>
                                <p class='mb-0 fw-bold'>68%</p>
                            </div>
                            <div class='rounded-2 bg-success' style='height:5px;width:100%;'></div>
                        </div>
                        <div class='mb-3 border-bottom py-2'>
                            <div class='d-flex justify-content-between'>
                                <div class='d-flex align-items-center'>
                                    <i class="fa-solid fa-truck me-1 text-muted" style='font-size:14px;'></i>
                                    <p class='mb-0 text-muted'>Delivery</p>
                                </div>
                                <p class='mb-0 fw-bold'>68%</p>
                            </div>
                            <div class='rounded-2 bg-success' style='height:5px;width:100%;'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
