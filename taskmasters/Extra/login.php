<!DOCTYPE html>
<html lang="en">


<?php include 'includes/head.php'; ?>

<body>
	<?php include 'includes/header.php'; ?>
	<!-- Section: Register -->
    <section id="service" class="home-section text-center bg-login">
		
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Log In</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
		<div class="col-sm-4 col-md-4">
		</div>		
            
         <div class="col-sm-4 col-md-4"> 
		<form action = "login.php" method = "post" class="form-horizontal" role="form">
			
  
  <div align="center" class="form-group ">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name = "email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name = "password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  </div>
  
  
  

     <div class="col-sm-4 col-md-4">
  </div>       
		
	</div>	
	<input type = "submit"  value = "Login">
	<!-- <button type="button" class="btn btn-submit btn-warning btn-lg">Login</button> -->
	<br />
	<br />
	<a href = "sign.php">Register</a>
	</form>	
	</section>
	<!-- /Section: Regisgter -->

	<!-- Section: about -->
   
	<!-- /Section: contact -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					<!-- <p>&copy;Copyright 2014 - Squad. All rights reserved.</p> -->
				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>

</body>

</html>
