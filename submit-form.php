<?php

session_start();

$username = "root";
$password = "";
$server = "localhost";
$db = "ap architects & engineers";

$con = mysqli_connect($server, $username, $password, $db);

if($con){
    echo "onnected";
}else{
    echo "not";
}


if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $city = $_POST['city'];
    $mobile = $_POST['mobile'];
    $planning = $_POST['planning'];
    $design = $_POST['design'];

    $rq = "INSERT INTO `submit-form` (`id`, `name`, `city`, `mobile`, `planning`, `design-req`) VALUES (NULL, '$name', '$city', '$mobile', '$planning', 'design')";
    $result= mysqli_query($con, $rq);
    if($result){
       header('location: placeholder.php');


}
}

