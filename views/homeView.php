<?php 
    if(!isset($_SESSION['username']))
    {
        header("Location:/miniproject/login/index");
    }

?>
<h1>home</h1>
<a href="/miniproject/logout/logout">logout</a>