<?php
include 'model/model_movies.php';
include 'controller/controller_movies.php';
define('URL_BASE', 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']));

$controller= new controller_movies();
$parteURL= explode("/", $_GET["action"]);


switch($parteURL[0]){
    
    case 'movieList':
        $controller->moviesList();
        break;
    default:
        $controller->home();
    }
    
?>