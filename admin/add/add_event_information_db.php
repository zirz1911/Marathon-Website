<?php 
    session_start();
    include('../../Server/connect.php');

    $errors = array();

    if (isset($_POST['add_information'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $lenght = mysqli_real_escape_string($conn, $_POST['lenght']);

        //Check Empty
        if(empty($name)){
            array_push($errors, "Name is required");
            $_SESSION['error'] = "Name is required";
        }

        if(empty($lenght)){
            array_push($errors, "Lenght is required");
            $_SESSION['error'] = "Lenght is required";
        }

        //INSERT REGISTER INFORMATIONx1
        if (count($errors) == 0){

            $sql = "INSERT INTO event_information (name, lenght) VALUES ('$name', '$lenght')";
            mysqli_query($conn, $sql);

            $_SESSION['name'] = $name;
            $_SESSION['success'] = "Add Success";
            header('location: ../event_information.php');
        } else {
            header("location: add_event_information.php");
        }
    }

?>