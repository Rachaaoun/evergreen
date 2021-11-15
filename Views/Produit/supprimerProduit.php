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

	$produitC->supprimerProduit($_GET["id"]);
	header('Location:afficherProduitB.php');
?>