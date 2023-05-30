<?php

class model_movies{
    private $db;
public function __construct(){

    try{
        $this->db = new PDO('mysql:host=localhost;dbname=db_movies','root','');
       
    }catch(PDExeption $e){
        echo $e;
    }
}

function get_genders(){
    $sentense=$this->db->prepare("SELECT * from genders");
    $sentense->execute();
    return $sentense-> fetchAll(PDO::FETCH_OBJ);
}
function get_movies(){
    $sentense = $this->db->prepare("SELECT * FROM movies");
    $sentense->execute();
    return $sentense->fetchAll(PDO::FETCH_OBJ);
}
function get_all(){
    $sentense = $this->db->prepare("SELECT * FROM `movies`JOIN `genders` ON genders.id_gender = movies.id_gender");
    $sentense->execute();
    return $sentense->fetchAll(PDO::FETCH_OBJ);
}
}
?>