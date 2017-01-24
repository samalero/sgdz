<?php
    
    $data = "sfsdsdgfad dfgdsh aewghra fhdsfhdhshhs rhdsfhdfh sdg fdhhdfh sgrg aeFEDzsg tdhdstrhsdtrh dgvxng dawfesfjehfk segsegegseg";

    $edata = explode(" ",$data);

    for($i = 0; $i < count($edata); ++$i) {
        if(strlen($edata[$i]) > 8) {
            $edata[$i] = substr($edata[$i],0,6) . ".";
        }
    }
    $newdata = implode(" ",$edata);
    echo $newdata;
?>
