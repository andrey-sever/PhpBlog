<?php

    $name = trim(filter_var($_POST['name'], FILTER_UNSAFE_RAW));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $login = trim(filter_var($_POST['login'], FILTER_UNSAFE_RAW));
    $pass = trim(filter_var($_POST['pass'], FILTER_UNSAFE_RAW));

    $error = '';
    if (strlen($name) < 4)
        $error = 'Имя должно содержать не менее 4-х знаков.';
    elseif (strlen($email) < 4)
        $error = 'Почта должна содержать не менее 4-х знаков.';
    elseif (strlen($login) < 3)
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
    require_once 'exists_user_login.php';

    if ($user) {
        echo 'Такой логин существует.';
        exit();
    }

    $sql = 'INSERT INTO users (name, email, login, pass) VALUES(?, ?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$name, $email, $login, $pass]);

    echo '1';
