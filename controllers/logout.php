<?php
class logout extends Controller
{
    function logout(){
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        session_destroy();
        if(isset($_COOKIE['username']))
        {
            unset($_COOKIE['username']);
            unset($_COOKIE['password']);
            // setcookie('username','',time()-86400*30);
            // setcookie('password','',time()-86400*30);
        }
        header('Location:/miniproject/login/index');
    }

}