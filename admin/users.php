<?php 
    include "header.php";
    include "config.php";
    if(!isset($_SESSION['role']) || $_SESSION['role'] === 'editor'){
        header("Location: {$host_name}/admin/not-found.php");
        exit();
    }
?>
<section class='admin-page position-relative'>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <?php include "sidebar.php" ?>
            </div>
            <div class="col-10 py-2">
                <h5 class='text-muted fw-bold fs-4 mb-0'>Users</h5>
                <p class='text-muted border-bottom pb-2'>Manage all registered accounts</p>
                <div class="users">
                    <div class="row g-0 p-0">
                        <?php 
                            include "config.php";
                            $query = "SELECT COUNT(*) AS total FROM users";
                            $result = mysqli_query($conn, $query);
                            $row = mysqli_fetch_assoc($result);
                            $query1 = "SELECT COUNT(*) AS total FROM users WHERE status = 'active'";
                            $result1 = mysqli_query($conn, $query1);
                            $row1 = mysqli_fetch_assoc($result1);
                            $query2 = "SELECT COUNT(*) AS total FROM users WHERE status = 'suspend'";
                            $result2 = mysqli_query($conn, $query2);
                            $row2 = mysqli_fetch_assoc($result2);
                            $query3 = "SELECT COUNT(*) AS total FROM users WHERE user_role = 'admin'";
                            $result3 = mysqli_query($conn, $query3);
                            $row3 = mysqli_fetch_assoc($result3);
                            $query5 = "SELECT COUNT(*) AS total FROM users WHERE user_role = 'super-admin'";
                            $result5 = mysqli_query($conn, $query5);
                            $row5 = mysqli_fetch_assoc($result5);
                            $total = $row3['total'] + $row5['total'];
                            $query4 = "SELECT COUNT(*) AS total FROM users WHERE user_role = 'editor'";
                            $result4 = mysqli_query($conn, $query4);
                            $row4 = mysqli_fetch_assoc($result4);
                        ?>
                        <div class="col-md-3 mt-4 mt-md-0 px-3">
                            <div class='rounded-3 bg-white p-3' style='box-shadow:0 0 10px 1px #efefef;'>
                                <p class='text-muted mb-2 text-uppercase' style='font-size:14px;'>Total users</p>
                                <h3 class='text-dark m-0 fs-3 fw-bold'><?php echo ($row['total'] < 9) ? str_pad($row['total'], 2,"0",STR_PAD_LEFT) : $row['total'] ?></h3>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4 mt-md-0 px-3">
                            <div class='rounded-3 bg-white p-3' style='box-shadow:0 0 10px 1px #efefef;'>
                                <p class='text-muted mb-2 text-uppercase' style='font-size:14px;'>Active users</p>
                                <h3 class='text-success m-0 fs-3 fw-bold'><?php echo ($row1['total'] < 9) ? str_pad($row1['total'], 2,"0",STR_PAD_LEFT) : $row1['total'] ?></h3>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4 mt-md-0 px-3">
                            <div class='rounded-3 bg-white p-3' style='box-shadow:0 0 10px 1px #efefef;'>
                                <p class='text-muted mb-2 text-uppercase' style='font-size:14px;'>Suspended</p>
                                <h3 class='text-danger m-0 fs-3 fw-bold'><?php echo ($row2['total'] < 9) ? str_pad($row2['total'], 2,"0",STR_PAD_LEFT) : $row2['total'] ?></h3>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4 mt-md-0 px-3">
                            <div class='rounded-3 bg-white p-3' style='box-shadow:0 0 10px 1px #efefef;'>
                                <p class='text-muted mb-2 text-uppercase' style='font-size:14px;'>Admin/Editors</p>
                                <h3 class='text-dark m-0 fs-3 fw-bold'><?php echo ($total < 9) ? str_pad($total, 2,"0",STR_PAD_LEFT) : $total ?>/<?php echo ($row4['total'] < 9) ? str_pad($row4['total'], 2,"0",STR_PAD_LEFT) : $row4['total'] ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 p-0">
                        <div class="col-12 mt-5 border p-0 rounded-3 border-bottom-0 table-responsive users-data">
                            <!-- <table class="table m-0">
                                <thead>
                                    <tr class='align-middle'>
                                        <th class='col-4 text-uppercase bg-secondary-subtle text-secondary' style='font-size:15px;'>User</th>
                                        <th class='col-2 text-uppercase bg-secondary-subtle text-secondary' style='font-size:15px;'>Role</th>
                                        <th class='col-2 text-uppercase bg-secondary-subtle text-secondary' style='font-size:15px;'>Status</th>
                                        <th class='col-2 text-uppercase bg-secondary-subtle text-secondary' style='font-size:15px;'>Joined</th>
                                        <th class='col-2 text-uppercase bg-secondary-subtle text-secondary' style='font-size:15px;'>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class='align-middle'>
                                        <th>
                                            <div class='d-flex'>
                                                <div style='height:45px;width:45px;border-radius:100%;text-align:center;line-height:45px;' class='border me-3 text-muted'>AR</div>
                                                <div>
                                                    <p class='text-capitalize m-0 fw-bold'>ali Raza</p>
                                                    <p class='m-0 text-muted fw-normal'>alirazamujahid102@gmail.com</p>
                                                </div>
                                            </div>
                                        </th>
                                        <td class='text-primary'>Admin</td>
                                        <td class='text-success'>Active</td>
                                        <td>12 May, 2025</td>
                                        <td>
                                            <i class='fa-solid fa-edit text-muted'></i>
                                            <i class='fa-solid fa-trash text-danger'></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
