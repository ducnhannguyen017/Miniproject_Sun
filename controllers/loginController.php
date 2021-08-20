<?php
class loginController extends Controller
{
    // private $username;
    // private $password;

    function index()
    {
        $this->view('loginView');
    }
    function postLogin()
    {
        $username = @$_POST['username'];
        $password = @$_POST['password'];
        $user = $this->model('user');
        $list = $user->login($username, md5($password));

        $error = "<script>
                    var element = document.getElementById('alert');
                    element.classList.remove('hidden'); 
                </script>";
        //validate
        if (@$_POST['username'] == '' || @$_POST['password'] == '') {
            $message = "Bạn chưa điền đầy đủ thông tin";
        } else {
            $message = "Tài khoản hoặc mật khẩu không chính xác";
        }

        if (count($list) == 1) {
            if (isset($_POST['remember'])) {
                setcookie('username', $username, time() + 86400 * 30);
                setcookie('password', $password, time() + 86400 * 30);
                setcookie('remember', 'checked', time() + 86400 * 30);
            } else {
                setcookie('username', '', time() + 86400 * 30);
                setcookie('password', '', time() + 86400 * 30);
                setcookie('remember', '', time() + 86400 * 30);
            }
            @$_SESSION['username'] = $username;
            @$_SESSION['password'] = $password;

            $this->redirect('bookController/index','indexBook');

        } else {
            $this->view('loginView', ['error' => $error, 'message' => $message]);
        }
    }

    function logout()
    {
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        session_destroy();
        header('Location:../loginController/index');
    }
}
?>