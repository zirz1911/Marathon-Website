<?php
session_start();
include('Server/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>


    <link rel="stylesheet" href="style/css/bootstrap.css">
    <link rel="stylesheet" href="style/css/login_page.css">
</head>

<body>

<!-- Login Form -->
<form action="login_db.php" method="post">
    
    <section class="vh-100" style="background-color: #ffffff;">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://m.media-amazon.com/images/M/MV5BZTU2YWMxYTItNDcyOC00MzIyLWEyOWMtMDcxYmYxNzg5NDc5XkEyXkFqcGdeQXVyMTA5NzI0NDY2._V1_.jpg" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form>
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="" style="font-size: 30px;">Marathon Site</p>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Login</p>
                        </div>

                        <!-- User input -->
                        <div class="form-outline mb-4">
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email" name="email" />
                            <label class="form-label" for="email">Email</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" class="form-control form-control-lg" placeholder="Enter password" name="password" />
                            <label class="form-label" for="password">Password</label>
                        </div>

                        <?php if (isset($_SESSION['error'])) : ?>
                            <div class="error">
                                <p class="alert alert-warning">
                                    <?php
                                    echo $_SESSION['error'];
                                    unset($_SESSION['error']);
                                    ?> 
                                </p>
                            </div>
                        <?php endif ?>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" name="login_user" class="btn btn-success btn-md" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <button type="button" onclick="document.location = 'organizer/organizer_login.php' " class="btn btn-warning btn-md" style="padding-left: 2.5rem; padding-right: 2.5rem;">ส่วนของผู้จัดงาน</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">ยังไม่มีบัญชี <a href="user/register.php" class="link-danger">สมัครสมาชิกทั่วไป</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        
        <div class="d-flex flex-column flex-sm-row text-center text-sm-start justify-content-between py-4 px-4 px-xl-5" style="background-color: red; ">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Marathon site 2022 zz
            </div>
        </div>
    </section>

</form>


</body>

</html>