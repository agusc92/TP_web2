<?php

class model_login{
    private $db;
public function __construct(){

    try{
        $this->db = new PDO('mysql:host=localhost;dbname=db_movies','root','');
       
    }catch(PDExeption $e){
        echo $e;
    }
}


}
?>