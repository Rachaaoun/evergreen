<?php
class Produit{
  
    private $id;
    private $nom;
    private $description;
    private $prix;
    private $CategorieId;
       
    function __construct( $nom, $description,$prix,$CategorieId){
        $this->nom=$nom;
        $this->description=$description;
        $this->prix=$prix;
        $this->CategorieId=$CategorieId;
      
    }
    function getId(){
        return $this->id;
    }
    function getNom(){
        return $this->nom;
    }
    function getDescription(){
        return $this->description;
    }
    function getPrix(){
        return $this->prix;
    }
    
    function setNom(string $nom){
        $this->nom=$nom;
    }
    function getCategorie(){
        return $this->CategorieId;
    }
    
    function setCategorie(Categorie $CategorieId){
        $this->CategorieId=$CategorieId;
    }
    function setDescription(string $description){
        $this->description=$description;
    }
    function setPrix(string $prix){
        $this->prix=$prix;
    }
    





}



?>