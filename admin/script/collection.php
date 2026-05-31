<?php 
    include "config.php";
    $limit = 12;
    $page = isset($_POST['page_no']) ? (int)$_POST['page_no'] : 1;
    $offset = ($page - 1) * $limit;
    $query = "SELECT * FROM products LIMIT {$offset}, {$limit}";
    $result = mysqli_query($conn, $query);
    $output = '';
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $output .= "<div data-aos='zoom-in-up' data-aos-offset='300' class='card bg-transparent mb-4 col-6 col-md-4 col-lg-3 rounded-0 border-0'>
                    <a href='product-page.php?product_id={$row['id']}' class='text-decoration-none'>
                        <div class='bg-white px-2'>
                            <img src='./admin/images/product_img/{$row['img1']}' class='rounded-2 img-fluid image' alt='...'>
                            <div class='card-body p-0 d-flex flex-column'>
                                <span class='title'>{$row['product_title']}</span>
                                <span class='fw-bold price'><span>$</span>{$row['product_price']}</span>
                            </div>
                        </div>
                    </a>
                </div>";
        }

        $totalProducts = "SELECT * FROM products";
        $execute = mysqli_query($conn, $totalProducts);
        $records = mysqli_num_rows($execute);
        $totalpage = ceil($records/$limit);

        $prevPage = $page - 1;
        $nextPage = $page + 1;
        if($page <= 1){
            $disabled = 'disabled';
        }else{
            $disabled = '';
        }
    
        $output .="<nav class='d-flex justify-content-center my-5' aria-label='Page navigation example'>
            <ul class='mb-0 pagination'>
                <li class='page-item $disabled'><a class='page-link me-2 collect-page' data-page={$prevPage} href='#'><span>&laquo;</span></a></li>";
                for($pageNumber = 1; $pageNumber<=$totalpage; $pageNumber++){
                    if($pageNumber === $page){
                        $active = 'active-page';
                    }else{
                        $active = '';
                    }
                    $output .="<li class='page-item '><a class='page-link $active me-2 collect-page ' data-page='{$pageNumber}' href='#'>{$pageNumber}</a></li>";
                }
                if($page >= $totalpage){
                    $disabled1 = 'disabled';
                }else{
                    $disabled1 = '';
                }
                
                $output .="<li class='page-item $disabled1'><a class='page-link  collect-page' data-page={$nextPage} href='#'><span>&raquo;</span></a></li>
            </ul>
        </nav>";
    }

    echo $output;
?>