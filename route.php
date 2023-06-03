<?php
include 'model/model_movies.php';
include 'controller/controller_movies.php';
include 'controller/controller_genders.php';
define('URL_BASE', 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']));

$controller_movies= new controller_movies();
$controller_genders= new controller_genders();

$parteURL= explode("/", $_GET["action"]);


switch($parteURL[0]){
    
    case 'movieList':
        $controller_movies->moviesList();
        break;
    case 'movieDetail':
        $controller_movies->movieDetail($parteURL[1]);
        break;
    case'gendersList':
        $controller_genders->gendersList();
        break;
    case 'delete':
        $controller_movies->delete_movie($parteURL[1]);
        break;
    case 'movieXgender':
        $controller_movies->movieXgender($parteURL[1]);
        break;
    case 'add':
        $controller_movies->prepare_add_movie();
        break;
    case 'add_confirm':
            $controller_movies->add_movie($_POST);
            break;
    case 'prepare_edit':
        $controller_movies->prepare_edit_movie($parteURL[1]);
        break;
    case 'edit_confirm':
        $controller_movies->edit_movie($_POST);
        break;
    default:
        $controller_movies->home();
    }
    
?>