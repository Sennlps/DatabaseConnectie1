<?php

class DB {
    public $pdo1

    public function __construct($db = "nummer1" , $user="root" , $pwd="" , $host="localhost"){
       try {
        $this->pdo1 = new PDO1("mysql:host=$host;dbname=$nummer1", $user, $pwd);
        echo "Connectie geslaagd met $db";
       } catch (PDOExeption $e) {
        echo "Connectie niet gelukt: " . $e->getMessage();
       }

    }
}










?>