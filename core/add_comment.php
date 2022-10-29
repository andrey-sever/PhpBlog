<?php
    if (isset($_POST['message']) && strlen($_POST['message']) > 4) {
        $message = trim(filter_var($_POST['message']), FILTER_UNSAFE_RAW);

        $sql = 'INSERT INTO comments(login, message, article_id) VALUES (?, ?, ?)';
        $query = $pdo->prepare($sql);
        $query->execute([$_COOKIE['login'], $message, $id]);
    }
