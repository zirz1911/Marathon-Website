<?php
    session_start();
    include('../../Server/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="../../style/css/bootstrap.css">
</head>

<body>


    <div class="header">
        <Center><h2>Add Event Information</h2></Center>
    </div>
 
    <form action="add_event_information_db.php" method="post" class="container">
        <?php include('../../errors.php'); ?>
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
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="col-md-6">
            <label for="surname">Lenght</label>
            <input type="text" name="lenght" class="form-control">
        </div>

        <div class="input-group">
            <button type="submit" name="add_information" class="btn btn-primary btn-lg" style="margin-top: 10px;">Add</button>
        </div>

    </div> 
    </form>

</body>

</html>