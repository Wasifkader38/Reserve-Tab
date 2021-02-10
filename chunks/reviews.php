<?php

require('backends/connection-pdo.php');

$sql = 'SELECT * from review';

$query  = $pdoconn->prepare($sql);
$query->execute();
$arr_all = $query->fetchAll(PDO::FETCH_ASSOC);



$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'mishtidb');

$s="select * from review";

$result=mysqli_query($con,$s);

$num= mysqli_num_rows($result);


?>

<section class="freviews">

		<div class="section white center">
			<h3 class="header">What Our Customers Say</h3>
			<div class="carousel myreviews" style="margin-bottom: 35px;">
			    <a class="carousel-item" href="#one!">
			    	<div class="row">
					    <div class="col s12">
					      <div class="card-panel teal" style="background: #ee6e73 !important;">
					        <span class="white-text">"The food of this resturant is just like heaven for me! Its so delicious and tasty that I can't help going there every weekend!"<br>-<br> <strong>Wasif Kader</strong>
					        </span>
					      </div>
					    </div>
					  </div>
			    </a>
			    <a class="carousel-item" href="#two!">
			    	<div class="row">
					    <div class="col s12">
					      <div class="card-panel teal" style="background: #ee6e73 !important;">
					        <span class="white-text">This reservation system is great! Also from the  previous experience, the  atmosphere was chill and cool, the staff was also really friendly.<br>-<br> <strong>Nafiz Imtiaz</strong>
					        </span>
					      </div>
					    </div>
					  </div>
			    </a>
			    <a class="carousel-item" href="#three!">
			    	<div class="row">
					    <div class="col s12">
					      <div class="card-panel teal" style="background: #ee6e73 !important;">
					        <span class="white-text">"Excellent service!Looking forward to reserve again"<br>-<br> <strong>Fatema tuj johora Sananda</strong>
					        </span>
					      </div>
					    </div>
					  </div>
			    </a>
			    <a class="carousel-item" href="#four!">
			    	<div class="row">
					    <div class="col s12">
					      <div class="card-panel teal" style="background: #ee6e73 !important;">
					        <span class="white-text">"Just mind-blowing!!!"<br>-<br> <strong>Ibtid Rahman</strong>
					        </span>
					      </div>
					    </div>
					  </div>
			    </a>
			    <a class="carousel-item" href="#five!">
			    	<div class="row">
					    <div class="col s12">
					      <div class="card-panel teal" style="background: #ee6e73 !important;">
					        <span class="white-text">"The food of this resturant is just like heaven for me! Its so delicious and tasty that I can't help going there every weekend!"<br>-<br> <strong>Adiba Lia</strong>
					        </span>
					      </div>
					    </div>
					  </div>
			    </a>
			    <a class="carousel-item" href="#six!">
			    	<div class="row">
					    <div class="col s12">
					      <div class="card-panel teal" style="background: #ee6e73 !important;">
					        <span class="white-text"><?php echo $arr_all[$num-1]['description']; ?><br>-<br> <strong><?php echo $arr_all[$num-1]['fname']; ?></strong>
					        </span>
					      </div>
					    </div>
					  </div>
			    </a>
			    <a class="carousel-item" href="#seven!">
			    	<div class="row">
					    <div class="col s12">
					      <div class="card-panel teal" style="background: #ee6e73 !important;">
					        <span class="white-text">"The food of this resturant is just like heaven for me! Its so delicious and tasty that I can't help going there every weekend!"<br>-<br> <strong>Fahim Abrar</strong>
					        </span>
					      </div>
					    </div>
					  </div>
			    </a>
			  </div>
		</div>
	</section>