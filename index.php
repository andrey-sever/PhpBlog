<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        $website_title = 'PHP блог';
        require 'blocks/head.php';
    ?>
</head>
<body>
    <?php require 'blocks/header.php'; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 mb-4">
                <?php
                    require_once 'core/mysql_connect.php';
                    require_once 'core/select_articles.php';
                    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                        $dateUnix = $row->date;
                        $id = $row->id;
                        require 'core/date_from_unix.php';
                        require 'core/get_count_comments.php';
                        echo "
                            <h2>$row->title</h2>
                            <p>$row->intro</p>
                            <p><b>Автор статьи:</b><mark>$row->author</mark></p>
                            <p><b>Время публикации: </b><u>$date</u></p>
                            <p>Комментариев: <span>$countComments</span></p>
                            <a href='news.php?id=$row->id' title='$row->title'>
                            <button class='btn btn-warning mb-5'>Прочитать больше</button>
                            </a>
                        ";
                    }
                ?>
            </div>

            <?php require 'blocks/aside.php';?>
        </div>
    </div>

    <?php require 'blocks/footer.php';?>

</body>
</html>