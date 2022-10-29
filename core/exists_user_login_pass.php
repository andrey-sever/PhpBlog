<?php
    $sql = 'SELECT id FROM users WHERE login =:login AND pass =:pass';
    $query = $pdo->prepare($sql);
    $query->execute(['login' => $login, 'pass' => $pass]);
    $user = $query->fetch(PDO::FETCH_OBJ);
