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

	<style>
		.card {
			margin: 0 0 0 10px;
			padding: 0 10px 50px 10px;
		}
	</style>
</head>
<body id="page-top">

	<!-- Navigation -->
  	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    	<div class="container">
      		<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="gsc.png" alt="Logo" style="width: 50px; margin-right: 15px;"> BAC Activities</a>
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

  	 

  	<section style="margin: 25px 0 0 50px;">
  		<div class="container-fluid">
  			<div class="row">
    			<div class="col-sm-9 mx-auto">
      				<h2>Featured Schedule for the Latest Project</h2>
					<h6>Project #</h6>
      				<div class="table-responsive">
      				<table class="table table-hover">
    					<thead class="thead-dark">
      						<tr>
        						<th>Schedule Dates</th>
        						<th>Day/Time</th>
        						<th>Activities</th>
        						<th>Timeline</th>
      						</tr>
    					</thead>
    					<tbody>
      						
      						<tr>
        						<td>June 22, 2020</td>
        						<td></td>
        						<td>Published on PhilGeps</td>
        						<td>Day 1</td>
      						</tr>
      						<tr>
        						<td>June 22-30, 2020</td>
        						<td>24/7 of the week</td>
        						<td>Online Purchase of Bid Documents / Issuance of Bid Documents</td>
        						<td>Day 1-9</td>
      						</tr>
      						<tr>
        						<td>June 30, 2020</td>
        						<td>9:30am</td>
        						<td>Deadline of Submission of Receipts of Bids/Opening of Bids</td>
        						<td>Day 9</td>
							</tr>
							<tr>
        						<td>July 1, 2020</td>
        						<td>1 Day</td>
        						<td>Bid Evaluation</td>
        						<td>Day 10</td>
							</tr>
							<tr>
        						<td>July 2, 2020</td>
        						<td>1 Day</td>
        						<td>Letter to the Lowest Calculated Bidder/Letter Conduct Post-Qualification</td>
        						<td>Day 11</td>
							</tr>
							<tr>
        						<td>July 3-9, 2020</td>
        						<td>7 Days</td>
        						<td>Post-qualification</td>
        						<td>Day 12-18</td>
							</tr>
							<tr>
        						<td>July 10-19, 2020</td>
        						<td>10 Days</td>
        						<td>Approval of Resolution/ Issuance of Notice to Award</td>
        						<td>Day 19-28</td>
      						</tr>   
    					</tbody>
  					</table>
  					</div>
      				<div class="text-center">
       					<a href="#" class="btn btn-info btn-lg" role="button">See more schedules</a>
   				 	</div>
    			</div>
				
				<div class="col-sm-3 mx-auto">
					<div class="card bg-secondary">
						<div class="card-body">
							<h2>Featured Scheduled Projects</h2>
							<ol>
								<li>Project 1</li>
								<li>Project 2</li>
								<li>Project 3</li>
								<li>Project 4</li>
								<li>Project 5</li>
							</ol>

							<div class="text-center">
								<a href="#" class="btn btn-info btn-lg" role="button">New Items</a>
							</div>
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

</body>
</html>

<?php 

}else{
	header("Location: adminLogin.php");
	exit();
}

?>