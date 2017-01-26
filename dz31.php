<?php
/**
 * Created by IntelliJ IDEA.
 * User: smlr
 * Date: 26.01.17
 * Time: 12:24
 */

    $file = fopen("names.txt", "r");
    $memory = [];

    if($file) {
        while(!feof($file)) {
            $memory[] = fgets($file);
        }
        fclose($file);
        asort($memory);
        foreach ($memory as $item) {
            echo "$item<br>";
        }
    }

?>