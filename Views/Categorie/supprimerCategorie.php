<?php
	include '../../Controller/CategorieController.php';
	$categorieC=new CategorieController();
	$categorieC->supprimerCategorie($_GET["id"]);
	header('Location:afficherCategorie.php');
?>