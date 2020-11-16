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

  	<!-- Custom styles for this template -->
	<link href="../css/scrolling-nav.css" rel="stylesheet">
	  
	<link rel="stylesheet" href="../main1.css">

  	<style>
  		img.details{
  			height: 250px;
  			width: 300px;
  			margin: 15px auto;
		  }
		  
		section {
			margin: -75px 75px 0 100px;
		}

  	</style>

</head>
<body id="page-top">

	<?php 
		require_once '../core/initdb.php';

		$sql = "SELECT * FROM itemtbl WHERE featured = 1";

		
    	$featured = $db->query($sql);
	?>

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
            			<a class="nav-link js-scroll-trigger" href="deptMonitor.php">Projects</a>
          			</li>
          			<li class="nav-item">
            			<a class="nav-link js-scroll-trigger" href="deptLogout.php">Logout</a>
          			</li>
        		</ul>
      		</div>
    	</div>
  	</nav>

  	<header style="height:120px; padding: 100px;">
    	<div class="container text-center">
      		<h1 class="display-5"><?php echo $_SESSION['College']; ?></h1>
    	</div>
  	</header>

  	<section>
		  <!--
  		<div class="container-fluid" style="margin-top: -50px;">
  			<div class="row">
  				<div class="col-sm-8" style="padding-bottom: 35px;">
          			<label for="searchItem">Search: </label>
          			<input type="search" name="searchItem">
          			<input type="submit">
          		</div>
          	</div>
	-->
  			<div class="row">
  				
  				<!-- main content -->
				
  				<div class="col-md-8" style="background-color: whitesmoke;">
          
              		<h2 class="text-center">Featured Items</h2>
					<br>
					<br>
              		<div class="row">
              			<?php while($item = mysqli_fetch_assoc($featured)) : ?>
	                  		<div class="col-md-3">
	                    		<h4 class="text-center"><?= $item['itemName']; ?></h4>
	                    		<img src="<?= $item['itemImage']; ?>" alt="<?= $item['itemName']; ?>" style="height: 200px; width: 115%;">
	                    		<p class="list-price text-primary"><b>Selling Retailed Price: P<?= $item['itemCost']; ?></b></p>
	                    		<button type="button" class="btn btn-sm btn-success" onclick="detailsmod(<?= $item['itemID']; ?>)">Details</button>
	                  		</div> 
              			<?php endwhile; ?>  
               		</div>
				 
            	</div>

				<!-- right side bar -->
				<div class="col-md-4" style="padding-left: 125px;">				  
						<div class="d-flex flex-column mb-3">
							<div class="list-group">
								<a href="#" class="list-group-item list-group-item-action list-group-item-primary">Supplies</a>
								<a href="#" class="list-group-item list-group-item-action">Infrastructures</a>
								<a href="#" class="list-group-item list-group-item-action">Goods</a>
								<a href="#" class="list-group-item list-group-item-action">Services</a>
							</div>
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

  	<script>
      function detailsmod(id){
      	var data = {"id" : id};
      	jQuery.ajax({
      		url : <?= BASEURL; ?> +'../includes/detailsmod.php',
      		method : "post",
      		data : data,
      		success : function(data){
      			jQuery('body').append(data);
      			jQuery('#details-modal').modal('toggle');
      		},
      		error : function(){
      			alert("Something went wrong...");
      		}
      	});
      }
      
    </script>



</body>
</html>

<?php 

}else{
	header("Location: department.php");
	exit();
}

?>