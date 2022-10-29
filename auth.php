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
                    if (!isset($_COOKIE['login']) || $_COOKIE['login'] == ''):
                ?>
                <h4>Форма авторизации</h4>
                <form id="auth-form">
                    <label for="login">Логин</label>
                    <input type="text" name="login" id="login" class="form-control">

                    <label for="pass">Пароль</label>
                    <input type="password" name="pass" id="pass" class="form-control">

                    <div class="alert alert-danger mt-2" id="errorBlock"></div>

                    <button id="authorization-submit" type="button" class="btn btn-success mt-3">Войти</button>
                </form>
                <?php
                    else:
                ?>
                <h2><?=$_COOKIE['login']?></h2>
                <button class="btn btn-danger" id="exit_authorization">Выйти</button>
                <?php
                    endif;
                ?>
            </div>

            <?php require 'blocks/aside.php';?>
        </div>
    </div>

    <?php require 'blocks/footer.php';?>

    <script src="/js/auth.js"></script>
</body>
</html>