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

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="btn-outline-dark">
                        <a class="nav-link text-white" href="index_admin.php"><i class="fa fa-home"></i> หน้าแรก</a>
                    </li>
                    <li class="btn-outline-dark">
                        <a class="nav-link text-white" href="#"><i class="fa fa-list"></i> จัดการระยะทาง</a>
                    </li>
                    <li class="btn-outline-dark">
                        <a class="nav-link text-white" href="#"><i class="fa fa-user"></i> จัดการสถานที่</a>
                    </li>
                    <li class="btn-outline-dark">
                        <a class="nav-link text-white" href="event_information.php"><i class="fa fa-contact-book"></i> จัดการข้อมูลงานวิ่ง</a>
                    </li>
                    <li class="btn-outline-dark">
                        <a class="nav-link text-white" href="#"><i class="fa fa-list"></i> จัดการ</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>

    


    <!-- ส่วน Content -->

    <div class="header" style="margin-top: 0px; background-color: blue; margin-top: 75px">
        <h2>Edit Page</h2>
    </div>

    <div class="content">
        .
        .
        .
        .
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