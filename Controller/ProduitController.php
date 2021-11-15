<?php
	include '../../config.php';
	include_once '../../Model/Produit.php';
	include_once '../../Model/Categorie.php';
	class ProduitController {


		
			function afficherCategories(){
				$sql="SELECT * FROM categorie";
				$db = config::getConnexion();
				try{
					$liste = $db->query($sql);
					return $liste;
				}
				catch(Exception $e){
					die('Erreur:'. $e->getMeesage());
				}
			}


		function afficherProduits(){
			$sql="SELECT * FROM produit";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerProduit($id){
			$sql="DELETE FROM produit WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
				
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

		function ajouterProduit($produit){
			$sql2="SELECT * FROM categorie";
		
			$sql="INSERT INTO produit ( nom, description,prix,CategorieId) 
			VALUES (:nom,:description,:prix,:CategorieId)";
			$db = config::getConnexion();
			try{
				//$liste = $db->query($sql);
				$query = $db->prepare($sql);
				$query->execute([
					'nom' => $produit->getNom(),
					'description' => $produit->getDescription(),
					'prix' => $produit->getPrix(),
					'CategorieId' => $produit->getCategorie(),
				]);	
				//return $liste;		
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function recupererProduit($id){
			$sql="SELECT * from produit where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$produit=$query->fetch();
				return $produit;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierProduit($produit, $id){
			try {
				$db = config::getConnexion();
			

				$sql="UPDATE produit SET nom= :nom,description= :description,prix= :prix WHERE id= :id";
			    $db = config::getConnexion();
				$req=$db->prepare($sql);
				$req->bindValue(':nom', $produit->getNom());
				$req->bindValue(':id', $id);
				$req->bindValue(':description', $produit->getDescription());
                $req->bindValue(':prix', $produit->getPrix());
				$req->execute();
			//	echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>