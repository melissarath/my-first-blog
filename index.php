<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/style.css">
		<title>Redesign Website</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<header>
					<h1>Wynn Las Vegas</h1>
				</header>
			</div>
			<div class="row">
			<!-- Navigation Menu -->
				<?php require_once('nav.php'); ?> 
			</div>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				  <li data-target="#myCarousel" data-slide-to="1"></li>
				  <li data-target="#myCarousel" data-slide-to="2"></li>
				  <li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
				  <div class="item active">
					<img src="images/wynnlobby1.jpg" alt="hotel" width="460" height="400">
				  </div>

				  <div class="item">
					<img src="images/wynnlobby2.jpg" alt="hotel1" width="460" height="400">
				  </div>
				
				  <div class="item">
					<img src="images/wynnlobby3.jpg" alt="hotel2" width="460" height="400">
				  </div>

				  <div class="item">
					<img src="images/wynnlobby4.jpg" alt="hotel3" width="460" height="400">
				  </div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
			 </div>
			<div class="row">
				<!-- Footer -->
				<?php require_once('footer.php'); ?>
			</div>
			<div class="row">
				<div class="col-sm-3 small-img">
					<img class="img-responsive" src="images/image1.jpg" alt="lobby" style="width:100%; height:110px;">
				</div>
				<div class="col-sm-3 small-img">
					<img class="img-responsive" src="images/image2.jpg" alt="lobby" style="width:100%; height:110px;">
				</div>
				<div class="col-sm-3 small-img">
					<img class="img-responsive" src="images/image3.jpg" alt="lobby" style="width:100%; height:110px;">
				</div>
				<div class="col-sm-3 small-img">
					<img class="img-responsive" src="images/image4.jpg" alt="lobby" style="width:100%; height:110px;">
				</div>
			</div>
			
			<!--Start Modal -->
		  <div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
			
			  <!-- Modal content-->
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title">Contact Us</h4>
				</div>
				<div class="modal-body">
				  <form class="form" method="post" action="" name="contact" id="contact">
					  <div class="form-group"> 
							<div class="input-group">
							  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> 
							  <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" />
							  <span class="glyphicon"></span>
							</div>              
						  </div>   
						  
						  <div class="form-group">
							<div class="input-group">
							  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							  <input type="text" class="form-control" id="email" name="email" placeholder="E-Mail"/>
							  <span class="glyphicon"></span>
							</div>   
						  </div>
						  
						  <div class="form-group">
							<div class="input-group">
							  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
							  <input type="text" class="form-control" id="telefon" name="Phone Number" placeholder="Telefon"/> 
							  <span class="glyphicon"></span>  
							</div>
						  </div>
						  
						  <div class="form-group">
							<div class="input-group">
							  <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							  <textarea type="text" id="message" class="form-control" name="message" rows="10" cols="40" placeholder="Comment"></textarea>
							  <span class="glyphicon"></span>
							</div>
						  </div>
					</form>    
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-info" data-dismiss="modal">Close</button> 
				  <button type="submit" id="submit" class="btn btn-primary">Submit</button> 
				</div>
			  </div>
			  
			</div>
		  </div>
		  <!-- End Modal -->			
			
		</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
	
</html>
