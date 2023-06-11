<?php
session_start();
    function verify_user($user,$pass,$dbuser)
    {
        
        if (password_verify($pass,$dbuser->password)){
            
           $_SESSION['user']=$user;
           $_SESSION['loged']=true;
           
           
          
    }else{
        $_SESSION['loged']=false;
       
    }
   
    }
    function wall(){
        if(!isset($_SESSION['loged'])){
            header('location:'.URL_BASE.'/login');
        }
    }
    function get_loged(){
        if(!isset($_SESSION['loged'])){
            return false;
        }else{
            return $_SESSION['loged'];
        }
        
    }
    
    function destroy(){
        session_destroy();
    }

?>