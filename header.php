<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BOOTSTRAP  -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    <!-- MAIN CSS FILE  -->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/utilities.css">
    <!-- FONTAWESOME CDN  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src='./js/script.js'></script>
</head>
<body>
    <div class="error d-flex align-items-center border py-2 px-2 bg-white rounded-2 shadow-sm">
        <i class="fa-solid  fa-triangle-exclamation fs-5 me-2 text-danger"></i><span class='text-danger fs-6'>Image is required</span>
    </div>
    <header class='border-bottom'>
        <nav class="navbar py-3">
            <div class="container">
                <div class="col-2">
                    <img src="./images/InsiderStats.png" class='img-fluid' alt="">
                </div>
                <div class="col-6 d-flex justify-content-center align-items-center">
                    <ul class="nav header-nav-tab" id='header-nav-tabs'>
                        <i class='fa-solid fa-xmark nav-tab-cross'></i>
                        <li class="nav-item"><a class="nav-link pages" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link pages" href="collection.php">Collection</a></li>
                        <li class="nav-item"><a class="nav-link pages" href="about.php">About</a></li>
                        <li class="nav-item border-bottom-0"><a class="nav-link pages" href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-2  d-flex justify-content-end align-items-center">
                    <a href="collection.php"><i class="fa-solid me-3 fa-magnifying-glass header-icons"></i></a>
                    <div class='user-profile'>
                        <i class="fa-regular me-3 fa-user header-icons user-icon"></i>
                        <div class="profile">
                            <p class='mb-1 text-muted'><a href="my-order.php" class='text-decoration-none text-dark'>Orders</a></p>
                            <p class='mb-1 text-muted'><a href="" class='text-decoration-none text-dark logout'>Logout</a></p>
                        </div>
                    </div>
                    <a href="cart.php"><i class="fa-solid fa-bag-shopping header-icons"></i></a>
                    <i class="fa-solid fa-bars-staggered ms-3 nav-bars"></i>
                </div>
            </div>
        </nav>
    </header>
    <script src='./js/jquery.js'></script>
    <script src='./js/main.js'></script>
</body>
</html>
