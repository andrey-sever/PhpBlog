<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    require_once 'core/mysql_connect.php';
    $id = $_GET['id'];
    require_once 'core/data_for_one_article.php';

    $website_title = $article->title;
    require 'blocks/head.php';
    ?>
</head>
<body>
<?php require 'blocks/header.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mb-4">
           <div class="jumbotron">
               <h1><?=$article->title?></h1>
               <p><b>Автор статьи:</b><mark><?=$article->author?></mark></p>
               <?php
                    $dateUnix = $article->date;
                    require_once 'core/date_from_unix.php';
               ?>
               <p><b>Время публикации: </b><u><?=$date?></u></p>
               <p>
                   <?=$article->intro?>
                   <br><br>
                   <?=$article->text?>
               </p>
           </div>

            <h3 class="mt-5">Комментарии</h3>
            <?php
                if (!isset($_COOKIE['login']) || $_COOKIE['login'] == ''):
            ?>
            <div class="alert alert-danger mt-2">Чтобы оставлять комментарий нужно зарегистрироваться.</div>
            <?php
                elseif($_COOKIE['login'] == $article->author):
            ?>
            <div class="alert alert-danger mt-2">Нельзя оставлять комментарий под своей статьей.</div>
            <?php
                else:
            ?>
            <form action="news.php?id=<?=$id?>" method="post">
                <label for="message">Сообщение</label>
                <textarea name="message" id="message" class="form-control"></textarea>

                <button type="submit" id="message-submit" class="btn btn-success mb-3 mt-3">Добавить комментарий</button>
            </form>
            <?php
                require 'core/add_comment.php';
                endif;
                require 'core/processing_comments.php';
            ?>
        </div>

        <?php require 'blocks/aside.php';?>
    </div>
</div>

<?php require 'blocks/footer.php';?>

</body>
</html>