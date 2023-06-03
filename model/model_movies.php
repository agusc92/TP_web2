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
    //trae la tabla de generos
    $sentense=$this->db->prepare("SELECT * from genders");
    $sentense->execute();
    return $sentense-> fetchAll(PDO::FETCH_OBJ);
}
function get_movies(){
    //trae la tabla de peliculas
    $sentense = $this->db->prepare("SELECT * FROM movies");
    $sentense->execute();
    return $sentense->fetchAll(PDO::FETCH_OBJ);


}
function get_all(){
    //trae las tablas de genero y peliculas unidas
    $sentense = $this->db->prepare("SELECT * FROM `movies`JOIN `genders` ON genders.id_gender = movies.id_gender");
    $sentense->execute();
    return $sentense->fetchAll(PDO::FETCH_OBJ);
}
function get_movieDetail($id){
    echo $id;
    $sentense= $this->db->prepare("SELECT * FROM `movies`JOIN `genders` ON genders.id_gender = movies.id_gender WHERE movies.id_movie=?");
    $sentense ->execute([$id]);
    return $sentense->fetchAll(PDO::FETCH_OBJ);
}


function delete_movie($id){
    //borra una pelicula
    $sentense = $this->db->prepare("DELETE FROM movies WHERE movies.id_movie = ?");
    $sentense->execute([$id]);
}
function add_movie($datos){
    $sentense = $this->db->prepare('INSERT INTO movies (movie_name,'."movie_image".',id_gender,'."movie_date".',synopsis) VALUES (?,?,?,?,?)');
    print_r($datos);
    
    $sentense->execute($datos);
    header('location:'.URL_BASE.'/movieList');
}
}
?>