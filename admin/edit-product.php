<?php include "header.php"?>
<section class='admin-page position-relative'>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <?php include "sidebar.php" ?>
            </div>
            <div class="col-10 py-2">
                <p class='text-muted'>Edit Product</p>
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
                            <div class='mb-3 edit-product-images'>
                                <p class='text-muted mb-2 text'>Upload Image</p>
                                <label for="edit-image-1" class='image edit-label-1 border me-2'>
                                    <input type="file" class='images' name='edit-image-1' id='edit-image-1' hidden>
                                    <input type="hidden" name='edit-id' value='<?php echo $editid ?>' hidden>
                                    <input type="text" class='images' name='old-image1' value='<?php echo $row['img1'] ?>' id='edit-image-1' hidden>
                                    <div class='edit-img-view1 img-view' style='background-image:url("images/product_img/<?php echo $row['img1'] ?>");'></div>
                                </label>
                                <label for="edit-image-2" class='image edit-label-2 border me-2'>
                                    <input type="file" class='images' name='edit-image-2' id='edit-image-2' hidden>
                                    <input type="text" class='images' name='old-image2' value='<?php echo $row['img2'] ?>' id='edit-image-2' hidden>
                                    <div class='edit-img-view2 img-view' style='background-image:url("images/product_img/<?php echo $row['img2'] ?>");'></div>
                                </label>
                                <label for="edit-image-3" class='image edit-label-3 border me-2'>
                                    <input type="file" class='images' name='edit-image-3' id='edit-image-3' hidden>
                                    <input type="text" class='images' name='old-image3' value='<?php echo $row['img3'] ?>' id='edit-image-3' hidden>
                                    <div class='edit-img-view3 img-view' style='background-image:url("images/product_img/<?php echo $row['img3'] ?>");'></div>
                                </label>
                                <label for="edit-image-4" class='image edit-label-4 border'>
                                    <input type="file" class='images' name='edit-image-4' id='edit-image-4' hidden>
                                    <input type="text" class='images' name='old-image4' value='<?php echo $row['img4'] ?>' id='edit-image-4' hidden>
                                    <div class='edit-img-view4 img-view' style='background-image:url("images/product_img/<?php echo $row['img4'] ?>");'></div>
                                </label>
                            </div>
                            <div class='mb-3 edit-product-title'>
                                <p class='text-muted fs-6 mb-1'>Product name</p>
                                <input type="text" placeholder='Type here' name='edit-product-title' value='<?php echo $row['product_title'] ?>' class='form-control edit-title rounded-0'>
                            </div>
                            <div class='edit-product-description mb-3'>
                                <p class='text-muted fs-6 mb-1'>Product description</p>
                                <textarea name="edit-product-description" placeholder='Description' class='form-control edit-description rounded-0'><?php echo $row['product_description'] ?></textarea>
                            </div>
                            <div class='product-categories row g-0 p-0'>
                                <div class='col-md-4 pe-md-3 mb-3 mb-md-0'>
                                    <p class='text-muted mb-1'>Product category</p>
                                    <select name="edit-product-category" class='form-select edit-category rounded-0'>
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
                                <div class='col-md-4 pe-md-3 mb-3 mb-md-0'>
                                    <p class='text-muted mb-1'>Sub category</p>
                                    <select name="edit-sub-category" id="" class='form-select edit-sub-category rounded-0'>
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
                                <div class='col-md-4'>
                                    <p class='mb-1 text-muted'>Price</p>
                                    <input type="number" placeholder='25' name='edit-product-price' value='<?php echo $row['product_price'] ?>' class='form-control edit-price rounded-0'>
                                </div>
                            </div>
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
                            <button class="btn bg-dark text-white rounded-0 mt-3 text-uppercase edit-item">Edit Item</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src='../js/edit-image.js'></script>
