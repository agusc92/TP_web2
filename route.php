<?php
define('URL_BASE', 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']));

include 'model/model_movies.php';
include 'controller/controller_movies.php';
include 'controller/controller_genders.php';
include_once 'controller/controller_login.php';


// define('URL_LOGIN', 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/login');
// define('URL_LOGOUT', 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/logout');


$controller_movies= new controller_movies();
$controller_genders= new controller_genders();
$controller_login= new controller_login();

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
    case 'prepare_add_gender':
        $controller_genders->prepare_add_gender();
        break;
    case 'add_gender':
        $controller_genders->add_gender($_POST);
        break;
    case 'prepare_edit_gender':
        $controller_genders->prepare_edit_gender($parteURL[1]);
        break;
    case 'edit_gender':
        $controller_genders->edit_gender($_POST);
        break;
    case 'delete_gender':
            $controller_genders->delete_gender($parteURL[1]);
            break;
    case 'login':
            $controller_login->show_login();
        break;
    case 'verify_login':
            $controller_login->verify_user($_POST);
            break;
    case 'log_out':
            $controller_login->log_out();
            break;
    default:
        $controller_movies->home();
    }
    
?>