<?php
include 'model/model_movies.php';
include 'controller/controller_movies.php';

$controller= new controller_movies();
$parteURL= explode("/", $_GET["action"]);


if($parteURL[0]==""){
    $controller->home();
}


?>