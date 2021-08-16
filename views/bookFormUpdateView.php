<?php
// var_dump($_COOKIE['update_book']);
$book_id = $_COOKIE['update_book'];
$book = $_SESSION['list_book'][$book_id];
// var_dump($book);
$_SESSION['title']=$book['title'];
$_SESSION['author']=$book['author'];
$_SESSION['price']=$book['price'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Book Form</title>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <h3 class="text-primary">Book Form</h3>
                <form method="POST" action="/miniproject/updateBook/postUpdate" id="formSignin">
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
                    <input class="btn btn-primary" name="login" value="Update Book" type="submit"></input>
                    </div>
                    <br><br>
                </form>
            </div>
        </div>
    </div>


</body>
<script>
    
</script>
</html>

