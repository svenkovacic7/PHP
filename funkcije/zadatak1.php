<?php
    $r = 12;
    function racunaj($r, $pi = 3.14){
        echo "Povrsina : " .  ($r**2 * $pi);
        echo "<br>";
        echo "Opseg : " . (2 * $r * $pi);
    }
    racunaj($r);