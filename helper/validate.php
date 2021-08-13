<?php
require('./models/user.php');
class validate
{
    public $message='';
    function loginValidate($username, $password)
    {
        $user =new user;
        $list=$user->login($username, $password);
        if(count($list)!=1){
            return $message='Tài khoản hoặc mật khẩu không chính xác';
        }
        if($username==''||$password=='')
        {
            return $message='Bạn chưa điền đầy đủ thông tin';
        }
    }
}

?>