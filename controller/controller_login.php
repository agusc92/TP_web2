<?php
include_once "./model/model_login.php";
include_once "./view/view_login.php";
include_once 'controller/controller_secured.php';
class controller_login{

    private $view;
    private $model;
    private $title;
    private $controller_secured;
    function __construct()
    {
        $this->controller_secured = new controller_secured();
        $this->view= new view_login($this->controller_secured->get_loged());
        $this ->model= new model_login();
        $this ->title= "MasPeli";
    }
    function show_login(){

        $this->view->show_login($this->title,'');

    }
    function verify_user($post){
        $user= $post['name_user'];
        $pass= $post['password'];
        $dbuser=$this->model->get_user($user);
        if(!empty($dbuser->name_user)){
            $this->controller_secured->verify_user($user,$pass,$dbuser);
        
        if($this->controller_secured->get_loged()){
            header('location:'.URL_BASE);
        }else{
            $this->view->show_login($this->title,'Contraseña incorrecta');
        }
        }else{ $this->view->show_login($this->title,'usuario incorrecto');}
    }
    function log_out(){
        $this->controller_secured->destroy();
        $this->view->show_login($this->title,'');
    }


}
?>