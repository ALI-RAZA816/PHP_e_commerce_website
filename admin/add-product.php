<div class="add-product-page py-2 ps-md-5">
    <form action="">
        <div class='mb-3 product-images'>
            <p class='text-muted mb-2 text'>Upload Image</p>
            <label for="image-1" class='image image1 border me-2'>
                <input type="file" name='image1' id='image-1' hidden>
                <div class='img-view1'>
                    <i class="fa-regular fa-image image-icon image-icon1 text-muted"></i>
                </div>
            </label>
            <label for="image-2" class='image image2 border me-2'>
                <input type="file" name='image2' id='image-2' hidden>
                <div class='img-view2'>
                    <i class="fa-regular fa-image image-icon image-icon2 text-muted"></i>
                </div>
            </label>
            <label for="image-3" class='image image3 border me-2'>
                <input type="file" name='image3' id='image-3' hidden>
                <div class='img-view3'>
                    <i class="fa-regular fa-image image-icon image-icon3 text-muted"></i>
                </div>
            </label>
            <label for="image-4" class='image image4 border'>
                <input type="file" name='image4' id='image-4' hidden>
                <div class='img-view4'>
                    <i class="fa-regular fa-image image-icon image-icon4 text-muted"></i>
                </div>
            </label>
        </div>
        <div class='mb-3 product-title'>
            <p class='text-muted fs-6 mb-1'>Product name</p>
            <input type="text" placeholder='Type here' name='product_title' class='form-control rounded-0 title'>
        </div>
        <div class='product-description mb-3'>
            <p class='text-muted fs-6 mb-1'>Product description</p>
            <textarea name="product_description" placeholder='Description' class='form-control rounded-0 description'></textarea>
        </div>
        <div class='product-categories row g-0 p-0'>
            <div class='col-md-4 pe-md-3 mb-3 mb-md-0'>
                <p class='text-muted mb-1'>Product category</p>
                <select name="product_category" class='form-select rounded-0 category'>
                    <option selected disabled>Select Category</option>
                    <option value="men">Men</option>
                    <option value="womens">Womens</option>
                    <option value="kids">Kids</option>
                </select>
            </div>
            <div class='col-md-4 pe-md-3 mb-3 mb-md-0'>
                <p class='text-muted mb-1'>Sub category</p>
                <select name="sub_category" id="" class='form-select rounded-0 sub_category'>
                    <option selected disabled>Select Sub Category</option>
                    <option value="topwear">Topwear</option>
                    <option value="bottomwear">Bottomwear</option>
                    <option value="winterwear">Winterwear</option>
                </select>
            </div>
            <div class='col-md-4'>
                <p class='mb-1 text-muted'>Price</p>
                <input type="number" placeholder='25' name='product_price' class='form-control price rounded-0'>
            </div>
        </div>
        <div class="product-size mt-4">
            <p class='text-muted mb-3'>Product Size</p>
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
        <div class="form-check mt-3">
            <input class="form-check-input bestsellers" name='bestseller' type="checkbox" value="bestseller" id="checkDefault">
            <label class="form-check-label" for="checkDefault">Add to bestseller</label>
        </div>
        <button class="btn bg-dark text-white rounded-0 mt-3 text-uppercase add-item">Add Item</button>
    </form>
</div>
<script src='../js/image.js'></script>