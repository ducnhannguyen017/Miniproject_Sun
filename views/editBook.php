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
                <?php isset($data['book'])?$data['book']:'' ?>
                <form method="POST" action="../../bookController/update/<?= isset($data['book'])?$data['book']['id']:'' ?>" >
                    <div id="alert" class="alert alert-danger hidden"><?= isset($data['message'])?$data['message']:''; ?></div>

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="<?= isset($data['book'])?$data['book']['title']:'' ?>">
                    </div>
                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" class="form-control" name="author" id="author" value="<?= isset($data['book'])?$data['book']['author']:'' ?>">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price" id="price" value="<?= isset($data['book'])?$data['book']['price']:'' ?>">
                    </div>
                    <div class="row">
                        <input class="btn btn-primary" name="login" value="Update Book" type="submit"></input>
                    </div>
                    <br><br>
                </form>
            </div>
        </div>
    </div>

    <?php echo isset($data['error'])?$data['error']:''; ?>

</body>
<script>
    
</script>
</html>

