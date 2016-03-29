<?php

$string = 'please reverse me';

$length = strlen($string);

$reverse = '';

for ($i = 0; $i < $length; $i++) {
    $position = $length - $i - 1;
    $reverse .= $string[$position];
}

echo $reverse;