<?php
require_once './libs/Smarty.class.php';

class view_login
{
    private $smarty;
    function __construct($loged){
        $this->smarty = new Smarty();
        $this->smarty->assign('URL_BASE',URL_BASE);
        $this->smarty->assign('loged', $loged);
    }

    function show_login($title, $message){
        $this->smarty->assign('title',$title);
        $this->smarty->assign('message', $message);
        $this->smarty->display('templates/login.tpl');

    }

}
?>