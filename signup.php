<!DOCTYPE html>
<html lang="en-US">
<head>
		
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="">

	   <title>GSC-BAC Sign Up</title>

    <link rel="stylesheet" href="style.css">

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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.html">Back To Dashboard</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section>
  	<div class="container">
  		<div class="text-center">
  				<h1>Sign Up</h1>
  				<p>Please fill in this form to sign up for bidding.</p>	
  		</div>
  	</div>
  	<br>
  	<div class="container">
  		<div class="row">
  			<div class="col-8-lg mx-auto">
  				<form action="/action.php">
  					<div class="form-group">
              <label for="name"><b>Company/Supplier Name:</b></label>
              <input type="text" class="form-control" placeholder="Enter Supplier Name" id="name" required>
              <br>
              <label for="rname"><b>Representative Name:</b></label>
              <input type="text" class="form-control" placeholder="First Name" id="fname" required>
              <input type="text" class="form-control" placeholder="Lastname Name" id="lname" required>
              <br>
  						<label for="email"><b>Email:</b></label>
    					<input type="email" class="form-control" placeholder="Enter Email" id="email" required>
    					<br>
    					<label for="psw"><b>Password:</b></label>
    					<input type="password" class="form-control" placeholder="Enter Password" id="psw" required>
    					<br>
    					<label for="psw-repeat"><b>Repeat Password:</b></label>
    					<input type="password" class="form-control" placeholder="Repeat Password" id="psw-repeat" required>
    					<br>

    					<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    					<div class="text-center">
    						<button type="submit" class="btn btn-primary">Sign Up</button>
      						<button type="reset" class="btn btn-primary">Cancel</button>
    					</div>
  					</div>
  				</form>
  			</div>
  		</div>
  	</div>
  </section>

  <footer class="py-4 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; GSC-BAC Information System 2020</p>
    </div>
    <!-- /.container -->
  </footer>

</body>
</html>