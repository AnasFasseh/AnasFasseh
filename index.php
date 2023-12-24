<?php
    require ('cnx.php'); 
    if (isset($_POST['add'])) {
        if (empty($_POST['title'])) {
            echo "<script type='text/javascript'>alert('le champ ne doit pas etre vide');</script>";
        } else {
            $response = $c->prepare('INSERT INTO todo(title) VALUES (:par)');
            $response->bindValue('par', @$_POST['title']);
            $response->execute();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar bg-dark text-light">
        TodoList
    </nav>

    <form action="" method="post">
        <input type="text" name="title" placeholder="Task Title">
        <input type="submit" value="Add" class="btn btn-primary">
    </form>

    <script src="../bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
</body>
</html>