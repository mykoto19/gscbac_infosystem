<?php 
session_start();
if (isset($_SESSION['AdminID']) && isset($_SESSION['AdminName'])) {

?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="">

	<title>Admin Page GSC-BAC Information System</title>

	<!-- Bootstrap core CSS -->
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">

  	<!-- Custom styles for this template -->
	<link href="../css/scrolling-nav.css" rel="stylesheet">
	  
	<link rel="stylesheet" href="../main1.css">


</head>
<body id="page-top">

	<!-- Navigation -->
  	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    	<div class="container">
      		<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="gsc.png" alt="Logo" style="width: 50px; margin-right: 15px;"> Records</a>
      		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
      		</button>
      		<div class="collapse navbar-collapse" id="navbarResponsive">
        		<ul class="navbar-nav ml-auto">
        			<li class="nav-item">
            			<a class="nav-link" href="#">Stored Documents</a>
          			</li>
          			<li class="nav-item">
            			<a class="nav-link" href="adminPage.php">Back to Home</a>
          			</li>
        		</ul>
      		</div>
    	</div>
  	</nav>

  	

  	<section style="margin: 0 50px 0 25px; background-color: whitesmoke;">
  		<div class="container-fluid">
			<div class="row">

			  	<!--Right Side-->
				  <div class="col-md-2">
						<div class="d-flex flex-column mb-3">
							<div class="list-group">
								<a href="#" class="list-group-item list-group-item-action list-group-item-dark">Departments/Offices</a>
								<a href="#" class="list-group-item list-group-item-action">CBM</a>
								<a href="#" class="list-group-item list-group-item-action">CCJE</a>
								<a href="#" class="list-group-item list-group-item-action">CEIT</a>
								<a href="#" class="list-group-item list-group-item-action">CTE/CAS</a>
								<a href="#" class="list-group-item list-group-item-action">CST</a>
								<a href="#" class="list-group-item list-group-item-action">Baterna</a>
								<a href="#" class="list-group-item list-group-item-action">Mosqueda</a>
								<a href="#" class="list-group-item list-group-item-action">Accounting Office</a>
								<a href="#" class="list-group-item list-group-item-action">OSDS</a>
								<a href="#" class="list-group-item list-group-item-action">Cashier</a>
								<a href="#" class="list-group-item list-group-item-action">Library</a>
							</div>
						</div>
				  </div>
			  	 
				<!--Main Content-->
				  <div class="col-md-10 bg-secondary" style="padding-left: 100px;">Records Show Here</div>
				  
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