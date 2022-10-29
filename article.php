<?php
    if (!isset($_COOKIE['login']) || $_COOKIE['login'] == '') {
        header('Location: reg.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    $website_title = 'Добавление статьи';
    require 'blocks/head.php';
    ?>
</head>
<body>
    <?php require 'blocks/header.php'; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 mb-4">
                <h4>Добавление статьи</h4>
                <form id="article-add">
                    <label for="title">Заголовок статьи</label>
                    <input type="text" name="title" id="title" class="form-control">

                    <label for="intro">Интро статьи</label>
                    <textarea name="intro" id="intro" class="form-control"></textarea>

                    <label for="text">Текст статьи</label>
                    <textarea name="text" id="text" class="form-control"></textarea>

                    <div class="alert alert-danger mt-2" id="errorBlock"></div>

                    <button id="article-submit" type="button" class="btn btn-success mt-3">Добавить</button>
                    <div class="alert alert-success" role="alert" id="successBlock">Готово!</div>
                </form>
            </div>

            <?php require 'blocks/aside.php';?>
        </div>
    </div>

    <?php require 'blocks/footer.php';?>

    <script src="/js/article.js"></script>
</body>
</html>