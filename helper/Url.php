<?php
class Url{

    protected $controller='login';
    protected $action='index';
    protected $params;

    function __construct()
    {
 
        if( isset($_GET["url"]) )
        {
            $arr = explode("/", $_GET["url"]);
        }
        else
        {
            $arr = ['login','index'];
        }
        $this->controller = $arr[0];
        require_once "./controllers/". $this->controller .".php";
        $this->controller = new $this->controller;

        $this->action = $arr[1];

        $this->params = array_slice($arr,2);

        $this->controller=new $this->controller;
        $act=$this->action;
        $this->controller->$act();
    }
}

?>