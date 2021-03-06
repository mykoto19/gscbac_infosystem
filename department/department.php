<!DOCTYPE html>
<html lang="en-US">
<head>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="">

	<title>GSC-BAC Information System</title>

	<link rel="stylesheet" href="../style.css">

	<!-- Bootstrap core CSS -->
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">

  	<!-- Custom styles for this template -->
	  <link href="../css/scrolling-nav.css" rel="stylesheet">
	  
	  <link rel="stylesheet" href="../main1.css">

  	<style>
	
		body {
			background-color: #9AD3BC;
		}

    	.error {
      		background: #F2DEDE;
      		color: #A94442;
      		padding: 10px;
      		width: 95%;
      		border-radius: 5px;
      		margin: 20px auto;
		}
		
		.card {
			background-color: #FDD53A;
			border-radius: 25px;
			padding: 10px 0 40px 0;
			box-shadow: 10px 10px;
		}
  	</style>
</head>
<body id="page-top">

	 <!-- Navigation -->
  	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    	<div class="container">
	      	<a class="navbar-brand js-scroll-trigger" href="../index.html"><img src="gsc.png" alt="Logo" style="width: 50px; margin-right: 15px;"> GSC-BAC Information System</a>
	      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	        	<span class="navbar-toggler-icon"></span>
	      	</button>
	      	<div class="collapse navbar-collapse" id="navbarResponsive">
	        	<ul class="navbar-nav ml-auto">
	          	<li class="nav-item">
	            	<a class="nav-link js-scroll-trigger" href="../Login.html">Back to Login Page</a>
	          	</li>
	        	</ul>
	      	</div>
    	</div>
  	</nav>

  	<section class="container-fluid col-8 mx-auto">
		<div class="card">
			<div class="card-body">
				<div class="container">
					<div class="text-center">
						<h1 class="card-title">Department Login</h1>
						<p class="lead">Please login your credentials</p>
					</div>
				</div>

				<br>

				<div class="container-fluid">
					<div class="row">      
						<div class="col-8-lg mx-auto">

							<form action="PHPdeptLogin.php" method="post">
								<?php if (isset($_GET['error'])) { ?>
									<p class="error"><?php echo $_GET['error']; ?></p>
								<?php } ?>
								<div class="form-group">
									<label for="usr"><b>Department Name:</b></label>
									<input type="text" class="form-control" name="usr" placeholder="Enter your Department Name">
									<br>
									<label for="pwd"><b>Password:</b></label>
									<input type="password" class="form-control" placeholder="Enter password" name="pwd">
								</div>
								<div class="form-group form-check col-md-8">
									<label class="form-check-label">
										<input class="form-check-input" type="checkbox" id="remember"> Remember me
									</label>
								</div>
								<div class="text-center">
									<button type="submit" class="btn btn-primary">Login</button>
									<button type="reset" class="btn btn-primary">Reset</button>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
  	</section>

  	<footer class="py-4">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; GSC-BAC Information System 2020</p>
    </div>
    <!-- /.container -->
  </footer>

   <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="../js/scrolling-nav.js"></script>

</body>
</html>