<?php
class Categorie{
  
    private $id;
    private $nom;
    private $description;
       
    function __construct( $nom, $description){
        $this->nom=$nom;
        $this->description=$description;
      
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
    
    function setNom(string $nom){
        $this->nom=$nom;
    }
    function setDescription(string $description){
        $this->description=$description;
    }
   
    












}



?>