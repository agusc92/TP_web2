<?php
require_once './libs/Smarty.class.php';
include_once "./controller/controller_login.php";
class view_genders
{
    private $smarty;
    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('loged',get_loged());
        $this->smarty->assign('URL_BASE',URL_BASE);
    }
    
    function gendersList($genders){
        $this->smarty->assign('genders',$genders);
        $this->smarty->display('templates/gendersList.tpl');

    }

    function prepare_add_gender(){
        echo "hola";
        $this->smarty->display('templates/prepare_add_gender.tpl');

    }
    function prepare_edit_gender($gender){
        $this->smarty->assign('gender', $gender);
        $this->smarty->display('templates/prepare_edit_gender.tpl');
    }






}
?>  