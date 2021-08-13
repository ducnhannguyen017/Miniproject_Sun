<?php 
    if(isset($_SESSION['username']))
    {
        header("Location:/miniproject/home/index");
    }

?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="../static/style.css">
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            background: #7abecc !important;
        }
        .hidden{
            visibility: hidden;
        }
        .container{
            margin-top: 90px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-5">
                <h3 class="text-primary">Đăng nhập</h3>
                <form method="POST" action="/miniproject/login/postLogin" id="formSignin">
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