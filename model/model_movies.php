<?php

class model_movies{
    private $db;
public function __construct(){
    try{
        $this->db = new PDO('mysql:host=localhost;dbname=db_limpiesa','root','');
        echo 'conectado';
    }catch(PDEExeption $e){
        echo $e;
    }
    
}
}
?>