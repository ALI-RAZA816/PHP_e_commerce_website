$(document).ready(function(){
    // add products
    var HOST_NAME = "Product added successfully";
    $('.add-item').on('click',function(event){
        event.preventDefault();

        if(!$("#image-1").val()){
            $('.error').css("top","30px");
            $('.error').html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Image is required</span>");
            $('.image1').addClass('img_error');
            setTimeout(()=>{
                $('.error').css("top","-25px");
                $('.error').html("");
                $('.image1').removeClass('img_error');
            },3000);
            return;
        }

        if(!$("#image-2").val()){
            $('.error').css("top","30px");
            $('.error').html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Image is required</span>");
            $('.image2').addClass('img_error');
            setTimeout(()=>{
                $('.error').css("top","-25px");
                $('.error').html("");
                $('.image2').removeClass('img_error');
            },3000);
            return;
        }

        if(!$("#image-3").val()){
            $('.error').css("top","30px");
            $('.error').html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Image is required</span>");
            $('.image3').addClass('img_error');
            setTimeout(()=>{
                $('.error').css("top","-25px");
                $('.error').html("");
                $('.image3').removeClass('img_error');
            },3000);
            return;
        }

        if(!$("#image-4").val()){
            $('.error').css("top","30px");
            $('.error').html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Image is required</span>");
            $('.image4').addClass('img_error');
            setTimeout(()=>{
                $('.error').css("top","-25px");
                $('.error').html("");
                $('.image4').removeClass('img_error');
            },3000);
            return;
        }

        if(!$(".title").val()){
            $(".error").css("top","30px");
            $(".error").html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Title is required</span>");
            $('.title').addClass('img_error');
            setTimeout(()=>{
                $(".error").css("top","-25px");
                $(".error").html("");
                $('.title').removeClass('img_error');
            },3000);
            return;
        }
        if(!$(".description").val()){
            $(".error").css("top","30px");
            $(".error").html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Description is required</span>");
            $('.description').addClass('img_error');
            setTimeout(()=>{
                $(".error").css("top","-25px");
                $(".error").html("");
                $('.description').removeClass('img_error');
            },3000);
            return;
        }
        if(!$(".category").val()){
            $(".error").css("top","30px");
            $(".error").html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Select the category</span>");
            $('.category').addClass('img_error');
            setTimeout(()=>{
                $(".error").css("top","-25px");
                $(".error").html("");
                $('.category').removeClass('img_error');
            },3000);
            return;
        }
        if(!$(".sub_category").val()){
            $(".error").css("top","30px");
            $(".error").html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Select sub category</span>");
            $('.sub_category').addClass('img_error');
            setTimeout(()=>{
                $(".error").css("top","-25px");
                $(".error").html("");
                $('.sub_category').removeClass('img_error');
            },3000);
            return;
        }
        if(!$(".price").val()){
            $(".error").css("top","30px");
            $(".error").html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Insert product price</span>");
            $('.price').addClass('img_error');
            setTimeout(()=>{
                $(".error").css("top","-25px");
                $(".error").html("");
                $('.price').removeClass('img_error');
            },3000);
            return;
        }

        if(!$('.size1').is(":checked") && !$('.size2').is(":checked") && !$('.size3').is(":checked") && !$('.size4').is(":checked") && !$('.size5').is(":checked")){
            $(".error").css("top","30px");
            $(".error").html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Select at least one product size</span>");
            setTimeout(()=>{
                $(".error").css("top","-25px");
                $(".error").html("");
            },3000);
            return;
        }

        var form = $(this).closest('form')[0];
        var formData = new FormData(form);
        var productSizes = [];
        $('.size-input').each(function(){
            if($(this).is(":checked")){
                productSizes.push($(this).val());
            }
        });
        productSizes = productSizes.toString();
        formData.append('product_size',productSizes);
        $.ajax({
            url:'script/add-product-data.php',
            type:'POST',
            data:formData,
            contentType:false,
            processData:false,
            success:function(data){
                if(data === 'Choose PNG or JPEG file format'){
                    $(".error").css("top","30px");
                    $(".error").html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Choose PNG or JPEG file format</span>");
                    setTimeout(()=>{
                        $(".error").css("top","-25px");
                        $(".error").html("");
                    },3000);
                }else if(data === 'Product added to bestseller'){
                    $(".error").css("top","30px");
                    $(".error").html("<i class='fa-solid fa-circle-check fs-5 me-2 text-success'></i><span class='text-success fs-6'>Product added successfully to bestseller</span>");
                    setTimeout(()=>{
                        $(".error").css("top","-25px");
                        $(".error").html("");
                        window.location.href="http://localhost/php_e_commerce_website/admin/bestseller.php";
                    },3000);
                }else if(data === 'Product added successfully'){
                    $(".error").css("top","30px");
                    $(".error").html("<i class='fa-solid fa-circle-check fs-5 me-2 text-success'></i><span class='text-success fs-6'>Product added successfully</span>");
                    setTimeout(()=>{
                        $(".error").css("top","-25px");
                        $(".error").html("");
                        window.location.href="http://localhost/php_e_commerce_website/admin/list-items.php";
                    },3000);
                }else{
                    $(".error").css("top","30px");
                    $(".error").html("<span class='text-danger fs-6'>Product cannot added</span><i class='fa-solid fa-face-frown ms-2 fs-5 text-danger'></i>");
                    setTimeout(()=>{
                        $(".error").css("top","-25px");
                        $(".error").html("");
                    },3000);
                }
            }
        });
    });

    // load product data
    function load_List_Products(){
        $.ajax({
            url:'script/output-list-items.php',
            success:function(data){
                $(".all-products-list").html(data);
            }
        });
    }
    load_List_Products();

    // load bestseller product data
    function load_bestseller_Products(){
        $.ajax({
            url:'script/output-bestseller.php',
            success:function(data){
                $(".bestseller").html(data);
            }
        });
    }
    load_bestseller_Products()

});