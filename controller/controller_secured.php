<?php
class controller_secured{
    static function start(){
        if(session_status()==PHP_SESSION_NONE){
            session_start();
        }
    }
    
    function verify_user($user,$pass,$dbuser)
    {   
        $this->start();
        if (password_verify($pass,$dbuser->password)){
            
           $_SESSION['user']=$user;
           $_SESSION['loged']=true;     
    }else{
        $_SESSION['loged']=false; 
    }
   
    }
    function wall(){
        $this->start();
        if(!isset($_SESSION['loged'])){
            header('location:'.URL_BASE.'/login');
            DIE();
        }
    }
    function get_loged(){
        $this->start();
        if(!isset($_SESSION['loged'])){
            return false;
        }else{
            return $_SESSION['loged'];
        } 
    }
    
    function destroy(){
        $this->start();
        session_destroy();
    }
}
?>