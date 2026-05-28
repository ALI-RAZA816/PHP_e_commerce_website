<?php 
    session_start();
?>
<section class='admin-page position-relative'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 p-0 g-0 border-end">
                <?php include "sidebar.php" ?>
            </div>
            <div class="col-10 py-2" style='background-color:#FFF8F5;'>
                 <div>
                    <h2 class='fs-1 mb-0 pb-4' style='color:#064E38;'></i>Edit Product</h2>
                </div>
                <div class="edit-product">
                    <div class="add-product-page py-2 ps-md-5">
                        <?php
                            include "config.php";
                            $editid = $_GET['edit_id'];
                            $query = "SELECT * FROM products WHERE id = {$editid}";
                            $result = mysqli_query($conn, $query);
                            $row = mysqli_fetch_assoc($result);
                        ?>
                        <form action="">
                            <div class="row p-0 g-0">
                                <div class='col-md-4 mb-3 mb-md-0 px-4 py-3 rounded-3 h-100 p-0' style='background-color:#FAF2EE;'>
                                    <div class='mb-3 edit-product-images'>
                                        <p class='mb-2 fs-4 text' style='color:#064E38;'>Upload Image</p>
                                        <div class='mb-3 row product-images'>
                                            <label for="edit-image-1" class='image image1 col-6 edit-label-1 mb-2'>
                                                <input type="file" class='images' name='edit-image-1' id='edit-image-1' hidden>
                                                <input type="hidden" name='edit-id' value='<?php echo $editid ?>' hidden>
                                                <input type="text" class='images' name='old-image1' value='<?php echo $row['img1'] ?>' id='edit-image-1' hidden>
                                                <div class='edit-img-view1 img-view' style='background-image:url("images/product_img/<?php echo $row['img1'] ?>");'></div>
                                            </label>
                                            <label for="edit-image-2" class='image image2 col-6 edit-label-2 mb-2'>
                                                <input type="file" class='images' name='edit-image-2' id='edit-image-2' hidden>
                                                <input type="text" class='images' name='old-image2' value='<?php echo $row['img2'] ?>' id='edit-image-2' hidden>
                                                <div class='edit-img-view2 img-view' style='background-image:url("images/product_img/<?php echo $row['img2'] ?>");'></div>
                                            </label>
                                            <label for="edit-image-3" class='image image3 col-6 edit-label-3'>
                                                <input type="file" class='images' name='edit-image-3' id='edit-image-3' hidden>
                                                <input type="text" class='images' name='old-image3' value='<?php echo $row['img3'] ?>' id='edit-image-3' hidden>
                                                <div class='edit-img-view3 img-view' style='background-image:url("images/product_img/<?php echo $row['img3'] ?>");'></div>
                                            </label>
                                            <label for="edit-image-4" class='image image4 col-6 edit-label-4'>
                                                <input type="file" class='images' name='edit-image-4' id='edit-image-4' hidden>
                                                <input type="text" class='images' name='old-image4' value='<?php echo $row['img4'] ?>' id='edit-image-4' hidden>
                                                <div class='edit-img-view4 img-view' style='background-image:url("images/product_img/<?php echo $row['img4'] ?>");'></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 px-3">
                                    <div class='bg-white core-details rounded-3 p-4' style='border:1px solid #fcd5c5;'>
                                        <h3>Core Details</h3>
                                        <div class='mb-3 edit-product-title'>
                                            <p class='text-muted fs-6 my-2'>Product name</p>
                                            <input type="text" placeholder='Type here' name='edit-product-title' value='<?php echo $row['product_title'] ?>' class='form-control border-bottom border-top-0 border-end-0 border-start-0 edit-title rounded-0'>
                                        </div>
                                        <div class='edit-product-description mb-3'>
                                            <p class='text-muted fs-6 my-2'>Product description</p>
                                            <textarea style='background-color:#FAF2EE;' name="edit-product-description" placeholder='Description' class='form-control edit-description rounded-2'><?php echo $row['product_description'] ?></textarea>
                                        </div>
                                        <div class='product-categories row g-0 p-0'>
                                            <div class='col-md-4 pe-md-3 mb-3 mb-md-0'>
                                                <p class='text-muted my-2'>Product category</p>
                                                <select name="edit-product-category" class='form-select edit-category rounded-0 border-bottom border-top-0 border-end-0 border-start-0'>
                                                    <option selected disabled>Select Category</option>
                                                    <?php 
                                                        if($row['product_category'] === 'men'){
                                                            echo "<option selected value='men'>Men</option>
                                                            <option value='womens'>Womens</option>
                                                            <option value='kids'>Kids</option>";
                                                        }else if($row['product_category'] === 'womens'){
                                                             echo "<option value='men'>Men</option>
                                                            <option selected value='womens'>Womens</option>
                                                            <option value='kids'>Kids</option>";
                                                        }else if($row['product_category'] === 'kids'){
                                                              echo "<option value='men'>Men</option>
                                                            <option value='womens'>Womens</option>
                                                            <option selected value='kids'>Kids</option>";
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class='col-md-4 edit-sub-category pe-md-3 mb-3 mb-md-0'>
                                                <p class='text-muted my-2'>Sub category</p>
                                                <select name="edit-sub-category" id="" class='form-select edit-sub-category rounded-0 border-bottom border-top-0 border-end-0 border-start-0'>
                                                    <option selected disabled>Select Sub Category</option>
                                                    <?php 
                                                        if($row['sub_category'] === 'topwear'){
                                                            echo "<option selected value='topwear'>Topwear</option>
                                                                <option value='bottomwear'>Bottomwear</option>
                                                                <option value='winterwear'>Winterwear</option>";
                                                        }else if($row['sub_category'] === 'bottomwear'){
                                                            echo "<option  value='topwear'>Topwear</option>
                                                                <option selected value='bottomwear'>Bottomwear</option>
                                                                <option value='winterwear'>Winterwear</option>";
                                                        }else if ($row['sub_category'] === 'winterwear'){
                                                            echo "<option value='topwear'>Topwear</option>
                                                                <option value='bottomwear'>Bottomwear</option>
                                                                <option selected value='winterwear'>Winterwear</option>";
                                                        }
                                                    ?>
                                                    
                                                </select>
                                            </div>
                                            <div class='col-md-4 edit-price'>
                                                <p class='my-2 text-muted'>Price</p>
                                                <input type="number" class='border-bottom border-top-0 border-end-0 border-start-0' placeholder='25' name='edit-product-price' value='<?php echo $row['product_price'] ?>' class='form-control edit-price rounded-0'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='bg-white p-4 mt-3 rounded-3' style='border:1px solid #fcd5c5;'>
                                        <h3 style='color:#064E38;'>Sizing & Variants</h3>
                                        <div class="mt-4">
                                            <p class='text-muted mb-3'>Product Size</p>
                                            <?php 
                                                $sizes = explode(',',$row['product_sizes']);
                                                if(in_array('S',$sizes)){
                                                        echo "<div class='me-4 mb-3 form-check form-check-inline product-size position-relative'>
                                                                    <input class='form-check-input edit-size' name='size' type='checkbox' id='inlineCheckbox1' value='S' checked >
                                                                    <label class='form-check-label' for='inlineCheckbox1'>S</label>
                                                                </div>";
                                                    }else{
                                                        echo "<div class='me-4 mb-3 form-check form-check-inline product-size position-relative'>
                                                                    <input class='form-check-input edit-size' name='size' type='checkbox' id='inlineCheckbox1' value='S'>
                                                                    <label class='form-check-label' for='inlineCheckbox1'>S</label>
                                                                </div>";
                                                    }
                                                    if(in_array('M',$sizes)){
                                                        echo " <div class='me-4 mb-3 form-check form-check-inline product-size position-relative'>
                                                                    <input class='form-check-input edit-size' name='size' type='checkbox' id='inlineCheckbox2' value='M' checked >
                                                                    <label class='form-check-label' for='inlineCheckbox2'>M</label>
                                                                </div>";
                                                    }else{
                                                        echo " <div class='me-4 mb-3 form-check form-check-inline product-size position-relative'>
                                                                    <input class='form-check-input edit-size' name='size' type='checkbox' id='inlineCheckbox2' value='M'>
                                                                    <label class='form-check-label' for='inlineCheckbox2'>M</label>
                                                                </div>";
                                                    }
                                                    if(in_array('L',$sizes)){
                                                        echo "<div class='me-4 mb-3 form-check form-check-inline product-size position-relative'>
                                                                    <input class='form-check-input edit-size' name='size' type='checkbox' id='inlineCheckbox3' value='L' checked >
                                                                    <label class='form-check-label' for='inlineCheckbox3'>L</label>
                                                                </div>";
                                                    }else{
                                                        echo "<div class='me-4 mb-3 form-check form-check-inline product-size position-relative'>
                                                                    <input class='form-check-input edit-size' name='size' type='checkbox' id='inlineCheckbox3' value='L'>
                                                                    <label class='form-check-label' for='inlineCheckbox3'>L</label>
                                                                </div>";
                                                    }
                                                    if(in_array('XL',$sizes)){
                                                        echo "<div class='me-4 mb-3 form-check form-check-inline product-size position-relative'>
                                                                <input class='form-check-input edit-size' name='size' type='checkbox' id='inlineCheckbox4' value='XL' checked>
                                                                <label class='form-check-label' for='inlineCheckbox4'>XL</label>
                                                            </div>";
                                                    }else{
                                                        echo "<div class='me-4 mb-3 form-check form-check-inline product-size position-relative'>
                                                                <input class='form-check-input edit-size' name='size' type='checkbox' id='inlineCheckbox4' value='XL'>
                                                                <label class='form-check-label' for='inlineCheckbox4'>XL</label>
                                                            </div>";
                                                    }
                                                    if(in_array('XXL',$sizes)){
                                                        echo "<div class='me-4 mb-3 form-check form-check-inline product-size position-relative'>
                                                                <input class='form-check-input edit-size' name='size' type='checkbox' id='inlineCheckbox5' value='XXL' checked>
                                                                <label class='form-check-label' for='inlineCheckbox5'>XXL</label>
                                                            </div>";
                                                    }else{
                                                        echo "<div class='me-4 mb-3 form-check form-check-inline product-size position-relative'>
                                                                <input class='form-check-input edit-size' name='size' type='checkbox' id='inlineCheckbox5' value='XXL'>
                                                                <label class='form-check-label' for='inlineCheckbox5'>XXL</label>
                                                            </div>";
                                                    }
                                            ?>
                                        </div>
                                        <?php 
                                            if(empty($row['bestseller'])){
                                                echo " <div class='form-check mt-3'>
                                                        <input class='form-check-input bestsellers' name='edit-bestseller' type='checkbox' value='bestseller' id='checkDefault'>
                                                        <label class='form-check-label' for='checkDefault'>Add to bestseller</label>
                                                    </div>";
                                            }else{
                                                echo " <div class='form-check mt-3'>
                                                        <input class='form-check-input bestsellers' name='edit-bestseller' type='checkbox' value='bestseller' id='checkDefault' checked>
                                                        <label class='form-check-label' for='checkDefault'>Add to bestseller</label>
                                                    </div>";
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <button class="btn text-white rounded-0 mt-3 text-uppercase ms-auto d-block me-3 edit-item">Edit Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src='../js/edit-image.js'></script>
