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
  	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  	<!-- Custom styles for this template -->
  	<link href="css/scrolling-nav.css" rel="stylesheet">
</head>
<body id="page-top">


	<!-- Navigation -->
  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
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
            			<a class="nav-link js-scroll-trigger" href="adminActivities.html">Activities</a>
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

  	<header class="bg-secondary text-white">
    	<div class="container text-center">
      		<h1>Guimaras State College</h1>
      		<h1 class="display-4">Bids and Awards Committee</h1>
      		<h1 class="display-4">Information System</h1>
    	</div>
  	</header>

  	<section id="activities">
    	<div class="container">
      		<div class="row">
        		<div class="col-lg-8 mx-auto">
          			<h2>About this page</h2>
          			<p class="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p>
          			<ul>
            			<li>Clickable nav links that smooth scroll to page sections</li>
            			<li>Responsive behavior when clicking nav links perfect for a one page website</li>
            			<li>Bootstrap's scrollspy feature which highlights which section of the page you're on in the navbar</li>
            			<li>Minimal custom CSS so you are free to explore your own unique design options</li>
          			</ul>
        		</div>
      		</div>
   		</div>
  	</section>


  	<!-- Footer -->
  	<footer class="py-5 bg-dark">
    	<div class="container">
      		<p class="m-0 text-center text-white">Copyright &copy; GSC-BAC Information System 2020</p>
    	</div>
    <!-- /.container -->
  	</footer>

  	<!-- Bootstrap core JavaScript -->
  	<script src="vendor/jquery/jquery.min.js"></script>
  	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  	<!-- Plugin JavaScript -->
  	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  	<!-- Custom JavaScript for this theme -->
  	<script src="js/scrolling-nav.js"></script>

</body>
</html>

<?php 

}else{
	header("Location: adminLogin.php");
	exit();
}

?>