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
    <?php 
    $server='localhost';
    $DB_USER='root';
    $DB_PASS='anasfasseh2003';
    $DB_NAME='todolist';

    try{
        $c = new PDO("mysql:host=$server; dbname=$DB_NAME", $DB_USER, $DB_PASS);
        $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e){
        echo "erreur lors de la connexion a la base de données: ".$e->getMessage();
    }
    ?>
    <nav class="navbar bg-dark text-light">
        TodoList
    </nav>


    <script src="../bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
</body>
</html>