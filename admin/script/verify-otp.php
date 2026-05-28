<?php 

    include "config.php";
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        header("Location: {$host_name}/admin/not-found.php");
        die();
    }

    $OTP = mysqli_real_escape_string($conn, $_POST['otp']);
    if(!$OTP) die();
    $query = "SELECT * FROM users WHERE otp = {$OTP}";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) === 0){
        echo "Invalid OTP";
        die();
    }
    $output ='';
    if($result){
        $row = mysqli_fetch_assoc($result);
        $output = "<div class='col-md-4 px-4 new-passwords bg-white rounded-2 p-3'>
                <h3 class='text-capitlize text-center mb-4'>Create New Password</h3>
                <form action=''>
                    <input type='hidden' name = 'fetchemail' value='{$row['email']}' class='form-control fetch-email rounded-0 border mb-3'>
                    <input type='password' name = 'newpassword' class='new-password shadow-none border-top-0 border-end-0 border-start-0 border-end-0 border-bottom px-0 form-control rounded-0 border mb-3' placeholder='Create Password'>
                    <input type='password' name = 'repeatpassword' class='repeat-password shadow-none border-top-0 border-end-0 border-start-0 border-end-0 border-bottom px-0 form-control rounded-0 border mb-3' placeholder='Re-enter Password'>
                    <button type='button' class='btn text-white rounded-2 w-100 d-block mx-auto create-new-password'>Create New Password</button>
                </form>
            </div>";
        echo $output;
    }

?>