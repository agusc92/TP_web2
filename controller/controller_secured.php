<?php

class controller_secured{

    

    function __construct()
    {
        
        session_start();
        if(isset ($_SESSION['user'])){
        
        }else{
            header('location:'.URL_LOGIN);



    }

    }
}

?>