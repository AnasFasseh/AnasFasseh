<?php
    require ('cnx.php');
        $result = $c->prepare('UPDATE todo SET done="0" WHERE id=:par1');
        $result->bindValue('par1', $_GET['id']);
        if ($result->execute()) {
            header('Location:index.php');
        }
?>