<?php
	include '../../Controller/ProduitController.php';
	$produitC=new ProduitController();
	$listeProduit=$produitC->afficherProduitsParCategorie($_GET["CategorieId"]); 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Admin - Dashboard HTML Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="../Back/css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="../Back/css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="../Back/css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>

<body id="reportsPage">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="index.html">
                    <h1 class="tm-site-title mb-0">Product Admin</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link " href="#">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-file-alt"></i>
                                <span>
                                    Reports <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Daily Report</a>
                                <a class="dropdown-item" href="#">Weekly Report</a>
                                <a class="dropdown-item" href="#">Yearly Report</a>
                            </div>
                        </li>
						<li class="nav-item">
                            <a class="nav-link " href="../categorie/afficherCategorie.php">
                                <i class="fa fa-tags"></i>
                                Categorie
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="afficherProduitB.php">
                                <i class="fas fa-shopping-cart"></i>
                                Products
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="accounts.html">
                                <i class="far fa-user"></i>
                                Accounts
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                                <span>
                                    Settings <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Billing</a>
                                <a class="dropdown-item" href="#">Customize</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="login.html">
                                Admin, <b>Logout</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>


		<div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-large tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">Product Name</th>
                    <th scope="col" style="{position:center;}">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">ID</th>
                    <th scope="col">Category ID</th>
                  </tr>
                </thead>
                <tbody>
				<?php
				foreach($listeProduit as $produit){
			?>
                  <tr>
                    <th scope="row"><input type="checkbox" /></th>
                    <td class="tm-product-name"><?php echo $produit['nom']; ?></td>
                    <td><?php echo $produit['description']; ?></td>
                    <td><?php echo $produit['prix']; ?></td>
                    <td><?php echo $produit['id']; ?></td>
                    <td><?php echo $produit['CategorieId']; ?></td>
                    
                    <td>
					<form method="POST" action="modifierProduit.php">
						<input type="submit" name="Modifier" value="Modifier" class="btn btn-primary btn-block text-uppercase sm-1">
						<input type="hidden" value=<?PHP echo $produit['id']; ?> name="id">
					</form>
				</td>
				<td>
				<a href="supprimerProduit.php?id=<?php echo $produit['id']; ?>"  class="tm-product-delete-link" >
				<i class="far fa-trash-alt tm-product-delete-icon"></i>
			</a>
			
                    
                    </td>
                  </tr>
                  
				  <?php
				}
			?>
                  
                 
                 
                </tbody>
              </table>
            </div>
            <!-- table container -->
			<a
              href="ajouterProduit.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>







    <script src="../Back/Front/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="../Back/Front/js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="../Back/Front/js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="../Back/Front/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="../Back/Front/js/tooplate-scripts.js"></script>
    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();                
            });
        })
    </script>
</body>

</html>