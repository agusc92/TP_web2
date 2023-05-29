<?php

class model_movies{
    private $db;
public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=db_limpiesa','root','');
}
}
?>