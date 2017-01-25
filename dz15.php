<?php
/**
 * Created by IntelliJ IDEA.
 * User: smlr
 * Date: 25.01.17
 * Time: 15:54
 */

    function in_array($arr, $target) : bool {
        foreach ($arr as $value) {
            if($value == $target)
                return true;
        }
        return false;
    }

?>