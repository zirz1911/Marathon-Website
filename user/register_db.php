<?php 
    session_start();
    include('Server/connect.php');

    $errors = array();

    if (isset($_POST['reg_user'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $surname = mysqli_real_escape_string($conn, $_POST['surname']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
        $idcard = mysqli_real_escape_string($conn, $_POST['idcard']);
        $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);

        //Check Empty
        if(empty($username)){
            array_push($errors, "Username is required");
            $_SESSION['error'] = "Username is required";
        }

        if(empty($name)){
            array_push($errors, "Name is required");
            $_SESSION['error'] = "Name is required";
        }

        if(empty($surname)){
            array_push($errors, "Surname is required");
            $_SESSION['error'] = "Surname is required";
        }

        if(empty($password_1)){
            array_push($errors, "Password is required");
            $_SESSION['error'] = "Password is required";
        }

        if($password_1 != $password_2){
            array_push($errors, "Password not match");
            $_SESSION['error'] = "Password not match";
        }

        if(empty($idcard)){
            array_push($errors, "ID is required");
            $_SESSION['error'] = "ID is required";
        }

        if(empty($birthday)){
            array_push($errors, "Birthday is required");
            $_SESSION['error'] = "Birthday is required";
        }

        //Check Already have
        $user_check_query = "SELECT * FROM user WHERE username = '$username' OR user_id_card = '$idcard' ";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if($result){
            if($result['username'] === $username) {
                array_push($errors, "Username already exists");
                $_SESSION['error'] = "Username already exists";
            }
            if($result['user_id_card'] === $idcard) {
                array_push($errors, "ID already exists");
                $_SESSION['error'] = "ID already exists";
            }
        }

        //INSERT REGISTER INFORMATIONx1
        if (count($errors) == 0){

            $sql = "INSERT INTO user (username, user_namee, user_surname, user_password, user_id_card, user_birthday, user_level) VALUES ('$username', '$name', '$surname', '$password_1', '$idcard', '$birthday', 'M')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index_user.php');
        } else {
            header("location: register.php");
        }
    }

?>