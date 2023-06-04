<?php

include_once "./model/model_movies.php";
include_once "./model/model_genders.php";
include_once "./view/view_genders.php";

class controller_genders{

    private $view;
    private $model;
    private $model_movies;
    private $title;

    function __construct()
    {
        $this->view= new view_genders();
        $this ->model= new model_genders();
        $this->model_movies= new model_movies();
        $this ->title= "MasPeli";
    }

    function gendersList()
    {
        $genders = $this->model->get_genders();
        $this->view->gendersList($genders);
    }

    function prepare_add_gender(){
        $this->view->prepare_add_gender();
    }

    function add_gender($gender){
        $gender=[$gender['name_gender'], $gender['prox_estreno']];
        $this->model->add_gender($gender);
    }
    function prepare_edit_gender($id){
        $gender = $this->model->get_gender($id);      
        $this->view->prepare_edit_gender($gender);
    }

    function edit_gender($datos){
        
        $gender = [$datos['name_gender'],$datos['prox_estreno'],$datos['amount'], $datos['id_gender']];
        $this->model->edit_gender($gender);
        header('location:'.URL_BASE.'/gendersList');
    }
    function delete_gender($id){
        $this->model->delete_gender($id);
        header('location:'.URL_BASE.'/gendersList');
    }




}
    ?>
