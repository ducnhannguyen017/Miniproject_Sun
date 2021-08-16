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
            $arr = ['loginController','index'];
        }
        $this->controller = $arr[0];
        require_once "./controllers/". $this->controller .".php";
        $this->controller = new $this->controller;

        $this->action = $arr[1];
        if(isset($arr[2])){
            $this->params = $arr[2];
        }
        // var_dump($this->params);

        $this->controller=new $this->controller;
        $act=$this->action;
        if(isset($arr[2])){
            $this->controller->$act($this->params);

        }else{
            $this->controller->$act();
        }
    }
}

?>