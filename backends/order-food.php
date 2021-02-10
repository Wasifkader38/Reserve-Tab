<?php

session_start();

try {

    if (!file_exists('connection-pdo.php' ))
        throw new Exception();
    else
        require_once('connection-pdo.php' ); 
		
} catch (Exception $e) {

	$arr = array ('code'=>"0",'msg'=>"There were some problem in the Server! Try after some time!");

	echo json_encode($arr);

	exit();
	
}



date_default_timezone_set("Asia/Dhaka");

$food_id = $_REQUEST['id'];

$user_name = $_SESSION['user'];

$user_id = $_SESSION['user_id'];

$order_id = "RSTGF" . strval(mt_rand(100000, 999999));

$timest = date("d:m:Y h:i:sa");


$sql = "INSERT INTO orders(order_id,user_id,food_id,user_name, timestamp) VALUES(?,?,?,?,?)";

$query  = $pdoconn->prepare($sql);

if ($query->execute([$order_id, $user_id, $food_id, $user_name, $timest])) {

	$_SESSION['msg'] = 'Order Placed! Your Order ID is : '.$order_id;

	header('location: ../foods.php');
	
} else {

	$_SESSION['msg'] = 'There were some problem in the server! Please try again after some time!';

	header('location: ../foods.php');

}