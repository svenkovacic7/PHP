<?php
$vrijeme = date("d:m:y h:i:s");
echo $vrijeme."<br>";
echo substr($vrijeme, 0, 8)."<br>";
echo substr($vrijeme, 9, 8)."<br>";
echo substr($vrijeme,0,2)."<br>";
echo substr($vrijeme,3,2)."<br>";
echo substr($vrijeme,6,2)."<br>";
echo substr($vrijeme,9,2)."<br>";
echo substr($vrijeme,12,2)."<br>";
echo substr($vrijeme,15,2)."<br>";