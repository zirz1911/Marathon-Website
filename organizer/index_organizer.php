<?php 
    session_start();

    /*if (!isset($_SESSION['username'])){
        $_SESSION['msg'] = "You must login first";
        header('location: login.php');
    }*/

    if (isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['email']);
        header('location: organizer_login.php');
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Marathon</title>
    <link rel="stylesheet" href="../style/css/bootstrap.css">
    <link rel="stylesheet" href="../style/fontawesome/css/all.css">
    <link rel="stylesheet" href="../style/css/head.css">
</head>

<body style="background-color: #f3f3f3; opacity: 100%; padding-bottom: 0px">

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3" style="background-color: red;">
    <!-- ส่วน Menu -->
        <div class="container">
            <a class="navbar-brand" href="#">Marathon</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="btn-outline-dark">
                        <a class="nav-link text-white" href="index_user.php"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li class="btn-outline-dark">
                        <a class="nav-link text-white" href="#"><i class="fa fa-list"></i> งานวิ่ง</a>
                    </li>
                    <li class="btn-outline-dark">
                        <a class="nav-link text-white" href="#"><i class="fa fa-user"></i> ข้อมูลผู้ใช้</a>
                    </li>
                    <!-- Show when logged in -->

                    <?php if (isset($_SESSION['email'])) : ?>
                       
                        <li class="btn-outline-dark">
                        <a class="nav-link text-white" href="../index.php?logout='1'"><i class="fa fa-contact-book"></i> Logout</a>
                        </li>
                    
                    <?php endif ?>


                </ul>
            </div>
        </div>
    </nav>

    <br>


    <!-- ส่วน Content -->
    <div class="container-fluid" style="padding-top: 0px">
        <div class="row">
            <div class="col-md-12" style="background-color: #f3f3f3; opacity: 100%; padding-bottom: 0px">

                
    <div class="header">
        <h2>Home Page</h2>
    </div>

    <div class="content">
        <!-- Notification massege -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <p class="alert alert-success">
                    <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </p>
            </div>
        <?php endif ?>


        <!-- Logged in User -->
        <?php if(isset($_SESSION['name'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['name'];?></p>
            <p><a href="../organizer_login.php?logout='1'" style="color: red;">Logout</a></p>
            <?php endif ?>    
    </div>

    <script src="style/js/bootstrap.bundle.js"></script>
    <script type="text/javascript">
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-secondary', 'shadow');
            } else {
                nav.classList.remove('bg-secondary', 'shadow');
            }
        });
    </script>

</body>

</html>