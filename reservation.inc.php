<?php
session_start();





$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'mishtidb');

    $user= $_SESSION['user_id'];
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $date= $_POST['date'];
    $time= $_POST['time'];
    $foodname=$_POST['foodname'];
    $quantity=$_POST['quantity'];
    $guests= $_POST['num_guests'];
    $tele = $_POST['tele'];
    $comments = $_POST['comments'];
    
    if($guests==1 || $guests==2){
        $tables=1;
    }
    else{
    $tables=ceil(($guests-2)/2);
    }
    
$s="select * from reservation where time_zone='$time' AND rdate='$date'";

$result=mysqli_query($con,$s);

$num= mysqli_num_rows($result);
if($num>=100){
    header('location:failure.php');
}
else{
$sql = "INSERT INTO reservation(f_name, l_name, num_guests, num_tables, rdate, time_zone,foodname,quantity, telephone, comment, user_fk) VALUES('$fname', '$lname', '$guests', '$tables', '$date', '$time','$foodname','$quantity' ,'$tele', '$comments', '$user')";
//$reg="insert into usertable(name, password) values ('$name','$pass')";
//mysqli_query($con,$reg);

mysqli_query($con,$sql);
header('location:success.php');

}
//echo $tables;

?>
    