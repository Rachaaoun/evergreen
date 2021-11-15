<?php
	include '../../config.php';
	include_once '../../Model/Categorie.php';
	class CategorieController {
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
		function supprimerCategorie($id){
			$sql="DELETE FROM categorie WHERE id=:id";
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
		function ajouterCategorie($categorie){
			$sql="INSERT INTO categorie ( nom, description) 
			VALUES (:nom,:description)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
					'nom' => $categorie->getNom(),
					'description' => $categorie->getDescription()
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererCategorie($id){
			$sql="SELECT * from categorie where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$categorie=$query->fetch();
				return $categorie;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierCategorie($categorie, $id){
			try {
				$db = config::getConnexion();
			

				$sql="UPDATE categorie SET nom= :nom,description= :description WHERE id= :id";
			    $db = config::getConnexion();
				$req=$db->prepare($sql);
				$req->bindValue(':nom', $categorie->getNom());
				$req->bindValue(':id', $id);
				$req->bindValue(':description', $categorie->getDescription());
				$req->execute();
			//	echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>