<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css\style1.css">
		<title>Redesign Website</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<!-- Navigation Menu -->
					<?php require_once('nav.php'); ?> 
			</div>
			<div class="row">
			  <div class="col-sm-3 left-side-bar">
					<h4>WYNN RESORT ROOMS</h4>
					<h4>WYNN TOWER SUITES</h4>
					<h4>ENCORE RESORT ROOMS</h4>
					<h4>ENCORE TOWER SUITES</h4>
					<h4>EXCLUSIVES & PACKAGES</h4>
					<h4>WYNN RATE PROMISE</h4>
					<h4>HOTEL & AIR</h4>
					<br></br>
					<p>Wynn Resorts hold more Forbes Travel Guide Five Star awards than any other independent hotel company in the world and hold more Forbes Travel Guide Five Star awards than any other Las Vegas resort.</p>
					<p>Wynn Resorts hold more Forbes Travel Guide Five Star awards than any other independent hotel company in the world and hold more Forbes Travel Guide Five Star awards than any other Las Vegas resort.</p>
					
			  </div>
			  <div class="col-sm-9 main-page-content">
				<div>
					<img class="img-responsive" src="images\wynnroom1.jpg" alt="room" id="main-page-img">
				</div>
			  </div>
			</div>
			
			<!-- Footer -->
			<?php require_once('footer.php'); ?>
			
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
