<?php include "header.php" ?>
<section class='collection-page' style='margin-bottom:5rem;'>
    <div class="container p-0">
        <div style='box-shadow:0 0 10px 1px #33333321;' class="col-12 bg-white mt-4 rounded-3 py-2 border-bottom search-bar d-flex justify-content-center align-items-center">
            <input type="text" class='form-control search rounded-5' placeholder='Search'>
        </div>
        <div class="row mt-3" >
            <div data-aos="fade-right" class="col-md-3 bg-white py-3 rounded-3 sideber filters" style='box-shadow:0 0 10px 1px #33333321;'>
                <h2 class='mb-3 mb-md-3'>Filters <i class="fa-solid fa-angle-right filter-angle d-md-none"></i></h2>
                <div id='filter-container'>
                    <div class="category border rounded-3 mb-3 p-3">
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
                    <div class="types border rounded-3 p-3">
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
            <div data-aos="fade-left" class="col-md-9 products rounded-3" style='margin-bottom:8rem;' style='box-shadow:0 0 10px 1px #33333321;'>
                <div class='d-flex bg-white rounded-3 px-3 py-2 justify-content-between' style='box-shadow:0 0 10px 1px #33333321;'>
                        <h1 class='text-muted text-uppercase mb-0'>All <span class='fw-bold text-dark'>Collections</span><i class="fa-solid fa-minus" style='color:#2A2A2A'></i></h1>
                        <select class="form-select rounded-3 sorting" aria-label="Default select example">
                            <option value = 'relevant'selected>Sort by: Relevant</option>
                            <option value="low to high">Sort by: Low to High</option>
                            <option value="high to low">Sort by: High to Low</option>
                        </select>
                </div>
                <div  style='min-height:100vh;' class="row bg-white rounded-3 collection p-3 g-0 mt-3" style='box-shadow:0 0 10px 1px #33333321;'></div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php" ?>
<script src='./js/filter.js'></script>