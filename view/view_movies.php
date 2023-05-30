<?php
require_once './libs/Smarty.class.php';

class view_movies
{
    private $smarty;
    function __construct(){
        $this->smarty = new Smarty();
    }
    
    function mostrar($title, $genders, $movies){
        $this->smarty->assign('URL_BASE',URL_BASE);
        $this->smarty-> assign('title', "Maspelis");
        $this->smarty->assign("genders", $genders);
        $this->smarty->assign ('movies', $movies);
        $this->smarty-> display ('templates/home.tpl');
    }
    function moviesList($movies){
        $this->smarty->assign('URL_BASE',URL_BASE);
        $this->smarty->assign('movies',$movies);
        $this->smarty->display('templates/moviesList.tpl');
    }
    
}

?>