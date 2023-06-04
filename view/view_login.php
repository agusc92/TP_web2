<?php
require_once './libs/Smarty.class.php';

class view_login
{
    private $smarty;
    function __construct(){
        $this->smarty = new Smarty();
    }

    function show_login($title){
        $this->smarty->assign('URL_BASE',URL_BASE);
        $this->smarty->assign('title',$title);
        $this->smarty->display('templates/login.tpl');

    }

}
?>