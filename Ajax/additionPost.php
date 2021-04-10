<?php
    require_once 'connection.php';

    $inquiry = $connection->prepare("INSERT INTO `posts` SET `heading` = :heading, `name` = :name ,`message` = :message");
    $inquiry->execute(array('heading' =>$_POST['heading'], 'name' => $_POST['name'] ,'message'=> $_POST['message']));

    echo 'ok';
