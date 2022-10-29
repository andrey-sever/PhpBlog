<?php
    $sql = 'SELECT * FROM comments WHERE article_id = :id ORDER BY id DESC';
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);
    $comments = $query->fetchAll(PDO::FETCH_OBJ);

    foreach ($comments as $comment) {
        echo "
            <div class='alert alert-info mb-2'>
            <h4>$comment->login</h4>
            <p>$comment->message</p>
            </div>
            ";
    }
