<?php
    $sql="INSERT INTO topic(title, description, author, created) VALUES('".$_POST['title']."', '".$_POST['description']."', '".$_POST['author']."', now())";
    echo $sql;
?>