<?php
    $dateUnix = substr_replace($dateUnix, "", -3);
    $date = date('d ', $dateUnix);
    $array = ["Января", "Февраля", "Марта", "Апреля", "Мая", "Июня", "Июля", "Августа", "Сентября", "Октября",
        "Ноября", "Декабря"];
    $date .= $array[date('n', $dateUnix) - 1];
    $date .= date(' Y', $dateUnix);
    $date .= date(' H:i', $dateUnix);
