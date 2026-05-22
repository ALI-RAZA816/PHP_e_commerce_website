<?php 

    include "config.php";
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        $PRODUCT_TITLE = mysqli_real_escape_string($conn, $_POST['product_title']);
        $PRODUCT_DESCRIPTION = mysqli_real_escape_string($conn, $_POST['product_description']);
        $PRODUCT_CATEGORY = mysqli_real_escape_string($conn, $_POST['product_category']);
        $SUB_CATEGORY = mysqli_real_escape_string($conn, $_POST['sub_category']);
        $PRODUCT_PRICE = mysqli_real_escape_string($conn, $_POST['product_price']);
        $PRODUCT_SIZE = mysqli_real_escape_string($conn, $_POST['product_size']);
        
        function upload_image_1(){
            
            $IMAGE_1_NAME = $_FILES['image1']['name'];
            $IMAGE_1_TYPE = $_FILES['image1']['type'];
            $IMAGE_1_TMP = $_FILES['image1']['tmp_name'];
            $IMAGE_1_SIZE = $_FILES['image1']['size'];

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
            if(move_uploaded_file($IMAGE_1_TMP, $ACTUAL_IMAGE_1)){
                return $NEW_IMG_1;
            }
        }
        $IMAGE_NAME_1 = upload_image_1();

        function upload_image_2(){
            
            $IMAGE_2_NAME = $_FILES['image2']['name'];
            $IMAGE_2_TYPE = $_FILES['image2']['type'];
            $IMAGE_2_TMP = $_FILES['image2']['tmp_name'];
            $IMAGE_2_SIZE = $_FILES['image2']['size'];

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
            if(move_uploaded_file($IMAGE_2_TMP, $ACTUAL_IMAGE_2)){
                return $NEW_IMG_2;
            }
        }
        $IMAGE_NAME_2 = upload_image_2();

        function upload_image_3(){
            
            $IMAGE_3_NAME = $_FILES['image3']['name'];
            $IMAGE_3_TYPE = $_FILES['image3']['type'];
            $IMAGE_3_TMP = $_FILES['image3']['tmp_name'];
            $IMAGE_3_SIZE = $_FILES['image3']['size'];

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
            if(move_uploaded_file($IMAGE_3_TMP, $ACTUAL_IMAGE_3)){
                return $NEW_IMG_3;
            }
        }
        $IMAGE_NAME_3 = upload_image_3();

        function upload_image_4(){
            
            $IMAGE_4_NAME = $_FILES['image4']['name'];
            $IMAGE_4_TYPE = $_FILES['image4']['type'];
            $IMAGE_4_TMP = $_FILES['image4']['tmp_name'];
            $IMAGE_4_SIZE = $_FILES['image4']['size'];

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
            if(move_uploaded_file($IMAGE_4_TMP, $ACTUAL_IMAGE_4)){
                return $NEW_IMG_4;
            }
        }
        $IMAGE_NAME_4 = upload_image_4();

        if(isset($_POST['bestseller'])){
            $query = "INSERT INTO products (product_title, product_description, product_category, sub_category, product_price, product_sizes, bestseller, img1, img2,img3,img4) VALUES ('{$PRODUCT_TITLE}','{$PRODUCT_DESCRIPTION}','{$PRODUCT_CATEGORY}','{$SUB_CATEGORY}',{$PRODUCT_PRICE},'{$PRODUCT_SIZE}','{$_POST['bestseller']}','{$IMAGE_NAME_1}','{$IMAGE_NAME_2}','{$IMAGE_NAME_3}','{$IMAGE_NAME_4}')";
            $result = mysqli_query($conn, $query);
            if($result){
                echo 'Product added successfully';
            }
        }else if (!isset($_POST['bestseller'])){
            $query1 = "INSERT INTO products (product_title, product_description, product_category, sub_category, product_price, product_sizes, img1, img2, img3, img4) VALUES ('{$PRODUCT_TITLE}','{$PRODUCT_DESCRIPTION}','{$PRODUCT_CATEGORY}','{$SUB_CATEGORY}',{$PRODUCT_PRICE},'{$PRODUCT_SIZE}','{$IMAGE_NAME_1}','{$IMAGE_NAME_2}','{$IMAGE_NAME_3}','{$IMAGE_NAME_4}')";
            $result1 = mysqli_query($conn, $query1);
            if($result1){
                echo 'Product added successfully';
            }
        }
        
    }else{
        header("Location: {$host_name}/admin/not-found.php");
    }
    
?>