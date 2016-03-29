<?php

$str  = 'This is my test string';
$temp = '';
$out  = '';


$i = 0;

while ($d = $str[$i]) {
    if ($d == ' ') {
        $out  = ' '.$temp.$out;
        $temp = '';
    } else {
        $temp .= $d;
    }
    if ($i < strlen($str) - 1 ) {
        $i++;
    } else {
        break;
    }
}
echo $temp.$out;
