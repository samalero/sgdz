<?php
/**
 * Created by IntelliJ IDEA.
 * User: smlr
 * Date: 28.01.17
 * Time: 20:48
 */

    namespace SMLR {

        function htmlspecialchars(string $string): string
        {
            for ($i = 0; $i < strlen($string); ++$i) {
                switch ($string[$i]) {
                    case '&':
                        if(!substr($string,$i,5) == "&amp;" && !substr($string,$i,6) == "&quot;" && !substr($string,$i,6) == "&apos;" && !substr($string,$i,4) == "&lt;" && !substr($string,$i,4) == "&gt;")
                            return htmlspecialchars(substr_replace($string, "&amp;", $i, 1));
                        break;
                    case '"':
                        return htmlspecialchars(substr_replace($string, "&quot;", $i, 1));
                        break;
                    case '\'':
                        return htmlspecialchars(substr_replace($string, "&apos;", $i, 1));
                        break;
                    case '<':
                        return htmlspecialchars(substr_replace($string, "&lt;", $i, 1));
                        break;
                    case '>':
                        return htmlspecialchars(substr_replace($string, "&gt;", $i, 1));
                        break;
                }
            }
            return $string;
        }

        echo htmlspecialchars('<script>alert(\'NO\');</script>');

    }

?>