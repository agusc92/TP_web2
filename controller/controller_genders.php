<?php

include_once "./model/model_movies.php";
include_once "./model/model_genders.php";
include_once "./view/view_genders.php";
include_once "controller_secured.php";
class controller_genders{

    private $view;
    private $model;
    private $model_movies;
    private $title;
    private $controller_secured;
    function __construct()
    {
        $this->controller_secured = new controller_secured();
        $this->view= new view_genders($this->controller_secured->get_loged());
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
        $this->controller_secured->wall();
        $this->view->prepare_add_gender();
    }

    function add_gender($gender){
        $gender=[$gender['name_gender'], $gender['prox_estreno']];
        
        $genders_db = $this->model->get_genders();
        foreach($genders_db as $gender_db){
            if($gender_db->name_gender == $gender[0]){
                $error = 'El genero ya existe';
                $this->view->prepare_add_gender($error);
                DIE();
            }
           }
           foreach($gender as $dato){
            if(empty($dato)){
               
                $error = 'No se permiten campos vacios';
                $this->view->prepare_add_gender($error);
            DIE();
            }
           }
           $this->model->add_gender($gender);
           header('location:'.URL_BASE.'/gendersList');
    }
    function prepare_edit_gender($id){
        $this->controller_secured->wall();
        $gender = $this->model->get_gender($id);      
        
        $genders_db = $this->model->get_genders();
        if(empty($gender)){
            $error = 'El genero que intenta editar no existe';
            $this->view->gendersList($genders_db,$error);
        }else{
            $this->view->prepare_edit_gender($gender);
        }  
    }

    function edit_gender($datos){
        $this->controller_secured->wall();
        $gender = [$datos['name_gender'],$datos['prox_estreno'],$datos['amount'], $datos['id_gender']];
        $genders_db = $this->model->get_genders();
       
        foreach($genders_db as $gender_db){
            if($gender_db->name_gender == $gender[0]){
                $error = 'El genero ya existe';
                $this->view->gendersList($genders_db,$error);
                
                DIE();
            }
           }
        foreach($gender as $clave=>$valor){
            if(empty($valor)){
                $gender = $this->model->get_gender($datos['id_gender']);  
                $error='No se admiten campos vacios';              
                $this->view->prepare_edit_gender($gender,$error);
            DIE();
            }
           }
           $this->model->edit_gender($gender);
       
    }
    function delete_gender($id){
        $this->controller_secured->wall();
        $gender = $this->model->get_gender($id);
        $genders= $this->model->get_genders();
        if(!empty($gender)){
            if($gender->amount ==0){
                $this->model->delete_gender($id);
                header('location:'.URL_BASE.'/gendersList');
            }else{
                $error = 'no se puede borrar, el genero contiene peliculas';
            $this->view->gendersList($genders,$error);
            DIE();
            }
            
        }else{
            $error = 'El genero que intenta borrar no existe';
            $this->view->gendersList($genders,$error);
            DIE();
        }
        
    }




}
    ?>
