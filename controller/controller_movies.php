<?php

include_once "./model/model_movies.php";
include_once "./view/view_movies.php";
include_once "./controller/controller_secured.php";
include_once "./controller/controller_login.php";


class controller_movies{

    private $view;
    private $model;
    private $title;
    private $controller_secured;
    function __construct()
    {
        $this->controller_secured = new controller_secured();
        $this->view= new view_movies($this->controller_secured->get_loged());
        $this ->model= new model_movies();
        $this ->title= "MasPeli";
        
    }

    function home(){
        
        $genders= $this->model-> get_genders();
        $movies= $this->model->get_home_movies();
        if(empty($movies)){
            header('location:'.ULR_BASE);
        }else{
            $this->view->mostrar($this->title, $genders, $movies);
        }
       
        
    }
    function moviesList()
    {
        $movies = $this->model->get_all();
        $this->view->moviesList($movies);
    }

    function movieDetail($id){
        $movie=$this->model->get_movieDetail($id);
        
        if(empty($movie)){
            $movies = $this->model->get_all();
            $this->view->moviesList($movies,true);
        }else{
            $this->view->show_movieDetail($movie);
        }
        
      
    }
    function delete_movie($id){
        $this->controller_secured->wall();
        $datos = $this->model->get_movie($id);
        $this->model->delete_movie($id);
        $this->amount_update($datos->id_gender);
        header('location:'.URL_BASE.'/movieList');
    }
    function movieXgender($id){
        $movies = $this->model->movieXgender($id);
        // $show=[];
        // foreach($movies as $movie){
        //     if($movie->id_gender == $id){
        //         $show[]=$movie;
        //     }
        // }
        $this->view->movieXgender($movies);
        
    }
    function prepare_add_movie(){
        $this->controller_secured->wall();
        $genders = $this->model->get_genders();
        
        $this->view->prepare_add_movie($genders);
        
    }
    function add_movie($datos){
        $this->controller_secured->wall();
       $movie=[$datos['movie_name'],$datos['image'],$datos['id_gender'],$datos['date'],$datos['synopsis']];
       foreach($movie as $dato){
        if(empty($dato)){
            $genders = $this->model->get_genders();
        $this->view->prepare_add_movie($genders,true);
        DIE();
        }
       }
        $this->model->add_movie($movie);
        $this->amount_update($datos['id_gender']);
    }
   
    function prepare_edit_movie($id){
        $this->controller_secured->wall();
        $movie = $this->model->get_movie($id);
        $gender = $this->model->get_genders();
        $this->view->prepare_edit_movie($movie,$gender);
    }
    function edit_movie($datos){
        $this->controller_secured->wall();
        $movie = [$datos['movie_name'],$datos['image'],$datos['id_gender'],$datos['date'],$datos['synopsis'],$datos['movie_id']];
        $genders = $this->model->get_genders();
        foreach($movie as $clave=>$valor){
            if(empty($valor)){
                $movie = $this->model->get_movie($datos['movie_id']);                
                $this->view->prepare_edit_movie($movie,$genders,true);
            DIE();
            }
           }
        $this->model->edit_movie($movie);
        $this->amount_update($datos['id_gender']);
        $this->amount_update($datos['old_gender']);
        header('location:'.URL_BASE.'/movieList');
    }
    private function amount_update($id){
        $this->controller_secured->wall();
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