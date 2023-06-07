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

    function verify_login(){
        $user= $_POST['name_user'];
        $pass= $_POST['password'];
        $dbuser=$this->model->get_user($user);
       
        if(isset($dbuser)){
           
            if (password_verify($pass,$dbuser->password)){
                session_start();
               $_SESSION['user']=$user;
               header('location:'.URL_BASE);
              
        }else{
            
            $this->view->show_login($this->title,"Usuario o contraseña incorrecta");

        }
    }


    }





}
?>