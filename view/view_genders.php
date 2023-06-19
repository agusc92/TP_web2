<?php
require_once './libs/Smarty.class.php';

class view_genders
{
    private $smarty;
    function __construct($loged){
        $this->smarty = new Smarty();
        $this->smarty->assign('loged',$loged);
        $this->smarty->assign('URL_BASE',URL_BASE);
    }
    
    function gendersList($genders,$mensaje=''){
        $this->smarty->assign('genders',$genders);
        $this->smarty->assign('mensaje',$mensaje);
        $this->smarty->display('templates/gendersList.tpl');

    }

    function prepare_add_gender($mensaje=''){
        $this->smarty->assign('mensaje',$mensaje);
        $this->smarty->display('templates/prepare_add_gender.tpl');

    }
    function prepare_edit_gender($gender,$mensaje=''){
        $this->smarty->assign('gender', $gender);
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('templates/prepare_edit_gender.tpl');
    }






}
?>  