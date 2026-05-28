<?php 
    include "config.php";
    if(!isset($_SESSION['role']) || $_SESSION['role'] === 'reader'){
        header("Location: {$host_name}/admin/not-found.php");
        exit();
    }
    else if(  $_SESSION['role'] === 'admin'){
        header("Location: {$host_name}/admin/orders.php");
        exit();
    }
    else if( $_SESSION['role'] === 'editor'){
        header("Location: {$host_name}/admin/list-items.php");
        exit();
    }
?>
<section style='background-color:#FFF8F5;'><div class="add-product-page py-3 px-3">
    <div>
        <h2 class='fs-1 mb-0 pb-4' style='color:#064E38;'></i>Add New Product</h2>
    </div>
    <form action="" class='product-details'>
        <div class="row p-0 g-0">
            <div class="col-md-4 mb-3 mb-md-0 px-4 py-3 rounded-3 h-100 p-0" style='background-color:#FAF2EE;'>
                <p class='mb-2 fs-3' style='color:#064E38;'>Product Imaginary</p>
                <div class='mb-3 row product-images'>
                    <label for="image-1" class='image col-6 mb-3 image1'>
                        <input type="file" name='image1' id='image-1' hidden>
                        <div class='img-view1'>
                            <i class="fa-regular fa-image image-icon image-icon1 text-muted"></i>
                        </div>
                    </label>
                    <label for="image-2" class='image col-6 image2 mb-3 '>
                        <input type="file" name='image2' id='image-2' hidden>
                        <div class='img-view2'>
                            <i class="fa-regular fa-image image-icon image-icon2 text-muted"></i>
                        </div>
                    </label>
                    <label for="image-3" class='image col-6 image3'>
                        <input type="file" name='image3' id='image-3' hidden>
                        <div class='img-view3'>
                            <i class="fa-regular fa-image image-icon image-icon3 text-muted"></i>
                        </div>
                    </label>
                    <label for="image-4" class='image col-6 image4'>
                        <input type="file" name='image4' id='image-4' hidden>
                        <div class='img-view4'>
                            <i class="fa-regular fa-image image-icon image-icon4 text-muted"></i>
                        </div>
                    </label>
                </div>
            </div>
            <div class="col-md-8 px-md-4">
                <div class='bg-white core-details rounded-3 p-4' style='border:1px solid #fcd5c5;'>
                    <h3>Core Details</h3>
                    <div class='mb-4 product-title'>
                        <p class='text-muted my-3'>Product name</p>
                        <input type="text" placeholder='Type here' name='product_title' class='form-control border-bottom border-top-0 border-end-0 border-start-0  rounded-0 title'>
                    </div>
                    <div class='product-description mb-3'>
                        <p class='text-muted my-3'>Product description</p>
                        <textarea style='background-color:#FAF2EE;' name="product_description" placeholder='Description' class='form-control rounded-3 description'></textarea>
                    </div>
                    <div class='product-categories row g-0 p-0'>
                        <div class='col-md-4 pe-md-3 mb-3 mb-md-0'>
                            <p class='text-muted my-3'>Product category</p>
                            <select name="product_category" class='form-select border-bottom border-top-0 border-end-0 border-start-0 rounded-0 category'>
                                <option selected disabled>Select Category</option>
                                <option value="men">Men</option>
                                <option value="womens">Womens</option>
                                <option value="kids">Kids</option>
                            </select>
                        </div>
                        <div class='col-md-4 pe-md-3 mb-3 mb-md-0'>
                            <p class='text-muted my-3'>Sub category</p>
                            <select name="sub_category" id="" class='form-select border-bottom border-top-0 border-end-0 border-start-0 rounded-0 sub_category'>
                                <option selected disabled>Select Sub Category</option>
                                <option value="topwear">Topwear</option>
                                <option value="bottomwear">Bottomwear</option>
                                <option value="winterwear">Winterwear</option>
                            </select>
                        </div>
                        <div class='col-md-4'>
                            <p class='my-3 text-muted'>Price</p>
                            <input type="number" placeholder='25' name='product_price' class='form-control border-bottom border-top-0 border-end-0 border-start-0 price rounded-0'>
                        </div>
                    </div>
                </div>
                <div class='bg-white sizing mt-4 rounded-3 p-4' style='border:1px solid #fcd5c5;'>
                    <h3>Sizing & Variants</h3>
                    <div class="product-size mt-4">
                        <p class='text-muted my-3'>Product Size</p>
                        <div class="me-4 mb-3 form-check form-check-inline product-size position-relative">
                            <input class="form-check-input size-input size1" name='size' type="checkbox" id="inlineCheckbox1" value="S">
                            <label class="form-check-label" for="inlineCheckbox1">S</label>
                        </div>
                        <div class="me-4 mb-3 form-check form-check-inline product-size position-relative">
                            <input class="form-check-input size-input size2" name='size' type="checkbox" id="inlineCheckbox2" value="M">
                            <label class="form-check-label" for="inlineCheckbox2">M</label>
                        </div>
                        <div class="me-4 mb-3 form-check form-check-inline product-size position-relative">
                            <input class="form-check-input size-input size3" name='size' type="checkbox" id="inlineCheckbox3" value="L">
                            <label class="form-check-label" for="inlineCheckbox3">L</label>
                        </div>
                        <div class="me-4 mb-3 form-check form-check-inline product-size position-relative">
                            <input class="form-check-input size-input size4" name='size' type="checkbox" id="inlineCheckbox4" value="XL">
                            <label class="form-check-label" for="inlineCheckbox4">XL</label>
                        </div>
                        <div class="me-4 mb-3 form-check form-check-inline product-size position-relative">
                            <input class="form-check-input size-input size5" name='size' type="checkbox" id="inlineCheckbox5" value="XXL">
                            <label class="form-check-label" for="inlineCheckbox5">XXL</label>
                        </div>
                    </div>
                    <div class="form-check bestseller-check  my-3">
                        <input class="form-check-input bestsellers" name='bestseller' type="checkbox" value="bestseller" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">Add to bestseller</label>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn text-white rounded-2 d-block ms-auto mt-3 me-3 text-uppercase add-item">Add Product</button>
    </form>
</div>
</section>

<script src='../js/image.js'></script>