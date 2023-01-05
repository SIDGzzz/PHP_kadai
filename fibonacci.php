<?php
for([$i=[0,1],$a=1];count($i)<=21;$a++)$i[]=$i[$a-1]+$i[$a];
echo implode("\n", $i);