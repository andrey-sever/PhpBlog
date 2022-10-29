<?php
    $sql = 'SELECT * FROM articles WHERE id =:id';
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);
    $article = $query->fetch(PDO::FETCH_OBJ);