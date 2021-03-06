<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  <title>testing tutorial site</title>

  <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <link href="vendor/jquery/jquery.min.js">

    <style>
      img.details{
        height: 250px;
        width: 300px;
        margin: 15px auto;
      }
    </style>

    

</head>
<body id="page-top">

<?php
    require_once 'core/init.php';

    $sql = "SELECT * FROM products WHERE featured = 1";
    $featured = $db->query($sql);
  ?>


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
                  <a class="nav-link js-scroll-trigger" href="deptMonitor.php">Monitor Project</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#contact">Logout</a>
                </li>
            </ul>
          </div>
      </div>
    </nav>

    <header class="bg-secondary text-white">
      <div class="container text-center">
          <h1 class="display-4">College of *Name of College</h1>
      </div>
    </header>
    
    <section>
      <div class="container-fluid" style="margin-top: -50px;">
        <div class="row">
          <div class="col-sm-8" style="padding-bottom: 35px;">
                <label for="searchItem">Search: </label>
                <input type="search" name="searchItem">
                <input type="submit">
              </div>
            </div>
        <div class="row">
          <!-- left side bar -->
          <div class="col-md-2">Left Side Bar</div>
        
          <!-- main content -->
            <div class="col-md-8">
          
              <h2 class="text-center">Featured Items</h2>
              <div class="row">
              <?php while($product = mysqli_fetch_assoc($featured)) : ?>
                  <div class="col-md-3">
                    <h4 class="text-center"><?= $product['title']; ?></h4>
                    <img src="<?= $product['image']; ?>" alt="<?= $product['title']; ?>" style="height: 250px; width: 140%;">
                    <p class="list-price text-primary"><b>Selling Retailed Price: P<?= $product['price']; ?></b></p>
                    <button type="button" class="btn btn-sm btn-success" onclick="detailsmodal(<?= $product['id']; ?>)">Details</button>
                  </div>     
              <?php endwhile; ?>  
               </div>   
            </div>
          <!-- right side bar -->
          <div class="col-md-2">Right Side Bar</div>
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

    <script>
      function detailsmodal(id){
        var data = {"id" : id};
        jQuery.ajax({
          url : <?= BASEURL; ?> +'includes/detailsmodal.php',
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