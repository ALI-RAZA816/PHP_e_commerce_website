<?php 

    include "config.php";
    $query = "SELECT * FROM products";
    $result = mysqli_query($conn, $query);
    $output = '';

    if(mysqli_num_rows($result) > 0){
            $output .= "<table class='table'>
                        <thead>
                            <tr class='border'>
                                <th>Image</th>
                                <th>Name</th>
                                <th class='text-center'>Category</th>
                                <th class='text-center'>Price</th>
                                <th class='text-center'>Action</th>
                            </tr>
                        </thead>
                        <tbody>";
                        while($row = mysqli_fetch_assoc($result)){
                            $category = ucfirst($row['product_category']);
                            $output .= "<tr class='align-middle border'>
                                <th class='col-1'>
                                    <img src='./images/product_img/{$row['img1']}' height='40px' width='40px' class='img-fluid' alt=''>
                                </th>
                                <td class='text-muted'>{$row['product_title']}</td>
                                <td class='text-muted text-center'>{$category}</td>
                                <td class='text-muted text-center'>{$row['product_price']}</td>
                                <td class='text-muted text-center'><i class='fa-solid fa-pen-to-square me-1' style='cursor:pointer;'></i><i class='fa-solid fa-trash text-danger' style='cursor:pointer;'></i></td>
                            </tr>";
                $output .= "</tbody>
                    </table>";
        }
    }
    echo $output;


?>