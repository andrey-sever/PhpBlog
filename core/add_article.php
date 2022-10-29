<?php

$title = trim(filter_var($_POST['title'], FILTER_UNSAFE_RAW));
$intro = trim(filter_var($_POST['intro'], FILTER_UNSAFE_RAW));
$text = trim(filter_var($_POST['text'], FILTER_UNSAFE_RAW));

$error = '';
if (strlen($title) < 4)
    $error = 'Загаловок не менее 4-х знаков.';
elseif (strlen($intro) < 15)
    $error = 'Интро не менее 15-х знаков.';
elseif (strlen($text) < 20)
    $error = 'Текст не менее 20-ти знаков.';

if ($error != '') {
    echo $error;
    exit();
}

require_once 'mysql_connect.php';

$outDate = substr(str_replace('.', '', microtime(true)), 0, -1);
$sql = 'INSERT INTO articles (title, intro, text, date, author) VALUES(?, ?, ?, ?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$title, $intro, $text, $outDate, $_COOKIE['login']]);

echo '1';
