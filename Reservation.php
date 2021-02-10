<?php
session_start();

try {

    if (!file_exists('backends/connection-pdo.php' ))
        throw new Exception();
    else
        require_once('backends/connection-pdo.php' ); 
		
} catch (Exception $e) {

	$arr = array ('code'=>"0",'msg'=>"There were some problem in the Server! Try after some time!");

	echo json_encode($arr);

	exit();
	
}

if (!isset($_SESSION['user']) || !isset($_SESSION['user_id'])) {
	$_SESSION['msg'] = "You must Log In First to Order Food!";
	header('location: mustlogin.php');
	exit();
}

?>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Reservation</title>
        <script src="alert/dist/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="alert/dist/sweetalert.css">
        <link rel="shortcut icon" href="favicon2.ico" />
        <style>
            
            h3{
                
            }
            h1 {text-align: center;}
            p {text-align: center;}
            
            
        </style>
        <meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- <meta http-equiv="refresh" content="1"> -->

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
    <?php require('chunks/login-modal.php'); ?>
    
    <?php

        require('backends/connection-pdo.php');


        if (isset($_REQUEST['id'])) {

	$sql = 'SELECT * FROM food WHERE cat_id = "'.$_REQUEST['id'].'"';
	
            }    else {

	   $sql = 'SELECT * FROM food';

            }

        $query  = $pdoconn->prepare($sql);
        $query->execute();
$arr_all = $query->fetchAll(PDO::FETCH_ASSOC);



?>



	<?php require('chunks/register-modal.php'); ?>


	<?php require('chunks/info-modal.php'); ?>


	<?php require('chunks/navbar.php'); ?>


	<?php require('chunks/banner-slider.php'); ?>










	
    
    <div class="container">
    <h3 class="text-center" style="font-size:30px"><br>New Reservation<br></h3>   
    <div class="row">
        <div class="col-md-6 offset-md-3">   
 
        
          
    <div class="signup-form"  >
        
        
        
        <form action="reservation.inc.php" method="post">
            <div class="form-group" >
            <label>First Name</label>
                <input type="text" class="form-control" name="fname" placeholder="First Name" required="required">
                <br>
                <small class="form-text text-muted">First name must be 2-20 characters long</small>
            </div>
            <div class="form-group">
            <label>Last Name</label>
                <input type="text" class="form-control" name="lname" placeholder="Last Name" required="required">
                <small class="form-text text-muted">Last name must be 2-20 characters long</small>
            </div>   
            <div class="form-group">
            <label>Enter Date</label>
        	<input type="date" class="form-control" name="date" placeholder="Date" required="required">
            </div>
            <div class="form-group">
		<label>Enter Time Zone</label>
		<select class="form-control" name="time">
		<option>12:00 - 16:00</option>
		<option>16:00 - 20:00</option>
		<option>20:00 - 00:00</option>
		</select>
            </div>
            
            
            
            
            <div class="form-group">
                        <label for="food">Food </label>
                                <select class="form-control" id="foodname" name="foodname">
                                                                    <?php
                                            for ($i=0; $i < count($arr_all);$i=$i+1 ){
                                                ?>
                                                <option value="<?php echo $arr_all[$i]['fname'];?>"><?php echo $arr_all[$i]['fname'];?></option>
                                            <?php
                                            }
                                            ?>
										</select>
                            </div>
            
            
            <div class="form-group">
            <label>Enter Quantity</label>
        	<input type="number" class="form-control" min="1" name="quantity"  required="required">
                <small class="form-text text-muted">Minimum value is 1</small>
            </div>
            
            
            
            <div class="form-group">
            <label>Enter number of Guests</label>
        	<input type="number" class="form-control" min="1" name="num_guests" placeholder="Guests" required="required">
                <small class="form-text text-muted">Minimum value is 1</small>
            </div>
            <div class="form-group">
            <label for="guests">Enter your Telephone Number</label>
                <input type="telephone" class="form-control" name="tele" placeholder="Telephone" required="required">
                <small class="form-text text-muted">Telephone must be 6-20 characters long</small>
            </div>
            <div class="form-group">
            <label>Enter extra Comments</label>
                <textarea class="form-control" name="comments" placeholder="Comments" rows="3"></textarea>
                <small class="form-text text-muted">Comments must be less than 200 characters</small>
            </div>        
            <div class="form-group">
		
            </div>
            <div class="form-group">
            <button type="submit" name="reserv-submit" class="btn btn-dark btn-lg btn-block" >Submit Reservation</button>
            </div>
        </form>
        <br><br>
    </div>
        </div>
    
        
        <script
	  src="https://code.jquery.com/jquery-3.4.1.min.js"
	  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	  crossorigin="anonymous"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="js/loaders.js"></script>
    <script src="js/ajax.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
function JSalert(){
	swal("Congrats!", ", Your reservation is successful!", "success");
}
</script>
        
 
    </body>

</html>