<?php
class logout extends Controller
{
    function logout()
    {
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        session_destroy();
        header('Location:/miniproject/login/index');
    }

}
?>