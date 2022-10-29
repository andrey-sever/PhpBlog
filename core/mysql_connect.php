<?php
    $db_user = 'root';
    $db_password = '111111';
    $db_name = 'blog_php';
    $db_host = 'localhost';

    $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name;
    $pdo = new PDO($dsn, $db_user, $db_password);