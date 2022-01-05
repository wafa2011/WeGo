<?php
class User{
    private $database;
    private $bdd;
    
    public function __construct(){
        $this -> database = new Database();
        $this -> bdd = $this -> database -> getBDD();
    }
    public function addUser($firstName,$SecondName,$password,$email){
        $query = $this -> bdd -> prepare("INSERT INTO users(firstName, SeconName, pw, email) VALUES (?,?,?,?)");
        $test = $query -> execute([$firstName,$SecondName,$password,$email]);
        return $test;
    }
    public function getUserByEmail($mail){
        $query = $this -> bdd -> prepare("SELECT id, firstName, SeconName, pw, email
                                          FROM users
                                          Where email=?");
        $query -> execute([$mail]);
        $user = $query -> fetch();
        return $user;
        
    }
}
?>