<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login-Page</title>
     <!-- BOOTSTRAP  -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    <!-- MAIN CSS FILE  -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/utilities.css">
    <!-- FONTAWESOME CDN  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="row vh-100 d-flex justify-content-center align-items-center">
            <div class="col-md-4 border rounded-2 py-3">
                <h2 class=' text-center text-uppercase fs-4 fw-bold'>Admin Login</h2>
                <form action="">
                    <div class='mb-2'>
                        <label for="" class='form-label'>Email</label>
                        <input type="text" class='form-control rounded-0' placeholder='Email'>
                    </div>
                    <div>
                        <label for="" class='form-label'>Password</label>
                        <input type="password" class='form-control rounded-0' placeholder='Password'>
                    </div>
                    <button type='buttom' class='btn btn-dark d-block w-100 mt-3'>Login</button>
                </form>
            </div>
        </div>
    </div>
    <script src='../js/jquery.js'></script>
    <script src='../js/main.js'></script>
</body>
</html>