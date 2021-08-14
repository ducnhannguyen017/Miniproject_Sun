<?php

class DB{

    public $con;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "miniproject_sun";

    function __construct()
    {
        $this->con = new mysqli($this->servername, $this->username, $this->password,$this->dbname);
    }

}

?>