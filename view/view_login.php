<?php
require_once './libs/Smarty.class.php';
include_once "./controller/controller_login.php";
class view_login
{
    private $smarty;
    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('URL_BASE',URL_BASE);
        $this->smarty->assign('loged', get_loged());
    }

    function show_login($title, $message){
        $this->smarty->assign('title',$title);
        $this->smarty->assign('message', $message);
        $this->smarty->display('templates/login.tpl');

    }

}
?>