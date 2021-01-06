<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucessful</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <script>
    $('#carousel-indicator').carousel({});
</script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<div class="row">
    <div class="col-lg-12 col-md-12 col-12 py-5 ">
        <div class="card bg-light">
            <div class="card-body">
                <h3 class= "text-center text-dark">Your query is sucessfully sent!!</h3>
                <p class="card-text text-dark text-center">Thank you for contacting AP Architects and Engineers, we will contact you soon. Have a Great Day ahead!!</p>
                <div class="text-center">
                <form action="" method="post" >
                    <button name="button" class="btn btn-outline-success PlaceholderButtonEdit text-center w-50">OK</button>
                </form>
                </div>
            </div>
        </div>
</div>
</div>
</div>
</body>
</html>

<?php

$username = "root";
$password = "";
$server = "localhost";
$db = "ap architects & engineers";

$con = mysqli_connect($server, $username, $password, $db);


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    header('location: index.php');
}


?>