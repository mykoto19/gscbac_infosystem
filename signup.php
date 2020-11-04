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

    <link herf="style1.css" rel="stylesheet">

    <style>
        section div.container {
            margin: 0px 100px 0px 100px;
            padding: 0px 50px 0px 50px;
            border: 10px;
            background-color: orange;
        }

        .error {
            background: #F2DEDE;
            color: #A94442;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
        }
        .success {
            background: #D4EDDA;
            color: #40754C;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
        }

        h1 {
          font-family: Helvitica;
        }
    </style>
<!--
    border-style: double;
            border-width: 5px;
-->


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
  	<div class="container mt-0">
      <div class="d-flex flex-column mb-3">
        <div class="p-3 text-center">
            <h1><b>Sign Up</b></h1>
            <p>Please fill in this form to sign up for bidding.</p>	
        </div>
      
        <div class="row">
          <div class="p-5 col-8-lg mx-auto" style="background-color: #f1f1f1; box-shadow: 10px 10px;">

            <form action="signup_check.php" method="post">

              <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
              <?php } ?>

              <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
              <?php } ?>

              <div class="form-group">
                <label for="name"><b>Company/Supplier Name:</b></label>
                <?php if (isset($_GET['name'])) { ?>
                  <input type="text"
                         class="form-control" 
                         placeholder="Enter Supplier Name" 
                         name="name" 
                         value="<?php echo $_GET['name']; ?>">
                <?php }else{ ?>
                  <input type="text"
                         class="form-control" 
                         placeholder="Enter Supplier Name" 
                         name="name"><br>
                <?php }?>

                <label for="rname"><b>Representative Name:</b></label>
                <?php if (isset($_GET['fname'])) { ?>
                  <input type="text"
                         class="form-control" 
                         placeholder="Enter Firstname" 
                         name="fname" 
                         value="<?php echo $_GET['fname']; ?>">
                <?php }else{ ?>
                  <input type="text"
                         class="form-control" 
                         placeholder="Enter Firstname" 
                         name="fname"><br>
                <?php }?>

                <?php if (isset($_GET['lname'])) { ?>
                  <input type="text"
                         class="form-control" 
                         placeholder="Enter Lastname" 
                         name="lname" 
                         value="<?php echo $_GET['lname']; ?>">
                <?php }else{ ?>
                  <input type="text"
                         class="form-control" 
                         placeholder="Enter Lastname" 
                         name="lname"><br>
                <?php }?>

                <label for="emailAd"><b>Email:</b></label>
                <?php if (isset($_GET['emailAd'])) { ?>
                  <input type="email"
                         class="form-control" 
                         placeholder="Enter Email" 
                         name="emailAd" 
                         value="<?php echo $_GET['emailAd']; ?>">
                <?php }else{ ?>
                  <input type="email"
                         class="form-control" 
                         placeholder="Enter Email" 
                         name="emailAd"><br>
                <?php }?>


                <label for="psw"><b>Password:</b></label>
                <input type="password" 
                       class="form-control" 
                       placeholder="Enter Password" 
                       name="psw">
                <br>
                <label for="psw_repeat"><b>Repeat Password:</b></label>
                <input type="password" 
                       class="form-control" 
                       placeholder="Repeat Password" 
                       name="psw_repeat">
                <br>

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Sign Up</button>
                  <button type="reset" class="btn btn-primary">Cancel</button>
                </div>
                <div>
							    <a href="suppLogin.php">Already have an account?</a>
						    </div>
              </div>
            </form>
          </div>
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

   <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>
</html>