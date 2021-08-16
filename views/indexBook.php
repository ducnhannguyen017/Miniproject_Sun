<?php

if (!isset($_SESSION['username'])) {
    header("Location:/miniproject/loginController/index");
}
// for($i=0; $i<count($_SESSION['list_book']); $i++){
//     var_dump($_SESSION['list_book'][$i]);
// }
// var_dump($_SESSION['list_book'][0]['id'])
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('./views/head.php') ?>
    <title>List Book</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Book Management</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav d-flex justify-content-end">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo $_SESSION['username'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../loginController/logout">logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="content" style="padding-top: 50px;">
            <form action="/miniproject/bookController/create">
                <input type="submit" value="Add new book">
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($data['list_book'])){
                        foreach ($data['list_book'] as $temp) {
                            // $temp = $_SESSION['list_book'][$i];
                            $id=$temp['id'];
                            echo "<tr>
                                    <th scope='row'>" . $temp['id'] . "</th>" .
                                    "<td>" . $temp['title'] . "</td>" .
                                    "<td>" . $temp['author'] . "</td>" .
                                    "<td>" . $temp['price'] . "</td>" .
                                    "<td>
                                        <a href='../bookController/edit/".$id."'> 
                                            <button type='submit' class='btn btn-primary'>Update</button>
                                        </a>
                                        <a href='../bookController/destroy/".$id."'> 
                                            <button type='submit' class='btn btn-danger'>Delete</button>
                                        </a>
                                    </td>
                                </tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>