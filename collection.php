<?php include "header.php" ?>
<section class='collection-page'>
    <div class="container">
        <div class="col-12 border-bottom search-bar d-flex justify-content-center align-items-center py-2">
            <input type="text" class='form-control search rounded-5' placeholder='Search'>
        </div>
        <div class="row mt-3">
            <div class="col-md-3 sideber filters">
                <h2 class='mb-3 mb-md-5'>Filters <i class="fa-solid fa-angle-right filter-angle d-md-none"></i></h2>
                <div id='filter-container'>
                    <div class="category border mb-3 p-3">
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
                    <div class="types border p-3">
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
            <div class="col-md-9 products" style='margin-bottom:8rem;'>
            <div class='d-flex justify-content-between'>
                    <h1 class='text-muted text-uppercase'>All <span class='fw-bold text-dark'>Collections</span><i class="fa-solid fa-minus" style='color:#2A2A2A'></i></h1>
                    <select class="form-select sorting" aria-label="Default select example">
                        <option value = 'relevant'selected>Sort by: Relevant</option>
                        <option value="low to high">Sort by: Low to High</option>
                        <option value="high to low">Sort by: High to Low</option>
                    </select>
                </div>
                <div style='min-height:100vh;' class="row collection p-0 g-0 mt-5"></div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php" ?>
<script src='./js/filter.js'></script>