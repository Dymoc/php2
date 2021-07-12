<?php

function add($x, $y) {
    return $x + $y;
}

$x = 1;
$y = 2;
if (add($x, $y) == 3) {
    echo "OK";
} else {
    echo "Error add()";
}