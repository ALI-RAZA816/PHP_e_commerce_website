<?php 

    include "config.php";
    $OTP = mysqli_real_escape_string($conn, $_POST['otp']);
    $query = "SELECT * FROM users WHERE otp = {$OTP}";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) === 0){
        echo "Invalid OTP";
        die();
    }
    $output ='';
    if($result){
        $row = mysqli_fetch_assoc($result);
        $output = "<div class='col-md-4 bg-white rounded-2 p-3'>
                <h3 class='text-dark text-capitlize text-center mb-4'>Create New Password<i class='fa-solid fa-minus'></i></h3>
                <form action=''>
                    <input type='hidden' name = 'fetchemail' value='{$row['email']}' class='form-control fetch-email rounded-0 border mb-3'>
                    <input type='password' name = 'newpassword' class='new-password form-control rounded-0 border mb-3' placeholder='Create Password'>
                    <input type='password' name = 'repeatpassword' class='repeat-password form-control rounded-0 border mb-3' placeholder='Re-enter Password'>
                    <button type='button' class='btn text-white bg-dark rounded-0 d-block mx-auto create-new-password'>Create New Password</button>
                </form>
            </div>";
        echo $output;
    }

?>