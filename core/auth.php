<?php

    $login = trim(filter_var($_POST['login'], FILTER_UNSAFE_RAW));
    $pass = trim(filter_var($_POST['pass'], FILTER_UNSAFE_RAW));

    $error = '';
    if (strlen($login) <= 3)
        $error = 'Логин должен содержать не менее 3-х знаков.';
    elseif (strlen($pass) < 1)
        $error = 'Пароль должен содержать не менее 1-го знака.';

    if ($error != '') {
        echo $error;
        exit();
    }

    $hash = '10zM92La3874QIUw56';
    $pass = md5($pass . $hash);

    require_once 'mysql_connect.php';
    require_once 'exists_user_login_pass.php';

    if (!$user) {
        echo 'Пользователя не существует';
    } else {
        setcookie('login', $login, time() + 3600, '/');
        echo '1';
    }
