<?php

    $months = ["Января", "Февраля", "Марта", "Апреля", "Мая", "Июня", "Июля", "Августа", "Сентября", "Октября", "Ноября", "Декабря"];

    $holidays = [strtotime("01 January"), strtotime("07 January")];

    function getTime($time, $changed = false) {
        global $holidays;
        if(date("N", $time) != (6 || 7))
            return getTime(strtotime("+1 day", $time), true);
        else if(in_array($time, $holidays))
            return getTime(strtotime("+1 day", $time), true);
        else if(date("H", $time) >= 15) {
            if ($changed == false)
                return getTime(strtotime("+1 day", $time), true);
        }
        return $time;
    }

    $result = getTime(time());
    echo date("d",$result) . " " . $months[date("n",$result) - 1];

?>