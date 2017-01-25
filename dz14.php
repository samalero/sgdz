<?php
/**
 * Created by IntelliJ IDEA.
 * User: smlr
 * Date: 25.01.17
 * Time: 15:22
 */

    $exps = ["*.jpg", "*.png", "*.gif"];
    $fdata = [];

    foreach ($exps as $exp) {
        foreach (glob($exp) as $filename) {
            $fdata[] = $filename;
        }
    }

    echo "<img src='" . $fdata[array_rand($fdata)] . "' alt='image' />";

?>