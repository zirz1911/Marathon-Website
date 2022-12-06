<?php 
    session_start();
    include('../Server/connect.php');

    $errors = array();

    if (isset($_POST['reg_user'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $surname = mysqli_real_escape_string($conn, $_POST['surname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

        //Check Empty
        if(empty($name)){
            array_push($errors, "Name is required");
            $_SESSION['error'] = "Name is required";
        }

        if(empty($surname)){
            array_push($errors, "Surname is required");
            $_SESSION['error'] = "Surname is required";
        }

        if(empty($email)){
            array_push($errors, "Email is required");
            $_SESSION['error'] = "Email is required";
        }

        if(empty($password_1)){
            array_push($errors, "Password is required");
            $_SESSION['error'] = "Password is required";
        }

        if($password_1 != $password_2){
            array_push($errors, "Password not match");
            $_SESSION['error'] = "Password not match";
        }

        //Check Already have
        $user_check_query = "SELECT * FROM user WHERE email = '$email' ";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if($result){
            if($result['email'] === $email) {
                array_push($errors, "This Email has been used");
                $_SESSION['error'] = "This Email has been used";
            }
        }

        //INSERT REGISTER INFORMATIONx1
        if (count($errors) == 0){

            $sql = "INSERT INTO user (name, surname, email, user_password, user_level) VALUES ('$name', '$surname', '$email', '$password_1', 'M')";
            mysqli_query($conn, $sql);

            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in";
            header('location: index_user.php');
        } else {
            header("location: register.php");
        }
    }

?>