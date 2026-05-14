<?php include "header.php"?>
<section class='admin-page position-relative'>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <?php include "sidebar.php" ?>
            </div>
            <div class="col-10 py-2">
                <h5 class='text-muted  fw-bold fs-4 mb-0'>Edit user</h5>
                <p class='text-muted border-bottom pb-2'>Update profile, role, and permissions</p>
                    <div class="row g-0 p-0 edit-user-page">
                        <div class="col-12 d-flex align-items-center profile py-2 border-bottom pb-3">
                            <div class="user-img text-muted fw-bold bg-secondary-subtle me-3">AR</div>
                            <div class="detail">
                                <p class='mb-0 fw-bold text-dark name'>Ali Raza Mujahid</p>
                                <p class='mb-0 text-muted gmail'>alirazamujahid102@gmail.com</p>
                                <div>
                                    <span class='admin d-inline-block'>Admin</span>
                                    <span class='active-status d-inline-block'>Active</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="personal-information rounded-2 pt-3 border mt-5">
                        <p class='text-muted text-capitalize fw-bold ms-4'>Personal information</p>
                        <?php 
                            include "config.php";
                            $query = "SELECT * FROM users WHERE id = {$_GET['editId']}";
                            $result = mysqli_query($conn, $query);
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <form action="" class='row px-4 pb-3 g-0 form '>
                            <div class="col-6 pe-md-3">
                                <label for="" class='form-label'>Name</label>
                                <input type="text" class='form-control rounded-0' name='edit-user-name' value='<?php echo ucwords($row['name']) ?>' placeholder='Name'>
                                <input type="hidden" class='form-control rounded-0' name='edit-user-id' value='<?php echo $_GET['editId'] ?>'>
                            </div>
                            <div class="col-6">
                                <label for="" class='form-label'>Email</label>
                                    <input type="text" class='form-control rounded-0' name='edit-user-email' value='<?php echo $row['email'] ?>' placeholder = 'Email'>
                            </div>
                            <div class="col-12 mt-4 roles">
                                <p class='text-muted text-capitalize fw-bold'>Role</p>
                                <div class='row p-0 g-0'>
                                    <?php 
                                        if($row['user_role'] === 'super-admin'){
                                            echo "<div class='col-3'>
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
                                              echo "<div class='col-3'>
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
                                            echo "<div class='col-3'>
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
                                              echo "<div class='col-3'>
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
                                            echo "<div class='col-3'>
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
                                             echo "<div class='col-3'>
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
                                            echo"<div class='col-3'>
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
                                             echo"<div class='col-3'>
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
                                            echo "<div class='col-4'>
                                                    <label for='' style='width:100%;' class='p-2'>
                                                        <input type='radio' name='status' class='active-selection' value='active' id='active' hidden checked>
                                                        <label for='active' class='actives text-center border rounded p-3 ' style='width:100%;'>
                                                            <i class='fa-regular fa-circle-check mb-2'></i>
                                                            <p class='mb-0'>Active</p>
                                                        </label>
                                                    </label>
                                                </div>";
                                        }else{
                                             echo "<div class='col-4'>
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
                                            echo " <div class='col-4'>
                                                        <label for='' style='width:100%;' class='p-2'>
                                                            <input type='radio' name='status' class='inactive-selection' value='inactive' id='inactive' hidden checked>
                                                            <label for='inactive' class='inactive text-center border rounded p-3 ' style='width:100%;'>
                                                                <i class='fa-solid fa-circle-minus mb-2'></i>
                                                                <p class='mb-0'>Inactive</p>
                                                            </label>
                                                        </label>
                                                    </div>";
                                        }else{
                                             echo "<div class='col-4'>
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
                                            echo "<div class='col-4'>
                                                    <label for='' style='width:100%;' class='p-2'>
                                                        <input type='radio' name='status' class='suspend-selection' value='suspend' id='suspend' hidden checked>
                                                        <label for='suspend' class='suspend text-center border rounded p-3 ' style='width:100%;cursor:pointer;'>
                                                            <i class='fa-solid fa-ban mb-2'></i>
                                                            <p class='mb-0'>Suspended</p>
                                                        </label>
                                                    </label>
                                                </div>";
                                        }else{
                                             echo "<div class='col-4'>
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