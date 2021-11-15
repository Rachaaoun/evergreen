<?php
	include '..\..\Controller\CategorieController.php';
	$categorieC=new CategorieController();
	$listeCategorie=$categorieC->affichercategories(); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Evergreen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../Front/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../Front/css/animate.css">
    
    <link rel="stylesheet" href="../Front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../Front/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../Front/css/magnific-popup.css">

    <link rel="stylesheet" href="../Front/css/aos.css">

    <link rel="stylesheet" href="../Front/css/ionicons.min.css">

    <link rel="stylesheet" href="../Front/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../Front/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../Front/css/flaticon.css">
    <link rel="stylesheet" href="../Front/css/icomoon.css">
    <link rel="stylesheet" href="../Front/css/style.css">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+216 71 311 311</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">evergreen@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
			<img src="../Front/images/Logo1.png" alt="logo evergreen" height="90" width="100">
	      <a class="navbar-brand" href="index.html">Evergreen</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="view\wishlist.php">Wishlist</a>
                <a class="dropdown-item" href="view\cart.php">Cart</a>
                <a class="dropdown-item" href="view\checkout.php">Checkout</a>
				<a class="dropdown-item">Categories :</a>
				<a class="dropdown-item" href="view\indoorplants.php">Indoor Plants</a>
				<a class="dropdown-item" href="view\outdoorplants.php">Outdoor Plants</a>
              </div>
            </li>
	          <li class="nav-item"><a href="view\about.php" class="nav-link">About</a></li>
			  <li class="nav-item"><a href="view\contact.php" class="nav-link">Contact</a></li>
			  <li class="nav-item"><a href="view\login.php" class="nav-link">Log in</a></li>
        <li class="nav-item"><a href="view\Signup.php" class="nav-link">Create an account</a></li>
	          

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('../Front/images/p9.png');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Categories</h1>
          </div>
        </div>
      </div>
    </div>
 <br><br><br>
 <div class="container">
 <div class="card-group">
 <?php
				foreach($listeCategorie as $categorie){
			?>
 
 <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header"></div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $categorie['nom']; ?></h5>
    <p class="card-text"><?php echo $categorie['description']; ?>.</p>
  </div>
</div> <p style="color:white">***********************</p><br>

<?php
				}
			?>
      </div>
      </div>
</br><br><br>
		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(../Front/images/p6outdoor.jpg);">
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(../Front/images/p8indoor.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Indoor plants</a></h2>
									</div>
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(../Front/images/p10outdoor.jpg);">
						
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(../Front/images/p9outdoor.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Outdoor plants</a></h2>
							</div>
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(../Front/images/p1indoor.jpg);">
						</div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
        </div>   		
    	</div>
 
		

  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../Front/js/jquery.min.js"></script>
  <script src="../Front/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../Front/js/popper.min.js"></script>
  <script src="../Front/js/bootstrap.min.js"></script>
  <script src="../Front/js/jquery.easing.1.3.js"></script>
  <script src="../Front/js/jquery.waypoints.min.js"></script>
  <script src="../Front/js/jquery.stellar.min.js"></script>
  <script src="../Front/js/owl.carousel.min.js"></script>
  <script src="../Front/js/jquery.magnific-popup.min.js"></script>
  <script src="../Front/js/aos.js"></script>
  <script src="../Front/js/jquery.animateNumber.min.js"></script>
  <script src="../Front/js/bootstrap-datepicker.js"></script>
  <script src="../Front/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../Front/js/google-map.js"></script>
  <script src="../Front/js/main.js"></script>
    
  </body>
</html>