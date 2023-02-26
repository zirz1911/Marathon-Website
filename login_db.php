<?php
session_start();
include('Server/connect.php');

$errors = array();

if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //Check Empty Email & Password ------------------------------------------------------------------------------
    if (empty($email)) {
        array_push($errors, "Email is required");
        $_SESSION['error'] = "Username & Password is required";
        header("location: login.php");
    }

    if (empty($password)) {
        array_push($errors, "Password is required");
        $_SESSION['error'] = "Username & Password is required";
        header("location: login.php");
    }
    //Check Empty Email & Password ------------------------------------------------------------------------------

    //Check Login -----------------------------------------------------------------------------------------------
    if (count($errors) == 0) {

        $query = "SELECT * FROM
        admin WHERE email = '$email' AND password = '$password' ";
        $result = mysqli_query($conn, $query);
        

        if (mysqli_num_rows($result) == 1) { //Check Table Admin ถ้ามีก็ล็อกอินได้
            $row = mysqli_fetch_array($result);
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "Your are now logged in as Admin";
            Header("Location: admin/index_admin.php");
        } elseif (mysqli_num_rows($result) == 0){ //Check Table User ถ้าไม่มีก็ไป Check Table User
            $query = "SELECT * FROM
            user WHERE email = '$email' AND user_password = '$password' ";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1) { //Check Table User ถ้ามีก็ล็อกอินได้
                $row = mysqli_fetch_array($result);
                $_SESSION['email'] = $email;
                $_SESSION['success'] = "Your are now logged in as User";
                Header("Location: user/index_user.php");
            }
            if (mysqli_num_rows($result) == 0) { //Check ทั้งหมดแล้วไม่มี
                array_push($errors, "Wrong Username or Password");
                $_SESSION['error'] = "Wrong Username or Password";
                header("location: login.php");
            }
        }
    }
    //Check Login -----------------------------------------------------------------------------------------------

}
