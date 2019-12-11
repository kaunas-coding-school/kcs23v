<?php

$temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

function rastiVidutineTemperatura(array $A){
    return array_sum($A) / count($A);
}

echo rastiVidutineTemperatura($temp);

