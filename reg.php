<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    $website_title = 'Регистрация на сайте';
    require 'blocks/head.php';
    ?>
</head>
<body>
    <?php require 'blocks/header.php'; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 mb-4">
                <h4>Форма регистрации</h4>
                <form id="reg-add">
                    <label for="name">Ваше имя</label>
                    <input type="text" name="name" id="name" class="form-control">

                    <label for="login">Логин</label>
                    <input type="text" name="login" id="login" class="form-control">

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">

                    <label for="pass">Пароль</label>
                    <input type="password" name="pass" id="pass" class="form-control">

                    <div class="alert alert-danger mt-2" id="errorBlock"></div>

                    <button id="registration-submit" type="button" class="btn btn-success mt-3">Зарегистрироваться</button>
                    <div class="alert alert-success" role="alert" id="successBlock">Готово!</div>
                </form>
            </div>

            <?php require 'blocks/aside.php';?>
        </div>
    </div>

    <?php require 'blocks/footer.php';?>

    <script src="/js/reg.js"></script>
</body>
</html>