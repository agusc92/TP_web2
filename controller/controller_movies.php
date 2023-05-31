<?php

include_once "./model/model_movies.php";
include_once "./view/view_movies.php";

class controller_movies{

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
        $this->view-> mostrar($this->title, $genders, $movies);


    }
    function moviesList()
    {
        $movies = $this->model->get_all();
        $this->view->moviesList($movies);
    }
    function delete_movie($id){
        $this->model->delete_movie($id);
        header('location:'.URL_BASE.'/movieList');
    }
    function movieXgender($id){
        $movies = $this->model->get_all();
        $show;
        foreach($movies as $movie){
            if($movie->id_gender == $id){
                $show[]=$movie;
            }
        }
        $this->view->movieXgender($show);
    }
}



?>