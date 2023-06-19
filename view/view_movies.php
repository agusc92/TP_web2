<?php
require_once './libs/Smarty.class.php';

class view_movies
{
    private $smarty;
    function __construct($loged){
        $this->smarty = new Smarty();
        $this->smarty->assign('loged',$loged);
        $this->smarty->assign('URL_BASE',URL_BASE);
    }
    
    function mostrar($title, $genders, $movies){
        $this->smarty-> assign('title', "Maspelis");
        $this->smarty->assign("genders", $genders);
        $this->smarty->assign ('movies', $movies);
        $this->smarty-> display ('templates/home.tpl');
    }
    function moviesList($movies,$mensaje=''){
        $this->smarty->assign('movies',$movies);
        $this->smarty->assign('mensaje',$mensaje);
        $this->smarty->display('templates/moviesList.tpl');
    }
    function show_movieDetail($movie){
        $this->smarty->assign('movie',$movie);
        
        $this->smarty->display('templates/movieDetail.tpl');
    }

    function prepare_add_movie($genders,$mensaje=''){
        $this->smarty->assign('title', "Maspelis");
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->assign('genders',$genders);
        $this->smarty->display('templates/prepare_add_movie.tpl');

        
    }
    function prepare_edit_movie($movie,$genders,$mensaje=''){
        $this->smarty->assign('genders',$genders);
        $this->smarty->assign('mensaje',$mensaje);
        $this->smarty->assign('movie',$movie);
        $this->smarty->display('templates/prepare_edit_movie.tpl');
    }
}

?>