<?php
    $host= 'localhost';
    $dbname = 'test';
    $user = 'root';
    $password = '';

    $connection = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $password);

