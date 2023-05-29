<?php
require_once './libs/Smarty.class.php';

class view_movies
{

    
    function mostrar($title, $genders){
        $smarty= new Smarty();
        $smarty-> assign('title', "Maspelis");
        $smarty->assign("genders", $genders);
        $smarty-> display ('templates/home.tpl');
        
    

}

}

?>