<?php 
session_start();
if (isset($_SESSION['AdminID']) && isset($_SESSION['AdminName'])) {

?>

<!DOCTYPE html>
<html lang="en-US">
<head>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="">

	<title>Admin Page GSC-BAC Information System</title>

	 <!-- Bootstrap core CSS -->
  	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  	<!-- Custom styles for this template -->
	  <link href="../css/scrolling-nav.css" rel="stylesheet">
	  
	  <link rel="stylesheet" href="../main.css">

</head>
<body id="page-top">


	<!-- Navigation -->
  	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    	<div class="container">
    		
      		<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="gsc.png" alt="Logo" style="width: 40px"> GSC-BAC Information System</a>

      		<label href="#" class="text-primary">Hi, <?php echo $_SESSION['AdminName'] ; ?></label>

      		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
      		</button>
      		<div class="collapse navbar-collapse" id="navbarResponsive">
        		<ul class="navbar-nav ml-auto">
          			<li class="nav-item">
            			<a class="nav-link js-scroll-trigger" href="adminRecord.php">Records</a>
          			</li>
          			<li class="nav-item">
            			<a class="nav-link js-scroll-trigger" href="adminActivities.php">Activities</a>
          			</li>
          			<li class="nav-item">
            			<a class="nav-link js-scroll-trigger" href="adminMonitoring.php">Monitoring</a>
          			</li>
          			<li class="nav-item">
            			<a class="nav-link js-scroll-trigger" href="adminLogout.php">Logout</a>
          			</li>
        		</ul>
      		</div>
    	</div>
  	</nav>

  	<header class="text-white">
    	<div class="container text-center">
      		
      		<h1>Administrator Page</h1>
      		
    	</div>
  	</header>

  	<section id="activities">
    	<div class="container">
      		<div class="row">
        		<div class="col-lg-8 mx-auto">
          			<h2>This Page</h2>
          			<p class="lead">This is a great place to talk about your webpage. 
					  This template is purposefully unstyled so you can use it as a boilerplate or starting point 
					  for you own landing page designs! This template features:</p>

          			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
					  Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, 
					  doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
        		</div>
      		</div>
   		</div>
  	</section>


  	<!-- Footer -->
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

<?php 

}else{
	header("Location: adminLogin.php");
	exit();
}

?>