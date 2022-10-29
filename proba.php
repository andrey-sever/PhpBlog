<?php
    require_once 'core/mysql_connect.php';
    $id = 1;
    $sql = 'SELECT COUNT(*) AS count FROM comments WHERE article_id =:id';
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);
    $data = $query->fetch(PDO::FETCH_OBJ);

    echo $data->count;
