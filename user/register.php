<?php
    session_start();
    include('../Server/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="../style/css/bootstrap.css">
</head>

<body>


    <div class="header">
        <Center><h2>Register</h2></Center>
    </div>
 
    <form action="register_db.php" method="post" class="container">
        <?php include('../errors.php'); ?>
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

    <div class="row" style="background-color: #ffffff;">       
        <div class="col-md-6">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="col-md-6">
        </div>

        <div class="col-md-6">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="col-md-6">
            <label for="surname">Surname</label>
            <input type="text" name="surname" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="password_1">Password</label>
            <input type="password" name="password_1" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="password_2">Confirm Password</label>
            <input type="password" name="password_2" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="idcard">ID Card Number</label>
            <input type="text" name="idcard" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="birthday">Birthday</label>
            <input type="date" name="birthday" class="form-control">
        </div>

        <div class="input-group">
            <button type="submit" name="reg_user" class="btn btn-primary btn-lg" style="margin-top: 10px;">Register</button>
        </div>
        <p class="small fw-bold mt-2 pt-1 mb-0">หากมีสิมาชิกอยู่เเล้ว <a href="login.php" class="link-danger"> ลงชื่อเข้าใช้</a></p>

    </div> 
    </form>

</body>

</html>