<?php
class login extends Controller
{
    private $username;
    private $password;

    function index()
    {
        $this->view('loginView');
    }
    function postLogin()
    {
        $user = $this->model('user');
        $list = $user->login(@$_POST['username'], md5(@$_POST['password']));
        // var_dump($list);
        if (isset($list[0])) 
        {
            $this->username = $list[0]['username'];
            $this->password = $list[0]['password'];
        }

        $error = "<script>
                    var element = document.getElementById('alert');
                    element.classList.remove('hidden'); 
                </script>";
        //validate
        if ($_POST['username'] == '' || $_POST['password'] == '')
        {
            $message = "Bạn chưa điền đầy đủ thông tin";
        } else 
        {
            $message = "Tài khoản hoặc mật khẩu không chính xác";
        }

        if (count($list) == 1) 
        {
            if (isset($_POST['remember'])) 
            {
                setcookie('username', $this->username, time() + 86400 * 30);
                setcookie('password', $_POST['password'], time() + 86400 * 30);
                setcookie('remember', 'checked', time() + 86400 * 30);
            } 
            else 
            {
                setcookie('username', '', time() + 86400 * 30);
                setcookie('password', '', time() + 86400 * 30);
                setcookie('remember', '', time() + 86400 * 30);
            }
            @$_SESSION['username'] = $this->username;
            @$_SESSION['password'] = $this->password;

            // $this->view('homeView');
            $_GET['url']='home/index';
            header("Refresh:0");
            // header('Location:/miniproject/login/postLogin');
        } 
        else 
        {
            $this->view('loginView', ['error' => $error, 'message' => $message]);
        }
    }
}
?>