<?php
session_start();

require "config/Database.php";
require "controllers/ProductController.php";
require "controllers/UserController.php";


$productController = new ProductController();
$userController = new UserController();



if(array_key_exists("action",$_GET)){
    
    switch($_GET['action']){
        //case de create et appel au creation d'un compte
        case "create_account" :
            
            $userController -> create_account();
            break;
         //case d'authetification et appel au connexion   
        case "connect" :
            
            $userController -> connect();
            break; 
            
        
    }

}else {
$productController -> listProduct();
}
?>






