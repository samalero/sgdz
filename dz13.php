<?php
/**
 * Created by IntelliJ IDEA.
 * User: smlr
 * Date: 25.01.17
 * Time: 15:07
 */

    $names = ["index", "this", "is", "sparta"];
    $exps = [".php", ".html", ".txt", ".js"];

    $rfile = fopen($names[array_rand($names)] . $exps[array_rand($exps)], "w");
    if(!fwrite($rfile, mt_rand(0, 9999999)))
        echo "Ошибка доступа!";
    else
        echo "Файл записан";

?>