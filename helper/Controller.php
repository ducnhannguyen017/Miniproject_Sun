<?php
class Controller{

    public function model($model)
    {
        require_once "./models/".$model.".php";
        return new $model;
    }

    public function view($view, $data=[])
    {
        require_once "./views/".$view.".php";
        // header("Location:/miniproject/bookHomeView");
    }

    public function redirect($url, $data=[])
    {
        header("Refresh:0; url=/miniproject/".$url);
    }

}
?>
