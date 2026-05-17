$(document).ready(function(){
    // add products
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
                if(data === 'File size must be 3MB or less'){
                    $(".error").css("top","30px");
                    $(".error").html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>File size must be 3MB or less</span>");
                    setTimeout(()=>{
                        $(".error").css("top","-25px");
                        $(".error").html("");
                    },3000);
                }else if(data === 'Choose PNG or JPEG file format'){
                    $(".error").css("top","30px");
                    $(".error").html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Choose PNG or JPEG file format</span>");
                    setTimeout(()=>{
                        $(".error").css("top","-25px");
                        $(".error").html("");
                    },3000);
                }else if(data === 'Product added successfully'){
                    $(".error").css("top","30px");
                    $(".error").html("<i class='fa-solid fa-circle-check fs-5 me-2 text-success'></i><span class='text-success fs-6'>Product added successfully</span>");
                    setTimeout(()=>{
                        $(".error").css("top","-25px");
                        $(".error").html("");
                        window.location.href="http://localhost/php_e_commerce_website/admin/list-items.php";
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
            type:'POST',
            success:function(data){
                $(".all-products-list").html(data);
            }
        });
    }
    load_List_Products();

    function collection(){
        $.ajax({
            url:'admin/script/collection.php',
            success:function(data){
                $(".collection").html(data);
            }
        });
    }
    collection();

    // delete product from list_items
    $(document).on('click','.list-delete-product',function(){
        var deleteId = $(this).data('product_id');
        $.ajax({
            url:'script/delete-list-item.php',
            type:'POST',
            data:{
                delete_Id:deleteId
            },
            success:function(data){
                if(data === 'Product deleted'){
                    $('.error').css("top","30px");
                    $('.error').html("<i class='fa-solid fa-circle-check fs-5 me-2 text-success'></i></i><span class='text-success fs-6'>Product deleted</span>");
                    setTimeout(()=>{
                        $('.error').css("top","-25px");
                        $('.error').html("");
                        load_List_Products();
                    },3000);
                }else{
                    $('.error').css("top","30px");
                    $('.error').html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Product can't deleted</span>");
                    setTimeout(()=>{
                        $('.error').css("top","-25px");
                        $('.error').html("");
                    },3000);
                }
            }
        })
    });

    // edit product
    $('.edit-item').on('click',function(event){
        event.preventDefault();

        if(!$(".edit-title").val()){
            $(".error").css("top","30px");
            $(".error").html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Title is required</span>");
            $('.edit-title').addClass('img_error');
            setTimeout(()=>{
                $(".error").css("top","-25px");
                $(".error").html("");
                $('.edit-title').removeClass('img_error');
            },3000);
            return;
        }
        if(!$(".edit-description").val()){
            $(".error").css("top","30px");
            $(".error").html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Description is required</span>");
            $('.edit-description').addClass('img_error');
            setTimeout(()=>{
                $(".error").css("top","-25px");
                $(".error").html("");
                $('.edit-description').removeClass('img_error');
            },3000);
            return;
        }
        if(!$(".edit-category").val()){
            $(".error").css("top","30px");
            $(".error").html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Select the category</span>");
            $('.edit-category').addClass('img_error');
            setTimeout(()=>{
                $(".error").css("top","-25px");
                $(".error").html("");
                $('.edit-category').removeClass('img_error');
            },3000);
            return;
        }
        if(!$(".edit-sub-category").val()){
            $(".error").css("top","30px");
            $(".error").html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Select sub category</span>");
            $('.edit-sub-category').addClass('img_error');
            setTimeout(()=>{
                $(".error").css("top","-25px");
                $(".error").html("");
                $('.edit-sub-category').removeClass('img_error');
            },3000);
            return;
        }
        if(!$(".edit-price").val()){
            $(".error").css("top","30px");
            $(".error").html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Insert product price</span>");
            $('.edit-price').addClass('img_error');
            setTimeout(()=>{
                $(".error").css("top","-25px");
                $(".error").html("");
                $('.edit-price').removeClass('img_error');
            },3000);
            return;
        }

        var form = $(this).closest('form')[0];
        var formData = new FormData(form);

        var sizes = [];
        $('.edit-size').each(function(){
            if($(this).is(":checked")){
                sizes.push($(this).val());
            }
        });
        sizes = sizes.toString();
        formData.append('edit-sizes',sizes);

        $.ajax({
            url:'script/edit-product.php',
            type:'POST',
            data:formData,
            contentType:false,
            processData:false,
            success:function(data){
                if(data === 'File size must be 3MB or less'){
                    $(".error").css("top","30px");
                    $(".error").html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>File size must be 3MB or less</span>");
                    setTimeout(()=>{
                        $(".error").css("top","-25px");
                        $(".error").html("");
                    },3000);
                }else if(data === 'Choose PNG or JPEG file format'){
                    $(".error").css("top","30px");
                    $(".error").html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Choose PNG or JPEG file format</span>");
                    setTimeout(()=>{
                        $(".error").css("top","-25px");
                        $(".error").html("");
                    },3000);
                }else if(data === 'Product Updated'){
                    $('.error').css("top","30px");
                    $('.error').html("<i class='fa-solid fa-circle-check fs-5 me-2 text-success'></i><span class='text-success fs-6'>Product Updated</span>");
                    setTimeout(()=>{
                        $('.error').css("top","-25px");
                        $('.error').html("");
                        window.location.href="http://localhost/php_e_commerce_website/admin/list-items.php";
                        load_bestseller_Products();
                    },3000);
                }else{
                    $('.error').css("top","30px");
                    $('.error').html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Product cannot updated</span>");
                    setTimeout(()=>{
                        $('.error').css("top","-25px");
                        $('.error').html("");
                        load_bestseller_Products();
                    },3000);
                }
            }
        });
    });

    // create account handling code
    $('#create-account').on('click',function(event){
        event.preventDefault();
        var name = $(".name").val();
        var email = $(".email").val();
        var password = $(".password").val();

        if(!name){
            $('.error').css("top","30px");
            $('.error').html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Name is required</span>");
            $('.name').addClass('field_error');
            setTimeout(()=>{
                $('.error').css("top","-25px");
                $('.error').html("");
                $('.name').removeClass('field_error');
            },3000);
            return;
        }
        if(!email){
            $('.error').css("top","30px");
            $('.error').html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Email is required</span>");
            $('.email').addClass('field_error');
            setTimeout(()=>{
                $('.error').css("top","-25px");
                $('.error').html("");
                $('.email').removeClass('field_error');
            },3000);
            return;
        }
        if(!password){
            $('.error').css("top","30px");
            $('.error').html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Password is required</span>");
            $('.password').addClass('field_error');
            setTimeout(()=>{
                $('.error').css("top","-25px");
                $('.error').html("");
                $('.password').removeClass('field_error');
            },3000);
            return;
        }
     
        $.ajax({
            url:'admin/script/create-account.php',
            type:'POST',
            data:{
                name:name,
                email:email,
                password:password,
            },
            success:function(data){
                if(data === 'Account Created'){
                    $(".name").val('');
                    $(".email").val('');
                    $(".password").val('');
                    $(".error").css("top","30px");
                    $(".error").html("<i class='fa-solid fa-circle-check fs-5 me-2 text-success'></i><span class='text-success fs-6'>Account Created</span>");
                    setTimeout(()=>{
                        $(".error").css("top","-25px");
                        $(".error").html("");
                        window.location.href="http://localhost/php_e_commerce_website/login.php";
                    },3000);
                }else if(data === 'Name already exist'){
                    $('.error').css("top","30px");
                    $('.error').html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Name already exist</span>");
                    $('.name').addClass('field_error');
                    setTimeout(()=>{
                        $('.error').css("top","-25px");
                        $('.error').html("");
                        $('.name').removeClass('field_error');
                    },3000);
                }else if(data === 'Email already exist'){
                    $('.error').css("top","30px");
                    $('.error').html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Email already exist</span>");
                    $('.email').addClass('field_error');
                    setTimeout(()=>{
                        $('.error').css("top","-25px");
                        $('.error').html("");
                        $('.email').removeClass('field_error');
                    },3000);
                }
            }
        })
    });

    // login account handling code
    $('.login').on('click',function(event){
        event.preventDefault()
        var login_email = $('.login-email').val();
        var login_password = $('.login-password').val();
        if(!login_email){
            $('.error').css("top","30px");
            $('.error').html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Email is required</span>");
            $('.login-email').addClass('field_error');
            setTimeout(()=>{
                $('.error').css("top","-25px");
                $('.error').html("");
                $('.login-email').removeClass('field_error');
            },3000);
            return;
        }
        if(!login_password){
            $('.error').css("top","30px");
            $('.error').html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Password is required</span>");
            $('.login-password').addClass('field_error');
            setTimeout(()=>{
                $('.error').css("top","-25px");
                $('.error').html("");
                $('.login-password').removeClass('field_error');
            },3000);
            return;
        }

        $.ajax({
            url:'admin/script/login-account.php',
            type:'POST',
            data:{
                login_email:login_email,
                login_password:login_password,
            },
            success:function(data){
                  if(data === 'Login successfull'){
                    $('.login-form').trigger('reset');
                    $(".error").css("top","30px");
                    $(".error").html("<i class='fa-solid fa-circle-check fs-5 me-2 text-success'></i><span class='text-success fs-6'>Login successfull</span>");
                    setTimeout(()=>{
                        $(".error").css("top","-25px");
                        $(".error").html("");
                        window.location.href="http://localhost/php_e_commerce_website";
                    },3000);
                }else if(data === 'Incorrect email'){
                    $('.error').css("top","30px");
                    $('.error').html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Incorrect email</span>");
                    $('.login-email').addClass('field_error');
                    setTimeout(()=>{
                        $('.error').css("top","-25px");
                        $('.error').html("");
                        $('.login-email').removeClass('field_error');
                    },3000);
                }else if(data === 'Incorrect password'){
                    $('.error').css("top","30px");
                    $('.error').html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Incorrect password</span>");
                    $('.login-password').addClass('field_error');
                    setTimeout(()=>{
                        $('.error').css("top","-25px");
                        $('.error').html("");
                        $('.login-password').removeClass('field_error');
                    },3000);
                }
                else if(data === 'Account not found'){
                    $('.error').css("top","30px");
                    $('.login-form').trigger('reset');
                    $('.error').html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6' style='line-height:16px;'>Account not found. <br> Your account may be removed or suspended.</span>");
                    setTimeout(()=>{
                        $('.error').css("top","-25px");
                        $('.error').html("");
                    },3000);
                }
                else if(data === 'Account inactive'){
                    $('.error').css("top","30px");
                    $('.login-form').trigger('reset');
                    $('.error').html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6' style='line-height:16px;'>Account not found. <br> Your account temporarily inactive or removed</span>");
                    setTimeout(()=>{
                        $('.error').css("top","-25px");
                        $('.error').html("");
                    },3000);
                }
            }
        })
    });

    // logout handling
    $('.logout').on('click',function(event){
        event.preventDefault();
        $.ajax({
            url:'admin/script/logout.php',
            type:'POST',
            success:function(data){
                if(data === 'You logged out'){
                    $(".error").css("top","30px");
                    $(".error").html("<i class='fa-solid fa-circle-check fs-5 me-2 text-success'></i><span class='text-success fs-6'>You logged out</span>");
                    setTimeout(()=>{
                        $(".error").css("top","-25px");
                        $(".error").html("");
                       window.location.href="http://localhost/php_e_commerce_website";
                    },3000);
                }
            }
        })
    });

    // fetch users data
    function users(){
        $.ajax({
            url:'script/fetch-users.php',
            type:'POST',
            success:function(data){
                $('.users-data').html(data);
            }
        });
    }
    users();

    // delete user 
    $(document).on('click','#delete-user-button',function(event){
        event.preventDefault();
        var delete_user_id = $(this).data('delete-user');
        $.ajax({
            url:'script/delete-user.php',
            type:'POST',
            data:{
                UserId:delete_user_id
            },
            success:function(data){
                if(data === 'User deleted'){
                    $('.error').css("top","30px");
                    $('.error').html("<i class='fa-solid fa-circle-check fs-5 me-2 text-success'></i></i><span class='text-success fs-6'>User deleted</span>");
                    users();
                    setTimeout(()=>{
                        $('.error').css("top","-25px");
                        $('.error').html("");
                    },3000);
                }
            }
        })
    });

    // edit-user
    $('.edit-user-button').on('click',function(event){
        event.preventDefault();
        var form = $(this).closest('form')[0];
        var formData = new FormData(form);
        $.ajax({
            url:'script/edit-user.php',
            type:'POST',
            data:formData,
            contentType:false,
            processData:false,
            success:function(data){
                if(data === 'User updated'){
                    $(".error").css("top","30px");
                    $(".error").html("<i class='fa-solid fa-circle-check fs-5 me-2 text-success'></i><span class='text-success fs-6'>User updated</span>");
                    setTimeout(()=>{
                        $(".error").css("top","-25px");
                        $(".error").html("");
                        users();
                        window.location.href="http://localhost/php_e_commerce_website/admin/users.php";
                    },3000);
                }else{
                    $(".error").css("top","30px");
                    $(".error").html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>User can't updated</span>");
                    setTimeout(()=>{
                        $(".error").css("top","-25px");
                        $(".error").html("");
                    },3000);
                }
            }
        })
    });
    
    // admin logout 
    $('.admin-logout').on('click',function(event){
        event.preventDefault();
        $.ajax({
            url:'script/logout.php',
            type:'POST',
            success:function(data){
                if(data === 'You logged out'){
                    $(".error").css("top","30px");
                    $(".error").html("<i class='fa-solid fa-circle-check fs-5 me-2 text-success'></i><span class='text-success fs-6'>You logged out</span>");
                    setTimeout(()=>{
                        $(".error").css("top","-25px");
                        $(".error").html("");
                       window.location.href="http://localhost/php_e_commerce_website";
                    },3000);
                }
            }
        })
    });

    // search product
    $('.search').on('input',function(){
       var search_value =  $(this).val();
       $.ajax({
            url:'admin/script/search.php',
            type:'POST',
            data:{
                searchValue : search_value
            },
            success:function(data){
                // if(data === 1){
                    $(".collection").html(data);
                // }
            }
       });
    });


    // sorting | relevant | high to low | low to high
    var filter_category = [];
    $('.filter_category').on('change',function(){
        if($(this).is(":checked")){
            filter_category.push($(this).val());
        }else{
            var index = filter_category.indexOf($(this).val());
            if (index !== -1) filter_category.splice(index, 1);
        }
        var categoryString = filter_category.join(',');
        $.ajax({
            url:'admin/script/filter-category.php',
            type:'POST',
            data:{
                category : categoryString,
            },
            success:function(data){
                $(".collection").html(data);
            }
        })
    });
    
    $('.sorting').on('change',function(){
        var sorted_value = $(this).val();
        $.ajax({
            url:'admin/script/sort.php',
            type:'POST',
            data:{
                sorted:sorted_value
            },
            success:function(data){
                $(".collection").html(data);
            }
        });
    });

    // email send
    $('.submit-mail').on('click',function(event){
        event.preventDefault();
        if(!$(".mailer-name").val()){
            $('.error').css("top","30px");
            $('.error').html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Mailer name is required</span>");
            $('.mailer-name').addClass('img_error');
            setTimeout(()=>{
                $('.error').css("top","-25px");
                $('.error').html("");
                $('.mailer-name').removeClass('img_error');
            },3000);
            return;
        }
        if(!$(".mailer-email").val()){
            $('.error').css("top","30px");
            $('.error').html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Email is required</span>");
            $('.mailer-email').addClass('img_error');
            setTimeout(()=>{
                $('.error').css("top","-25px");
                $('.error').html("");
                $('.mailer-email').removeClass('img_error');
            },3000);
            return;
        }
        if(!$(".mail-subject").val()){
            $('.error').css("top","30px");
            $('.error').html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Subject is required</span>");
            $('.mail-subject').addClass('img_error');
            setTimeout(()=>{
                $('.error').css("top","-25px");
                $('.error').html("");
                $('.mail-subject').removeClass('img_error');
            },3000);
            return;
        }
        if(!$(".mail-content").val()){
            $('.error').css("top","30px");
            $('.error').html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Message is required</span>");
            $('.mail-content').addClass('img_error');
            setTimeout(()=>{
                $('.error').css("top","-25px");
                $('.error').html("");
                $('.mail-content').removeClass('img_error');
            },3000);
            return;
        }

        var form = $(this).closest('form')[0];
        var formData = new FormData(form);

        $.ajax({
            url:'admin/script/send.php',
            type:'POST',
            data:formData,
            processData:false,
            contentType:false,
            success:function(data){
                if(data === 'Invalid Email'){
                    $('.error').css("top","30px");
                    $('.error').html("<i class='fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger'></i><span class='text-danger fs-6'>Invalid Email</span>");
                    $('.mailer-email').addClass('img_error');
                    setTimeout(()=>{
                        $('.error').css("top","-25px");
                        $('.error').html("");
                        $('.mailer-email').removeClass('img_error');
                    },3000);
                }else if(data === 'Message sent'){
                    $('.about-us-form').trigger('reset');
                    $(".error").css("top","30px");
                    $(".error").html("<i class='fa-solid fa-circle-check fs-5 me-2 text-success'></i><span class='text-success fs-6'>Message has been sent. <br> We'll contact you shortly.</span>");
                    setTimeout(()=>{
                        $(".error").css("top","-25px");
                        $(".error").html("");
                    },3000);
                }
            }
        })
    })
});