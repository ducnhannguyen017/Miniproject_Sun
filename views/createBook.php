<?php
// var_dump($_COOKIE['update_book']);
$book_id = @$_COOKIE['update_book'];
$book = @$_SESSION['list_book'][$book_id];
// var_dump($book);
@$_SESSION['title']=$book['title'];
@$_SESSION['author']=$book['author'];
@$_SESSION['price']=$book['price'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('./views/head.php') ?>
    <title>Book Form</title>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <h3 class="text-primary">Book Form</h3>
                <div id="alert" class="alert alert-danger hidden"><?= isset($data['message'])?$data['message']:''; ?></div>
                <form method="POST" action="../bookController/store" id="formSignin">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="<?= isset($_SESSION['title']) ? $_SESSION['title'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" class="form-control" name="author" id="author" value="<?= isset($_SESSION['author']) ? $_SESSION['author'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price" id="price" value="<?= isset($_SESSION['price']) ? $_SESSION['price'] : '' ?>">
                    </div>
                    <div class="row">
                        <input class="btn btn-primary" name="login" value="Create Book" type="submit"></input>
                    </div>
                    <br><br>
                </form>
            </div>
        </div>
    </div>
    <?php echo isset($data['error'])?$data['error']:''; ?>


</body>

</html>

