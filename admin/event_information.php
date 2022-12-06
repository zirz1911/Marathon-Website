<?php 
    session_start();

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

    <!-- ส่วน Menu -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3" style="background-color: red;">
        <div class="container">
            <a class="navbar-brand" href="#">Admin Marathon</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav" style="margin-bottom: 0px">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="btn-outline-dark">
                        <a class="nav-link text-white" href="index_admin.php"><i class="fa fa-home"></i> หน้าแรก</a>
                    </li>
                    <li class="btn-outline-dark">
                        <a class="nav-link text-white" href="information.php"><i class="fa fa-arrow-left"></i> ก่อนหน้า</a>
                    </li>
                    


                </ul>
            </div>
        </div>
    </nav>

    


    <!-- ส่วน Content -->

    <div class="header" style="margin: 65px 0px 0px 0px; background-color: #ffffff;">
        <button onclick="document.location = 'add/add_event_information.php'" name="reg_user" class="btn btn-success btn-md" style="margin: 10px 10px 10px 10px; float: right;">เพิ่มข้อมูลงานวิ่ง</button>
    </div>

    <div class="content">
        <br><br>
        <p style="background-color: red; margin-top: 3px;">123</p>
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