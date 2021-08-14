<?php
class user extends DB
{
    public function login($username, $password)
    {
        $sql="SELECT username,password FROM users WHERE username = '".$username."' AND password = '".$password."'";
        $rs = mysqli_query($this->con, $sql);
        if(!$rs)
        {
            die('cau truy van sai');
        }
        $list = [];
        while($row=mysqli_fetch_assoc($rs))
        {
            array_push($list,$row);
        }
        return $list;
    }
}
?>