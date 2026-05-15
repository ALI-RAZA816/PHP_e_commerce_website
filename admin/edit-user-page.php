<?php include "header.php"?>
<section class='admin-page position-relative'>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <?php include "sidebar.php" ?>
            </div>
            <div class="col-10 py-2">
                  <?php 
                            include "config.php";
                            $query = "SELECT * FROM users WHERE id = {$_GET['editId']}";
                            $result = mysqli_query($conn, $query);
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)) {
                                    $bgcolor='';
                                    $color='';
                                    $role_bg_color='';
                                    $role_color='';
                                    if($row['user_role'] === 'super-admin'){
                                        $role_color = "rgb(255, 157, 35)";
                                        $role_bg_color="rgba(255, 157, 35,.20)";
                                    }else if($row['user_role'] === 'admin'){
                                        $role_color = "rgb(31, 111, 95)";
                                        $role_bg_color = "rgba(31, 111, 95,.30)";
                                    }else if($row['user_role'] === 'editor') {
                                        $role_color = "rgb(23, 12, 121)";
                                        $role_bg_color = "rgba(23, 12, 121,.20)";
                                    }else if ($row['user_role'] === 'reader') {
                                        $role_color = "rgb(138, 95, 65)";
                                        $role_bg_color = "rgba(138, 95, 65,.20)";
                                    }
                                    if($row['status'] === 'active'){
                                        $color = '#008000';
                                        $bgcolor = 'rgba(0, 128, 0,.25)';
                                    }else if($row['status'] === 'inactive'){
                                        $color = "#2C2C2C";
                                        $bgcolor = "rgba(44, 44, 44,.25)";
                                    }else if($row['status'] === 'suspend'){
                                        $color ='#C00707;';
                                        $bgcolor ='rgba(191, 8, 8,.25)';
                                    }
                        ?>
                <h5 class='text-muted  fw-bold fs-4 mb-0'>Edit user</h5>
                <p class='text-muted border-bottom pb-2'>Update profile, role, and permissions</p>
                    <div class="row g-0 p-0 edit-user-page">
                        <div class="col-12 d-flex align-items-center profile py-2 border-bottom pb-3">
                            <div class="user-img text-muted fw-bold me-3" style='color:<?php echo $role_color ?>;background-color:<?php echo $role_bg_color ?>;'>AR</div>
                            <div class="detail">
                                <p class='mb-0 fw-bold text-dark name'><?php echo $row['name'] ?></p>
                                <p class='mb-0 text-muted gmail'><?php echo $row['email'] ?></p>
                                <div>
                                    <span class='admin d-inline-block text-capitalize' style='color:<?php echo $role_color ?>;background-color:<?php echo $role_bg_color?>;'><?php echo $row['user_role'] ?></span>
                                    <span class='active-status d-inline-block text-capitalize' style='color:<?php echo $color ?>;background-color:<?php echo $bgcolor?>;'><?php echo $row['status'] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="personal-information rounded-2 pt-3 border mt-5">
                        <p class='text-muted text-capitalize fw-bold ms-4'>Personal information</p>
                        <form action="" class='row px-4 pb-3 g-0 form '>
                            <div class="col-md-6 pe-md-3">
                                <label for="" class='form-label'>Name</label>
                                <input type="text" class='form-control rounded-0' name='edit-user-name' value='<?php echo ucwords($row['name']) ?>' placeholder='Name'>
                                <input type="hidden" class='form-control rounded-0' name='edit-user-id' value='<?php echo $_GET['editId'] ?>'>
                            </div>
                            <div class="col-md-6">
                                <label for="" class='form-label'>Email</label>
                                <input type="text" class='form-control rounded-0' name='edit-user-email' value='<?php echo $row['email'] ?>' placeholder = 'Email'>
                            </div>
                            <div class="col-12 mt-4 roles">
                                <p class='text-muted text-capitalize fw-bold'>Role</p>
                                <div class='row p-0 g-0'>
                                    <?php 
                                        if($row['user_role'] === 'super-admin'){
                                            echo "<div class='col-sm-6 col-md-4 col-lg-3'>
                                                    <label for='' style='width:100%;' class='p-2'>
                                                        <input type='radio' name='role' class='role-selection' value='super-admin' id='super-admin' hidden checked>
                                                        <label for='super-admin' class='supers-admin border rounded p-3 pe-5' style='width:100%;'>
                                                            <i class='fa-solid fa-crown mb-3' style='color:#DAA464;'></i>
                                                            <p class='mb-0 fw-bold'>Super Admin</p>
                                                            <p class='mb-0'>Full Platform Access</p>
                                                        </label>
                                                    </label>
                                                </div>";
                                        }else{
                                              echo "<div class='col-sm-6 col-md-4 col-lg-3'>
                                                    <label for='' style='width:100%;' class='p-2'>
                                                        <input type='radio' name='role' class='role-selection' value='super-admin' id='super-admin' hidden>
                                                        <label for='super-admin' class='supers-admin border rounded p-3 pe-5' style='width:100%;'>
                                                            <i class='fa-solid fa-crown mb-3' style='color:#DAA464;'></i>
                                                            <p class='mb-0 fw-bold'>Super Admin</p>
                                                            <p class='mb-0'>Full Platform Access</p>
                                                        </label>
                                                    </label>
                                                </div>";
                                        }

                                        if($row['user_role'] === 'admin'){
                                            echo "<div class='col-sm-6 col-md-4 col-lg-3'>
                                                    <label for='' style='width:100%;' class='p-2'>
                                                        <input type='radio' name='role' class='role-selection' value='admin' id='admin' hidden checked>
                                                        <label for='admin' class='supers-admin border rounded p-3 pe-5' style='width:100%;'>
                                                            <i class='fa-solid fa-unlock mb-3' style='color:#170C79;'></i>
                                                            <p class='mb-0 fw-bold'>Admin</p>
                                                            <p class='mb-0'>Manage users, content & settings</p>
                                                        </label>
                                                    </label>
                                                </div>";
                                        }else{
                                              echo "<div class='col-sm-6 col-md-4 col-lg-3'>
                                                    <label for='' style='width:100%;' class='p-2'>
                                                        <input type='radio' name='role' class='role-selection' value='admin' id='admin' hidden>
                                                        <label for='admin' class='supers-admin border rounded p-3 pe-5' style='width:100%;'>
                                                            <i class='fa-solid fa-unlock mb-3' style='color:#170C79;'></i>
                                                            <p class='mb-0 fw-bold'>Admin</p>
                                                            <p class='mb-0'>Manage users, content & settings</p>
                                                        </label>
                                                    </label>
                                                </div>";
                                        }

                                        if($row['user_role'] === 'editor'){
                                            echo "<div class='col-sm-6 col-md-4 col-lg-3'>
                                                    <label for='' style='width:100%;' class='p-2'>
                                                        <input type='radio' name='role' class='role-selection' value='editor' id='editor' hidden checked>
                                                        <label for='editor' class='supers-admin border rounded p-3 pe-5' style='width:100%;'>
                                                            <i class='fa-solid fa-edit mb-3' style='color:#1F6F5F;'></i>
                                                            <p class='mb-0 fw-bold'>Editor</p>
                                                            <p class='mb-0'>Publish & manage content</p>
                                                        </label>
                                                    </label>
                                                </div>";
                                        }else{
                                             echo "<div class='col-sm-6 col-md-4 col-lg-3'>
                                                        <label for='' style='width:100%;' class='p-2'>
                                                            <input type='radio' name='role' class='role-selection' value='editor' id='editor' hidden >
                                                            <label for='editor' class='supers-admin border rounded p-3 pe-5' style='width:100%;'>
                                                                <i class='fa-solid fa-edit mb-3' style='color:#1F6F5F;'></i>
                                                                <p class='mb-0 fw-bold'>Editor</p>
                                                                <p class='mb-0'>Publish & manage content</p>
                                                            </label>
                                                        </label>
                                                    </div>";
                                        }

                                        if($row['user_role'] === 'reader'){
                                            echo"<div class='col-sm-6 col-md-4 col-lg-3'>
                                                    <label for='' style='width:100%;' class='p-2'>
                                                        <input type='radio' name='role' class='role-selection' value='reader' id='reader' hidden checked>
                                                        <label for='reader' class='supers-admin border rounded p-3 pe-5' style='width:100%;'>
                                                            <i class='fa-solid fa-book mb-3' style='color:#8A5F41;'></i>
                                                            <p class='mb-0 fw-bold'>Reader</p>
                                                            <p class='mb-0'>Read only access</p>
                                                        </label>
                                                    </label>
                                                </div>";
                                        }else{
                                             echo"<div class='col-sm-6 col-md-4 col-lg-3'>
                                                    <label for='' style='width:100%;' class='p-2'>
                                                        <input type='radio' name='role' class='role-selection' value='reader' id='reader' hidden>
                                                        <label for='reader' class='supers-admin border rounded p-3 pe-5' style='width:100%;'>
                                                            <i class='fa-solid fa-book mb-3' style='color:#8A5F41;'></i>
                                                            <p class='mb-0 fw-bold'>Reader</p>
                                                            <p class='mb-0'>Read only access</p>
                                                        </label>
                                                    </label>
                                                </div>";
                                        }
                                    
                                    ?>
                                </div>
                            </div>
                            <div class="col-12 mt-4 status">
                                <p class='text-muted text-capitalize fw-bold'>Status</p>
                                <div class='row p-0 g-0'>
                                    <?php 
                                        if($row['status'] === 'active'){
                                            echo "<div class='col-md-4'>
                                                    <label for='' style='width:100%;' class='p-2'>
                                                        <input type='radio' name='status' class='active-selection' value='active' id='active' hidden checked>
                                                        <label for='active' class='actives text-center border rounded p-3 ' style='width:100%;'>
                                                            <i class='fa-regular fa-circle-check mb-2'></i>
                                                            <p class='mb-0'>Active</p>
                                                        </label>
                                                    </label>
                                                </div>";
                                        }else{
                                             echo "<div class='col-md-4'>
                                                    <label for='' style='width:100%;' class='p-2'>
                                                        <input type='radio' name='status' class='active-selection' value='active' id='active' hidden>
                                                        <label for='active' class='actives text-center border rounded p-3 ' style='width:100%;'>
                                                            <i class='fa-regular fa-circle-check mb-2'></i>
                                                            <p class='mb-0'>Active</p>
                                                        </label>
                                                    </label>
                                                </div>";
                                        }
                                        if($row['status'] === 'inactive'){
                                            echo " <div class='col-md-4'>
                                                        <label for='' style='width:100%;' class='p-2'>
                                                            <input type='radio' name='status' class='inactive-selection' value='inactive' id='inactive' hidden checked>
                                                            <label for='inactive' class='inactive text-center border rounded p-3 ' style='width:100%;'>
                                                                <i class='fa-solid fa-circle-minus mb-2'></i>
                                                                <p class='mb-0'>Inactive</p>
                                                            </label>
                                                        </label>
                                                    </div>";
                                        }else{
                                             echo "<div class='col-md-4'>
                                                        <label for='' style='width:100%;' class='p-2'>
                                                            <input type='radio' name='status' class='inactive-selection' value='inactive' id='inactive' hidden>
                                                            <label for='inactive' class='inactive text-center border rounded p-3 ' style='width:100%;'>
                                                                <i class='fa-solid fa-circle-minus mb-2'></i>
                                                                <p class='mb-0'>Inactive</p>
                                                            </label>
                                                        </label>
                                                    </div>";
                                        }
                                        if($row['status'] === 'suspend'){
                                            echo "<div class='col-md-4'>
                                                    <label for='' style='width:100%;' class='p-2'>
                                                        <input type='radio' name='status' class='suspend-selection' value='suspend' id='suspend' hidden checked>
                                                        <label for='suspend' class='suspend text-center border rounded p-3 ' style='width:100%;cursor:pointer;'>
                                                            <i class='fa-solid fa-ban mb-2'></i>
                                                            <p class='mb-0'>Suspended</p>
                                                        </label>
                                                    </label>
                                                </div>";
                                        }else{
                                             echo "<div class='col-md-4'>
                                                    <label for='' style='width:100%;' class='p-2'>
                                                        <input type='radio' name='status' class='suspend-selection' value='suspend' id='suspend' hidden>
                                                        <label for='suspend' class='suspend text-center border rounded p-3 ' style='width:100%;cursor:pointer;'>
                                                            <i class='fa-solid fa-ban mb-2'></i>
                                                            <p class='mb-0'>Suspended</p>
                                                        </label>
                                                    </label>
                                                </div>";
                                        }
                                    ?>
                                </div>
                            </div>
                            <button type='button' class='btn btn-outline-success ms-2 mt-2 edit-user-button'>Save Changes</button>
                        </form>
                        <?php 
                                }
                            }
                        ?>
                    </div>
            </div>
        </div>
    </div>
</section>