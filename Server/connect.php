<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "marathon";

    //เชื่อมต่อ
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //Check
    if (!$conn){
        die("Connection failed" . mysqli_connect_error());
    }else{
    }

?>