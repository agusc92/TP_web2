<?php
include_once "./model/model_login.php";
include_once "./view/view_login.php";

class controller_login{

    private $view;
    private $model;
    private $title;

    function __construct()
    {
        $this->view= new view_login();
        $this ->model= new model_login();
        $this ->title= "MasPeli";
    }

    function show_login(){

        $this->view->show_login($this->title);

    }


}
?>