<?php
require_once './libs/Smarty.class.php';

class view_genders
{
    private $smarty;
    function __construct(){
        $this->smarty = new Smarty();
    }
    
    function gendersList($genders){
        $this->smarty->assign('URL_BASE',URL_BASE);
        $this->smarty->assign('genders',$genders);
        $this->smarty->display('templates/gendersList.tpl');

    }
}
?>  