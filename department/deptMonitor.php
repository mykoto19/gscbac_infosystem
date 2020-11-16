<?php 
session_start();
if (isset($_SESSION['deptID']) && isset($_SESSION['deptName'])) {

?>


<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="">

	<title><?php echo $_SESSION['College']; ?> GSC-BAC Information System</title>

	<!-- Bootstrap core CSS -->
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">

  	<!-- Custom styles for this template -->
  	<link href="../css/scrolling-nav.css" rel="stylesheet">

	<link rel="stylesheet" href="../main1.css">

</head>
<body>

	<?php 
		require_once '../core/initdb.php';
	?>

	<!-- Navigation -->
  	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    	<div class="container">
      		<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="gsc.png" alt="Logo" style="width: 50px; margin-right: 15px;"> <?php echo $_SESSION['College']; ?></a>
      		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
      		</button>
      		<div class="collapse navbar-collapse" id="navbarResponsive">
        		<ul class="navbar-nav ml-auto">
          			<li class="nav-item">
            			<a class="nav-link js-scroll-trigger" href="deptPage.php">Back</a>
          			</li>
        		</ul>
      		</div>
    	</div>
	  </nav>

	  <header style="height:120px; padding: 100px;">
    	<div class="container text-center">
      		<h1 class="display-5">Projects</h1>
    	</div>
  	</header>
	  
	  <section>
	  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>About The Page</h2>
          <p class="lead">Guimaras State College Bids and Awards Committee office is the one who 
			  mediates all of the transactions between the End user and the supplier. 
			  Its purpose is to give enough information to the End user and Supplier on what is the 
			  algorithm of the transaction.
		  </p>
        </div>
      </div>
    </div>
  </section>
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
	header("Location: department.php");
	exit();
}

?>