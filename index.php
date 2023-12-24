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
<nav class="navbar">
        TodoList
    </nav>
    <div class="container">
        <form method="post">
            <div class="adding-form">
                <input type="text" name="title" placeholder="Task Title">
                <input type="submit" value="Add" class="btn" name="add">
                
            </div>
            <div class="taches-list">
            <?php  
                $res = $c->query('SELECT * FROM todo ORDER BY created_at DESC');
                    while($line = $res->fetch(PDO::FETCH_ASSOC)) {
                        $id = $line['id'];
                        if ($line['done'] == '0') {
                            echo "<div class='not-done'><span>".$line['title']."</span><div><a href='terminer.php?id=$id'><input type='button' value='done' name='done' class='btn special-btn' /></a><a href='supprimer.php?id=$id'><input type='button' value='X' class='xbtn' /></a></div></div>";
                        } else {
                            echo "<div class='done'><span>".$line['title']."</span><div><a href='undo.php?id=$id'><input type='button' value='undo' class='btn special-btn' /></a><a href='supprimer.php?id=$id'><input type='button' value='X' class='xbtn' /></a></div></div>";
                        }
                        
                    };
            ?>
            </div>
        </form>
    </div>

    <script src="../bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
</body>
</html>