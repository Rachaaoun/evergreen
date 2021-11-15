<?php
    include_once '../../Model/Categorie.php';
    include_once '../../Controller/CategorieController.php';

    $error = "";

    // create adherent
    $categorie = null;

    // create an instance of the controller
    $categorieC = new CategorieController();
    if (
		isset($_POST["nom"]) &&		
        isset($_POST["description"]) 
    ) {
        if (
            !empty($_POST["description"]) && 
			!empty($_POST['nom'])
        ) {
            $categorie = new Categorie(
                $_POST['nom'],
				$_POST['description']
               
            );
            $categorieC->modifierCategorie($categorie, $_POST["id"]);
            header('Location:afficherCategorie.php');
        }
        else
            $error = "Missing information";
    }    
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
                            <a class="nav-link active" href="afficherCategorie.php">
                                <i class="fa fa-tags"></i>
                                Categorie
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="afficherProduitB.php">
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










    <body>
         <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
        <?php
			if (isset($_POST['id'])){
				$categorie = $categorieC->recupererCategorie($_POST['id']);
				
		?>

        
<div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12" style="margin-left:300px">
                <h2 class="tm-block-title d-inline-block" style="{margin-left:300px}">Update Category</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-12 col-lg-12 col-md-12">
                <form action="" class="tm-edit-product-form" method="POST">
           
                        <label for="id" >
                        </label>
                   <input type="text" style="color :transparent ; background:transparent"  name="id" id="id" class="form-control validate" value="<?php echo $categorie['id']; ?>" maxlength="20">
                
                   <div class="form-group lg-12">
                    <label
                      for="name"
                      >Category Name
                    </label>
                   <input type="text" name="nom" id="nom" class="form-control validate" value="<?php echo $categorie['nom']; ?>" maxlength="20">
            </div>

            <div class="form-group lg-12">
                    <label
                      for="description"
                      >Category Description
                    </label>
                    <input type="text" name="description" id="description" class="form-control validate" value="<?php echo $categorie['description']; ?>" maxlength="20">
           
            </div>         <br> <div class="col-12">
                <input type="submit" class="btn btn-primary btn-block text-uppercase" value="Update Category Now"></button>
              </div>
            </form>
          
		<?php
		}
		?>
    </body>
</html>