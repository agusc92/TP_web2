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
    function show_movieDetail($movie){
        $this->smarty->assign('URL_BASE',URL_BASE);
        $this->smarty->assign('movie',$movie);
        $this->smarty->display('templates/movieDetail.tpl');
    }



    function movieXgender($show){
        $this->smarty->assign('URL_BASE',URL_BASE);
        $this->smarty->assign('movies',$show);
        $this->smarty->display('templates/movieXgender.tpl');
    }
    function prepare_add_movie($genders){
        $this->smarty->assign('URL_BASE',URL_BASE);
        $this->smarty->assign('title', "Maspelis");
        $this->smarty->assign('genders',$genders);
        $this->smarty->display('templates/prepare_add_movie.tpl');

        
    }
}

?>