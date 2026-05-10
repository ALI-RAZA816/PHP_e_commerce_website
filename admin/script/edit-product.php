<?php 

    include "config.php";
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        $EDIT_TITLE = mysqli_real_escape_string($conn, $_POST['edit-product-title']);
        $EDIT_DESCRIPTION = mysqli_real_escape_string($conn, $_POST['edit-product-description']);
        $EDIT_CATEGORY = mysqli_real_escape_string($conn, $_POST['edit-product-category']);
        $EDIT_SUB_CATEGORY = mysqli_real_escape_string($conn, $_POST['edit-sub-category']);
        $EDIT_PRICE = mysqli_real_escape_string($conn, $_POST['edit-product-price']);
        $EDIT_SIZES = mysqli_real_escape_string($conn, $_POST['edit-sizes']);
        

        function upload_image_1(){

            if(empty($_FILES['edit-image-1']['name'])){
                return $_POST['old-image1'];
            }else{
                
                $IMAGE_1_NAME = $_FILES['edit-image-1']['name'];
                $IMAGE_1_TYPE = $_FILES['edit-image-1']['type'];
                $IMAGE_1_TMP = $_FILES['edit-image-1']['tmp_name'];
                $IMAGE_1_SIZE = $_FILES['edit-image-1']['size'];

                $IMAGE_1_EXPLODE = explode('.',$IMAGE_1_NAME);
                $IMAGE_1_END = end($IMAGE_1_EXPLODE);
                $IMAGE_1_EXT = strtolower($IMAGE_1_END);
                $EXTENSIONS = array("png","jpeg","jpg");
                if(!in_array($IMAGE_1_EXT, $EXTENSIONS)){
                    echo "Choose PNG or JPEG file format";
                    die();
                }

                if($IMAGE_1_SIZE > 3145728){
                    echo "File size must be 3MB or less";
                    die();
                }

                $NEW_IMG_1 = time()."-".basename($IMAGE_1_NAME);
                $ACTUAL_IMAGE_1 = "../images/product_img/".$NEW_IMG_1;
                include "config.php";
                $query1 = "SELECT * FROM products WHERE id = {$_POST['edit-id']}";
                $result1 = mysqli_query($conn, $query1);
                $row1 = mysqli_fetch_assoc($result1);
                unlink("../images/product_img/{$row1['img1']}");
                if(move_uploaded_file($IMAGE_1_TMP, $ACTUAL_IMAGE_1)){
                    return $NEW_IMG_1;
                }
            }
        }
        $IMAGE_NAME_1 = upload_image_1();

        function upload_image_2(){
            if(empty($_FILES['edit-image-2']['name'])){
                return $_POST['old-image2'];
            }else{
        
                $IMAGE_2_NAME = $_FILES['edit-image-2']['name'];
                $IMAGE_2_TYPE = $_FILES['edit-image-2']['type'];
                $IMAGE_2_TMP = $_FILES['edit-image-2']['tmp_name'];
                $IMAGE_2_SIZE = $_FILES['edit-image-2']['size'];

                $IMAGE_2_EXPLODE = explode('.',$IMAGE_2_NAME);
                $IMAGE_2_END = end($IMAGE_2_EXPLODE);
                $IMAGE_2_EXT = strtolower($IMAGE_2_END);
                $EXTENSIONS = array("png","jpeg","jpg");
                if(!in_array($IMAGE_2_EXT, $EXTENSIONS)){
                    echo "Choose PNG or JPEG file format";
                    die();
                }

                if($IMAGE_2_SIZE > 3145728){
                    echo "File size must be 3MB or less";
                    die();
                }

                $NEW_IMG_2 = time()."-".basename($IMAGE_2_NAME);
                $ACTUAL_IMAGE_2 = "../images/product_img/".$NEW_IMG_2;
                include "config.php";
                $query2 = "SELECT * FROM products WHERE id = {$_POST['edit-id']}";
                $result2 = mysqli_query($conn, $query2);
                $row2 = mysqli_fetch_assoc($result2);
                unlink("../images/product_img/{$row2['img2']}");
                if(move_uploaded_file($IMAGE_2_TMP, $ACTUAL_IMAGE_2)){
                    return $NEW_IMG_2;
                }
            
            }
        }
        $IMAGE_NAME_2 = upload_image_2();

        function upload_image_3(){
            if(empty($_FILES['edit-image-3']['name'])){
            return $_POST['old-image3'];
            }else{
        
                $IMAGE_3_NAME = $_FILES['edit-image-3']['name'];
                $IMAGE_3_TYPE = $_FILES['edit-image-3']['type'];
                $IMAGE_3_TMP = $_FILES['edit-image-3']['tmp_name'];
                $IMAGE_3_SIZE = $_FILES['edit-image-3']['size'];

                $IMAGE_3_EXPLODE = explode('.',$IMAGE_3_NAME);
                $IMAGE_3_END = end($IMAGE_3_EXPLODE);
                $IMAGE_3_EXT = strtolower($IMAGE_3_END);
                $EXTENSIONS = array("png","jpeg","jpg");
                if(!in_array($IMAGE_3_EXT, $EXTENSIONS)){
                    echo "Choose PNG or JPEG file format";
                    die();
                }

                if($IMAGE_3_SIZE > 3145728){
                    echo "File size must be 3MB or less";
                    die();
                }

                $NEW_IMG_3 = time()."-".basename($IMAGE_3_NAME);
                $ACTUAL_IMAGE_3 = "../images/product_img/".$NEW_IMG_3;
                include "config.php";
                $query3 = "SELECT * FROM products WHERE id = {$_POST['edit-id']}";
                $result3 = mysqli_query($conn, $query3);
                $row3 = mysqli_fetch_assoc($result3);
                unlink("../images/product_img/{$row3['img3']}");
                if(move_uploaded_file($IMAGE_3_TMP, $ACTUAL_IMAGE_3)){
                    return $NEW_IMG_3;
                }
            }
        }
        $IMAGE_NAME_3 = upload_image_3();

        function upload_image_4(){
            if(empty($_FILES['edit-image-4']['name'])){
                return $_POST['old-image4'];
            }else{
            
                $IMAGE_4_NAME = $_FILES['edit-image-4']['name'];
                $IMAGE_4_TYPE = $_FILES['edit-image-4']['type'];
                $IMAGE_4_TMP = $_FILES['edit-image-4']['tmp_name'];
                $IMAGE_4_SIZE = $_FILES['edit-image-4']['size'];

                $IMAGE_4_EXPLODE = explode('.',$IMAGE_4_NAME);
                $IMAGE_4_END = end($IMAGE_4_EXPLODE);
                $IMAGE_4_EXT = strtolower($IMAGE_4_END);
                $EXTENSIONS = array("png","jpeg","jpg");
                if(!in_array($IMAGE_4_EXT, $EXTENSIONS)){
                    echo "Choose PNG or JPEG file format";
                    die();
                }

                if($IMAGE_4_SIZE > 3145728){
                    echo "File size must be 3MB or less";
                    die();
                }

                $NEW_IMG_4 = time()."-".basename($IMAGE_4_NAME);
                $ACTUAL_IMAGE_4 = "../images/product_img/".$NEW_IMG_4;
                include "config.php";
                $query4 = "SELECT * FROM products WHERE id = {$_POST['edit-id']}";
                $result4 = mysqli_query($conn, $query4);
                $row4 = mysqli_fetch_assoc($result4);
                unlink("../images/product_img/{$row4['img4']}");
                if(move_uploaded_file($IMAGE_4_TMP, $ACTUAL_IMAGE_4)){
                    return $NEW_IMG_4;
                }
            }
        }
        $IMAGE_NAME_4 = upload_image_4();
        if(isset($_POST['edit-bestseller'])){
            $query = "UPDATE products SET product_title = '{$EDIT_TITLE}', product_description = '{$EDIT_DESCRIPTION}', product_category = '{$EDIT_CATEGORY}', sub_category = '{$EDIT_SUB_CATEGORY}', product_price = {$EDIT_PRICE}, product_sizes = '{$EDIT_SIZES}', bestseller = '{$_POST['edit-bestseller']}', img1 = '{$IMAGE_NAME_1}', img2 = '{$IMAGE_NAME_2}', img3 = '{$IMAGE_NAME_3}', img4 = '{$IMAGE_NAME_4}' WHERE id = {$_POST['edit-id']}";
            $result = mysqli_query($conn, $query);
            if($result){
                echo "Product Updated";
            }
        }else if(!isset($_POST['edit-bestseller'])){
            $query = "UPDATE products SET product_title = '{$EDIT_TITLE}', product_description = '{$EDIT_DESCRIPTION}', product_category = '{$EDIT_CATEGORY}', sub_category = '{$EDIT_SUB_CATEGORY}', product_price = {$EDIT_PRICE}, product_sizes = '{$EDIT_SIZES}', bestseller = NULL, img1 = '{$IMAGE_NAME_1}', img2 = '{$IMAGE_NAME_2}', img3 = '{$IMAGE_NAME_3}', img4 = '{$IMAGE_NAME_4}' WHERE id = {$_POST['edit-id']}";
            $result = mysqli_query($conn, $query);
            if($result){
                echo "Product Updated";
            }
        }
   }else{
        header("Location: {$host_name}/admin/not-found.php");
   }
?>