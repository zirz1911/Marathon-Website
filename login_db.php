<?php 
    session_start();
    include('Server/connect.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($username)) {
            array_push($errors, "Username is required");
        }

        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {

            $query = "SELECT * FROM user WHERE username = '$username' AND user_password = '$password' ";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);
                $_SESSION['username'] = $username;
                $_SESSION["user_level"] = $row["user_level"];

                if($_SESSION["user_level"]=="A"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
                    
                    $_SESSION['success'] = "Your are now logged in as Admin";
                    Header("Location: admin/index_admin.php");

                  }

                  if ($_SESSION["user_level"]=="M"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
                    $_SESSION['success'] = "Your are now logged in as User";
                    Header("Location: user/index_user.php");

                  }
            } else {
                array_push($errors, "Wrong Username or Password");
                $_SESSION['error'] = "Wrong Username or Password!";
                header("location: login.php");
            }
        } else {
            array_push($errors, "Username & Password is required");
            $_SESSION['error'] = "Username & Password is required";
            header("location: login.php");
        }
    }
?>