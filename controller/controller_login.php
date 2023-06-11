<?php
include_once "./model/model_login.php";
include_once "./view/view_login.php";
include_once 'controller/controller_secured.php';
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

        $this->view->show_login($this->title,'');

    }
    function verify_user($post){
        $user= $post['name_user'];
        $pass= $post['password'];
        $dbuser=$this->model->get_user($user);
        if(!empty($dbuser->name_user)){
        verify_user($user,$pass,$dbuser);
        
        if(get_loged()){
            header('location:'.URL_BASE);
        }else{
            $this->view->show_login($this->title,'Contraseña incorrecta');
        }
        }else{ $this->view->show_login($this->title,'usuario incorrecto');}
    }
    function log_out(){
        destroy();
        $this->view->show_login($this->title,'');
    }


}
?>