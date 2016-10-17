<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/style2.css">
		<title>Redesign Website</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 main-header">
					<!-- Navigation Menu -->
					<?php require_once('nav.php'); ?> 
					
					<div class="col-sm-9 header2-right">
					<p>Collectively, Wynn Las Vegas and Encore hold more Forbes Travel Guide award-winning restaurants than any other resort in North America. From fine to casual dining, vegan and healthy eating options we have something to please any palate. There are also a number of resort bars and lounges to choose from, each offering unique scenery, menus and entertainment.  </p>
					<br>
					<p>DINNER & SHOW PAIRINGS</p>
					<p>Create the perfect evening with a dinner and show pairing that combines specially-created, multi-course menus with a ticket to see the award-winning aqua show, Le Rêve – The Dream, or the music spectacular named the "Best Musical Production Show" in Las Vegas, Steve Wynn's ShowStoppers. </p>
					</div>
					<div class="col-sm-3 header2-left">
							<p>FINE DINING</p>
							<p>CASUAL DINING</p>
							<p>VEGAN DINING</p>
							<p>BARS & LOUNGES</p>
							<p>SPECIAL EVENTS</p>
							<p>CELEBRATION CAKES</p>
							<p>GROUP DINING</p>
					
					</div>
				</div>

			</div>
			
			<div class="row">
				<div class="col-sm-12 footer">
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 small-img" style="position:relative; top:-40px;">
							<img class="img-responsive" src="images/dining1.jpg" alt="food" style="width:300px; height:210px;">
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 small-img" style="position:relative; top:-40px;">
							<img class="img-responsive" src="images/dining2.jpg" alt="food" style="width:300px; height:210px;">
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 small-img" style="position:relative; top:-40px;">
							<img class="img-responsive" src="images/dining3.jpg" alt="food" style="width:300px; height:210px;">
						</div>
						
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