<?php include "header.php" ?>
<section class='collection-page'>
    <div class="container p-0">
        <div class="row">
            <div data-aos="fade-left" class="col-md-12 rounded-3">
                <div class='d-flex flex-column flex-md-row  bg-white collection-header my-5 justify-content-between align-items-center'>
                    <h1 class='text-uppercase mb-0 text-nowrap'>All <span class='fw-bold'>Collections</span><i class="fa-solid fa-minus"></i></h1>
                    <div class='d-flex flex-column flex-md-row '>
                        <div class='me-md-3 mb-3 mb-md-0 search-box d-flex border-bottom justify-content-between border-top-0 border-end-0 border-start-0 align-items-center'>
                            <input type="text" class='form-control border-0 mb-0 rounded-0 search' placeholder='Search'>
                            <i class='fa-solid fa-magnifying-glass text-muted'></i>
                        </div>
                        <select class="form-select border-bottom border-top-0 border-end-0 border-start-0 sorting" aria-label="Default select example">
                            <option value = 'relevant'selected>Sort by: Relevant</option>
                            <option value="low to high">Sort by: Low to High</option>
                            <option value="high to low">Sort by: High to Low</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div data-aos="fade-right" class="col-md-3 bg-white py-3 rounded-3 sideber filters">
                <div id='filter-container' class='d-flex d-md-block '>
                    <div class="category me-5 me-md-none mb-3 p-3">
                        <h3>Categories</h3>
                        <div class="form-check">
                            <input class="form-check-input filter_category" value='men' type="checkbox" id="Men">
                            <label class="form-check-label" for="Men">Men</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input filter_category" value='womens' type="checkbox" id="Women">
                            <label class="form-check-label" for="Women">Women</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input filter_category" value='kids' type="checkbox" id="Kids">
                            <label class="form-check-label" for="Kids">Kids</label>
                        </div>
                    </div>
                    <div class="types p-3">
                        <h3>Type</h3>
                        <div class="form-check">
                            <input class="form-check-input filter_category" value='topwear' type="checkbox" id="Topwear">
                            <label class="form-check-label" for="Topwear">Topwear</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input filter_category" value='bottomwear' type="checkbox" id="Bottomwear">
                            <label class="form-check-label" for="Bottomwear">Bottomwear</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input filter_category" value='winterwear' type="checkbox" id="Winterwear">
                            <label class="form-check-label" for="Winterwear">Winterwear</label>
                        </div>
                    </div>
                </div>
            </div>
            <div  style='min-height:100vh;margin-bottom:6rem;' class="col-md-9 bg-white rounded-3 p-3 g-0" >
                <div class='collection row p-0 g-0'></div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php" ?>
<script src='./js/filter.js'></script>