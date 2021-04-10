<?php

    require_once 'connection.php';

    $inquiry = $connection->prepare('SELECT * FROM posts');
    $inquiry->execute();

    echo json_encode($inquiry->fetchAll());
