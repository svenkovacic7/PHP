<?php
/* Zadatak : ispisi samo brojeve djeljive s 3*/
$a = array(1,2,3,4,5,6,7,8,9);
for ($i = 0; $i < 9; $i++){
    if ($a[$i] % 3 == 0)
    {echo $a[$i];
    }
}

?>