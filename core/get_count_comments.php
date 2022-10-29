<?php
    $sqlComm = 'SELECT COUNT(*) AS count FROM comments WHERE article_id =:id';
    $queryComm = $pdo->prepare($sqlComm);
    $queryComm->execute(['id' => $id]);
    $data = $queryComm->fetch(PDO::FETCH_OBJ);
    $countComments = $data->count;
