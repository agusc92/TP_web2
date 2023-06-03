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




}
    ?>
