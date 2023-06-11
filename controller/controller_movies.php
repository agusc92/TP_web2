<?php

include_once "./model/model_movies.php";
include_once "./view/view_movies.php";
include_once "./controller/controller_secured.php";

class controller_movies {

    private $view;
    private $model;
    private $title;

    function __construct()
    {
        
        $this->view= new view_movies();
        $this ->model= new model_movies();
        $this ->title= "MasPeli";
    }

    function home(){

        $genders= $this->model-> get_genders();
        $movies= $this->model->get_movies();
        $aux=[];
        if(count($movies)<=10){
            $this->view-> mostrar($this->title, $genders, $movies);
        }else{
            for($i=0;$i<10;$i++){
                $aux[]=$movies[$i];
            }
            $this->view->mostrar($this->title, $genders, $aux);
        }
    }
    function moviesList()
    {
        session_start();
        if(isset ($_SESSION['user'])){
        $movies = $this->model->get_all();
        $this->view->moviesList($movies);
        }else{
            header('location:'.URL_LOGIN);

    }

    }

    function movieDetail($id){
        $movie=$this->model->get_movieDetail($id);
        $this->view->show_movieDetail($movie);
      
    }


    function delete_movie($id){
        $datos = $this->model->get_movie($id);
        $this->model->delete_movie($id);
        $this->amount_update($datos->id_gender);
        header('location:'.URL_BASE.'/movieList');
    }
    function movieXgender($id){
        $movies = $this->model->get_all();
        $show=[];
        foreach($movies as $movie){
            if($movie->id_gender == $id){
                $show[]=$movie;
            }
        }
        $this->view->movieXgender($show);
        
    }
    function prepare_add_movie(){
        $genders = $this->model->get_genders();
        $this->view->prepare_add_movie($genders);
    }
    function add_movie($datos){
       $movie=[$datos['movie_name'],$datos['image'],$datos['id_gender'],$datos['date'],$datos['synopsis']];
        $this->model->add_movie($movie);
        $this->amount_update($datos['id_gender']);
    }
   
    function prepare_edit_movie($id){
        $movie = $this->model->get_movie($id);
        $gender = $this->model->get_genders();
        $this->view->prepare_edit_movie($movie,$gender);
    }
    function edit_movie($datos){
        
        $movie = [$datos['movie_name'],$datos['image'],$datos['id_gender'],$datos['date'],$datos['synopsis'],$datos['movie_id']];
        $this->model->edit_movie($movie);
        $this->amount_update($datos['id_gender']);
        $this->amount_update($datos['old_gender']);
        header('location:'.URL_BASE.'/movieList');
    }
    private function amount_update($id){
        $movies = $this->model->get_movies();
        $cont=0;
        foreach($movies as $movie ){
            if($movie->id_gender ==$id){
                $cont ++;
            }
        }
        $this->model->gender_update($cont,$id);
    }
}



?>