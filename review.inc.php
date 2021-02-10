<?php
session_start();





$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'mishtidb');

    $user= $_SESSION['user'];
    $review = $_POST['reviews'];
    
    
    

$sql = "INSERT INTO review(fname, description) VALUES('$user', '$review')";
//$reg="insert into usertable(name, password) values ('$name','$pass')";
//mysqli_query($con,$reg);

mysqli_query($con,$sql);
header('location:index.php');


//echo $tables;

?>
    