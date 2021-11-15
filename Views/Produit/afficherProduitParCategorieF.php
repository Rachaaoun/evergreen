<?php
	include '../../Controller/ProduitController.php';
	$produitC=new ProduitController();
	$listeProduit=$produitC->afficherProduitsParCategorie($_GET["CategorieId"]); 
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
			<img src="/../Front/images/Logo1.png" alt="logo evergreen" height="90" width="100">
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

    <div class="hero-wrap hero-bread" style="background-image: url('../Front/images/p6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div>
 <br><br><br>
 <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href="#" class="active">Products</a></li>
    					
    				</ul>
    			</div>
    		</div>
    		<div class="row">
            <?php
				foreach($listeProduit as $produit){
			?>
            <div class="col-md-6 col-lg-3 ftco-animate">
          
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="../Front/images/p1indoor.jpg" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#"><?php echo $produit['nom']; ?></a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc"><?php echo $produit['prix']; ?></span><span class="price-sale"><?php echo $produit['prix']; ?></span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
                    </div>
				  <?php
				}
			?>
    		

 	
                 
             



</br><br><br>
		

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