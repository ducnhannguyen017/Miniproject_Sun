<?php 
    if(isset($_SESSION['username']))
    {
        header("Location:/miniproject/bookController/index");
    }
?>
<!DOCTYPE html>
<html>

<head>
    <?php require_once('./views/head.php') ?>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-5">
                <h3 class="text-primary">Đăng nhập</h3>
                <form method="POST" action="../loginController/postLogin" id="formSignin">
                    <div id="alert" class="alert alert-danger hidden"><?= isset($data['message'])?$data['message']:''; ?></div>
                    <div class="form-group">
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" class="form-control" name="username" id="username" value="<?= isset($_COOKIE['username'])?$_COOKIE['username']:'' ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" class="form-control" name="password" id="password" value="<?= isset($_COOKIE['password'])?$_COOKIE['password']:'' ?>" >
                    </div>
                    <div class="form-check">
                        <input <?= isset($_COOKIE['remember'])?$_COOKIE['remember']:'' ?> type="checkbox" class="form-check-input" name="remember" value='0'>
                        <label class="form-check-label" name="remember">Remember Me</label>
                    </div>
                    <input class="btn btn-primary" name="login" value="Đăng nhập" type="submit"></input>
                    <br><br>
                </form>
            </div>
        </div>
    </div>
    <?php echo isset($data['error'])?$data['error']:''; ?>
</body>

</html>