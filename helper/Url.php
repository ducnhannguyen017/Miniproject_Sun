<?php
class Url{

    protected $controller;
    protected $action;
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
        var_dump($this->params);

        $this->controller=new $this->controller;
        $act=$this->action;
        $this->controller->$act();
    }
}

?>