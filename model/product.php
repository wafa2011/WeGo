<?php
class Product{
    private $database;
    private $bdd;
    
    public function __construct(){
        $this -> database = new Database();
        $this -> bdd = $this -> database -> getBDD();
    }
    public function addProduct($name,$description,$id_provider){
        $query = $this -> bdd -> prepare("INSERT INTO produit(name,description,id_provider) VALUES (?,?,?)");
        $test = $query -> execute([$name,$description,$id_provider]);
        return $test;
    }
    public function getProductByProvider($id_provider)
        $query = $this -> bdd -> prepare("SELECT id, name, description
                                          FROM produit
                                          Where id_provider =?");
        $query -> execute([$id_provider]);
        $produits = $query -> fetch();
        return $produits;
        
    }
}
?>