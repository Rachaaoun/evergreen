<?php
    include_once '../../Model/Produit.php';
    include_once '../../Controller/ProduitController.php';
  //  $categorieC=new ProduitController();
	//$listeCategorie=$categorieC->affichercategories(); 

    $error = "";

    // create adherent
    $produit = null;

    // create an instance of the controller
    $produitC = new ProduitController();
    $listeCategorie=$produitC->affichercategories(); 
    if (
       
		isset($_POST["nom"]) &&		
        isset($_POST["description"]) &&
        isset($_POST["prix"]) 
       // isset($_POST["CategorieId"]) 
		
    ) {
        if (
           
			!empty($_POST['nom']) &&
            !empty($_POST["description"]) &&
            !empty($_POST["prix"]) 
           // !empty($_POST["CategorieId"])
        ) {
            $produit = new Produit(

				$_POST['nom'],
                $_POST['description'], 
                $_POST["prix"] ,
                $_POST['CategorieId'] 
			
            );
            $produitC->modifierProduit($produit,$_POST["id"]);
            header('Location:afficherProduitB.php');
           
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
                            <a class="nav-link " href="../Categorie/afficherCategorie.php">
                                <i class="fa fa-tags"></i>
                                Categorie
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../produit/afficherProduitB.php">
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

        <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12" style="margin-left:300px">
                <h2 class="tm-block-title d-inline-block">Add Product</h2>
              </div>
            </div>
            <?php
			if (isset($_POST['id'])){
				$produit = $produitC->recupererProduit($_POST['id']);
				
		?>

            <div class="row tm-edit-product-row">
              <div class="col-xl-12 col-lg-12 col-lg-12">
                <form action="" class="tm-edit-product-form" method="POST">
                  <div class="form-group lg-12">
                  <label for="id" >
                        </label>
                   <input type="text" style="color :transparent ; background:transparent"  name="id" id="id" class="form-control validate" value="<?php echo $produit['id']; ?>" maxlength="20">
                


                    <label
                      for="name"
                      >Product Name
                    </label>
                    <input type="text" name="nom" id="nom" maxlength="20" value="<?php echo $produit['nom']; ?>" class="form-control validate">

                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Description
                      </label>

                    <input type="text" name="description" id="description" maxlength="20" value="<?php echo $produit['description']; ?>"  class="form-control validate"></textarea>

                  </div>

                  <div class="form-group mb-3">
                    <label
                      for="prix"
                      >Price
                      </label>

                    <input type="text" name="prix" id="prix" maxlength="20" value="<?php echo $produit['prix']; ?>" class="form-control validate"></textarea>

                  </div>

                  <div class="form-group lg-12">
                    <label
                      for="Categorie"
                      >Category 
                    </label>
                

                <select name="CategorieId" id="" class="form-control validate">
                       
                     <?php   foreach($listeCategorie as $categorie){
			        ?>
 
                        <option value="<?php echo $categorie['id']; ?>" name="CategorieId" id=""><?php echo $categorie['nom']; ?></option>
                       
                       
                        <?php } ?>
                    
                </select>


                  </div>
            
                
                  
              </div>
             
              <div class="col-12">
                 
                <input type="submit" href="afficherProduitB.php"class="btn btn-primary btn-block text-uppercase" value="Update Product Now" ></input>
          
            </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>




<?php } ?>



    

    </body>
</html>