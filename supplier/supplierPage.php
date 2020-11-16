<?php 
session_start();
if (isset($_SESSION['supplierID']) && isset($_SESSION['companyName'])) {

?>


<!DOCTYPE html>
<html lang="en-US">
<head>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="">

	<title>Client GSC-BAC Information System</title>

	<link rel="stylesheet" href="../style.css">

	<!-- Bootstrap core CSS -->
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">

  	<!-- Custom styles for this template -->
	<link href="../css/scrolling-nav.css" rel="stylesheet">
	  
	<link rel="stylesheet" href="../main1.css">

	<style>
		body {
			background-color: #f1f1f1;
		}

        section {
            margin: 0 75px 0 75px;
        }
	</style>

</head>
<body id="page-top">

    

	 <!-- Navigation -->
  	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    	<div class="container">
      	<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="gsc.png" alt="Logo" style="width: 50px; margin-right: 15px;"> GSC-BAC Information System</a>
      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        	<span class="navbar-toggler-icon"></span>
      	</button>
      	<div class="collapse navbar-collapse" id="navbarResponsive">
        	<ul class="navbar-nav ml-auto">
          	<li class="nav-item">
            	<a class="nav-link js-scroll-trigger" href="suppLogout.php">Logout</a>
          	</li>
        	</ul>
      	</div>
    	</div>
      </nav>
      
    <header style="height:120px; padding: 100px;">
    	<div class="container text-center">
      		<h1 class="display-5">Welcome to the Page <?php echo $_SESSION['companyName']; ?></h1>
    	</div>
	</header>
	  
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto">
				<h3>This is a content</h3>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
					  Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, 
                      doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
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

<?php 

}else{
	header("Location: suppLogin.php");
	exit();
}

?>