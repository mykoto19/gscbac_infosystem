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

  	<!-- Custom styles for this template -->
	<link href="../css/scrolling-nav.css" rel="stylesheet">
	  
	<link rel="stylesheet" href="../main1.css">
    

</head>
<body id="page-top">

	<!-- Navigation -->
  	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    	<div class="container">
      		<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="gsc.png" alt="Logo" style="width: 50px; margin-right: 15px;"> Manage Items</a>
      		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
      		</button>
      		<div class="collapse navbar-collapse" id="navbarResponsive">
        		<ul class="navbar-nav ml-auto">
          			<li class="nav-item">
            			<a class="nav-link" href="adminPage.php">Back to Home</a>
          			</li>
        		</ul>
      		</div>
    	</div>
  	</nav>

  	<section style="margin: 0 75px 0 75px;">
  		<div class="container-fluid">
  		    <div class="row">
              <div class="col-lg-2 mx-auto bg-warning">
                    <div class="text-center">
                       <h4>Left Content</h4>
                    </div>
  		        </div>
  		        <div class="col-lg-8 mx-auto bg-info">
                    <div class="text-light" style="padding: 0 50px 0 50px;">
                       <h4>Middle Content</h4>
                       <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
					  Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, 
                      doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>

                      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
					  Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, 
                      doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
                    </div>
  		        </div>
                <div class="col-lg-2 mx-auto bg-warning">
                    <div class="text-center">
                       <h4>Right Content</h4>
                    </div>
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