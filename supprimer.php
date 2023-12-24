<?php
    require ('cnx.php');
        $result = $c->prepare('DELETE FROM todo WHERE id=:par1');
        $result->bindValue('par1', $_GET['id']);
        if ($result->execute()) {
            header('Location:index.php');
        }
?>