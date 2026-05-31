<?php 

    include "config.php";
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $limit = 4;
        $page = isset($_POST['page_no']) ? (int)$_POST['page_no'] : 1;
        $offset = ($page - 1) * $limit;
        $query = "SELECT * FROM products LIMIT {$offset}, {$limit}";
        $result = mysqli_query($conn, $query);
        $output = '';
        if(mysqli_num_rows($result) > 0){
                $output .= "<table class='table'>
                            <thead>
                                <tr>
                                    <th class='text-uppercase bg-transparent text-muted' style='font-size:14px;'>Image</th>
                                    <th class='text-uppercase bg-transparent text-muted' style='font-size:14px;'>Name</th>
                                    <th class='text-center text-uppercase bg-transparent text-muted' style='font-size:14px;'>Category</th>
                                    <th class='text-center text-uppercase bg-transparent text-muted' style='font-size:14px;'>Price</th>
                                    <th class='text-center text-uppercase bg-transparent text-muted' style='font-size:14px;'>Action</th>
                                </tr>
                            </thead>
                            <tbody>";
                            while($row = mysqli_fetch_assoc($result)){
                                $category = ucfirst($row['product_category']);
                                $output .= "<tr class='align-middle product'>
                                    <th class='col-1'>
                                        <img src='./images/product_img/{$row['img1']}' class='img-fluid rounded-3' alt=''>
                                    </th>
                                    <td class='title text-nowrap'>{$row['product_title']}</td>
                                    <td class='text-muted category text-center'>{$category}</td>
                                    <td class='price text-center'><span>$</span>{$row['product_price']}</td>
                                    <td class='text-center'>
                                    <a href='edit-product.php?edit_id={$row['id']}' class='text-decoration-none text-muted'><i class='fa-solid fa-pencil me-2' style='cursor:pointer;color:#064E38;'></i></a>
                                    <i class='fa-solid fa-trash list-delete-product text-danger' data-product_id={$row['id']} style='cursor:pointer;'></i>
                                    </td>
                                </tr>";
                            }
                    $output .= "</tbody>
                        </table>";
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
                       
                        $output .= "<nav class='d-flex justify-content-end my-5' aria-label='Page navigation example'>
                            <ul class='mb-0 pagination me-5 '>
                                <li class='page-item $disabled'><a class='page-link me-2 product-page' data-page={$prevPage} href='#'><span>&laquo;</span></a></li>";
                                for($pageNumber = 1; $pageNumber<=$totalpage; $pageNumber++){
                                    if($pageNumber === $page){
                                        $active = 'active-page';
                                    }else{
                                        $active = '';
                                    }
                                    $output .="<li class='page-item '><a class='page-link $active me-2 product-page ' data-page='{$pageNumber}' href='#'>{$pageNumber}</a></li>";
                                }
                                 if($page >= $totalpage){
                                    $disabled1 = 'disabled';
                                }else{
                                    $disabled1 = '';
                                }
                                
                                $output .="<li class='page-item $disabled1'><a class='page-link  product-page' data-page={$nextPage} href='#'><span>&raquo;</span></a></li>
                            </ul>
                        </nav>";
        }else{
            $output = "<div class='d-flex flex-column justify-content-center align-items-center' style='height:80vh;'>
                <i class='fa-solid fa-box' style='color:#efefef;font-size:5rem;'></i>
                <h5 class='m-0 mt-2 text-muted'>No Products</h5>
            </div>";
        }
        echo $output;
    }else{
        header("Location: {$host_name}/admin/not-found.php");
        exit();
    }
?>