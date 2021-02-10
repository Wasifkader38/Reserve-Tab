<?php
session_start();
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Reservation</title>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="alert/dist/sweetalert-dev.js"></script>
        <script type="text/javascript">
            function JSalert(){
	       swal("Opps!", ", You must log in first!", "info");
                }
            <?php
       // echo   JSalert();      ;
     ?>
            </script>
        <link rel="stylesheet" href="alert/dist/sweetalert.css">
        <link rel="shortcut icon" href="favicon2.ico" />
        <style>
            
            h3{
                
            }
            h1 {text-align: center;}
            p {text-align: center;}
            
            
        </style>
        <meta charset="UTF-8">
	<title>ReserveTab - Categories!</title>

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


	<?php require('chunks/register-modal.php'); ?>


	<?php require('chunks/info-modal.php'); ?>


	<?php require('chunks/navbar.php'); ?>


	<?php require('chunks/banner-slider.php'); ?>
    
        




        <?php 
                echo "<script>JSalert();</script>";
        ?>




        
        <script
	  src="https://code.jquery.com/jquery-3.4.1.min.js"
	  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	  crossorigin="anonymous"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="js/loaders.js"></script>
    <script src="js/ajax.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
        
 
    </body>

</html>