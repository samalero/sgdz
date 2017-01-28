<?php
/**
 * Created by IntelliJ IDEA.
 * User: smlr
 * Date: 26.01.17
 * Time: 13:08
 */

    $dir = realpath(".");

    $mem = [];

    function folderSize ($dir, &$save, $tabs = 0)
    {
        $size = 0;

        foreach (glob($dir .'/*') as $filename) {
            if($filename != "." && $filename != ".." && !is_link($filename)) {
                $size += is_file($filename) ? filesize($filename) : folderSize($filename, $link = &$save[], $tabs+1);
            }
        }

        $save[] = str_repeat("&nbsp;&nbsp;&nbsp;", $tabs) . $dir . " - " . $size . "<br>";
        unset($link);
        return $size;
    }

    function showArr($arr) {
        sort($arr);
        foreach ($arr as $key => $item) {
            if(is_array($item)) {
                showArr($item);
            }
            else
                echo "$item<br>";
        }
    }

    folderSize($dir, $mem);
    showArr($mem);

?>