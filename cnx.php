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