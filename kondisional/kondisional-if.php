<?php
    $suhu = 39;

    if ($suhu > 38) {
        echo "kamu tidak boleh masuk";
    } elseif ($suhu == 38) {
        echo "kamu hati-hati";
    } 
    else {
        echo "kamu boleh masuk";
    }
    
?>