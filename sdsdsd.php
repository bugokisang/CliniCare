<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include ('head.php');
	?>
<link rel="icon" type="image/png" href="img/cclogo1.png"/>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: #880000;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="img/PUP.png" alt="Logo" style="width:40px;">&nbsp;&nbsp;CliniCare</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
          </ul>
          <span class="navbar-text">
            <!-- Put your text here -->
          </span>
      </div>
      </div>
  </nav>

	<!-- container -->
	<!-- <div class="container" style="border: 1px solid black;"> -->
		<div class="row">
    		<div class="col-4" style="background-color: #C14F4F; height: 638px;" id="log-container">
    			<!-- col-4  Login form-->
    			<div class="container">
    				<div class="text-center p-3">
    					<img src="img/PUP.png" height="100px" width="100px" style="margin-top: 20%;">	
    				</div>
    				<div class="card-light">
    					<div class="card card-body login-card-body mb-5" style="background: #3E0001; color: white; opacity:0.9;">
    						<p class="login-box-msg">Sign in</p>
    						<form action="index.php" method="post" enctype ="multipart/form-data">
    							
    							<div class="input-group input-group-lg mb-3">
         			 				<input type="email" class="form-control" placeholder="Email" name="email">
          							<span class="input-group-text"><i class="fas fa-envelope fa-lg"></i></span>
        						</div>

        						<div class="input-group input-group-lg mb-3">
         			 				<input type="password" class="form-control" placeholder="Password" name="password">
          							<span class="input-group-text"><i class="fas fa-lock fa-lg"></i></span>
        						</div>

        						<div class="row">
          							<div class="col-8">
            							<div class="icheck-primary">
              								<input type="checkbox" id="remember">
              								<label for="remember">
                								Remember Me
              								</label>
           					 			</div>
          							</div>
          							<!-- /.col -->
          							<div class="col-4" style="display: block; text-align: right;">
            							<button type="submit" class="btn btn-primary btn-block" name="login">Sign In</button>
          							</div>
          							<!-- /.col -->
        						</div>
    						</form>
    						<p class="mb-1 text-left">
        						<a href="forgot-password.html">I forgot my password</a>
      					</p>
    					</div>
    				</div>
    			</div>
    			<!-- /Login -->
    		</div>
    		<div class="col-8" style="background-color: #C14F4F;">
    			<!-- col-8 Carousel-->
    			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  					<ol class="carousel-indicators">
    					<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" ></li>
    					<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="active"></li>
    					<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  					</ol>
  					<div class="carousel-inner">
    					<div class="carousel-item active">
      						<img src="img/clinic1.jpg" class="d-block w-100" alt="..." style="min-height: 637px;">
    					</div>
    					<div class="carousel-item">
      						<img src="img/carousel-2.jpg" class="d-block w-100" alt="..." style="min-height: 637px;">
    					</div>
    					<div class="carousel-item">
      						<img src="img/carousel-3.jpg" class="d-block w-100" alt="..." style="min-height: 637px;">
    					</div>
  					</div>
  					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
    					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    					<span class="visually-hidden">Previous</span>
  					</a>
  					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
    					<span class="carousel-control-next-icon" aria-hidden="true"></span>
    					<span class="visually-hidden">Next</span>
  					</a>
				</div>
    			<!-- /Carousel -->
    		</div>
  		</div>
	<!-- </div> -->
	<!-- /container -->
</body>
</html>
<?php
	include ('script.php');
?>