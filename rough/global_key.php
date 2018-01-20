<?php

$x=10;
$y=20;

function test()
{
global $x,$y;
$y=$x+$y;
}

test();
echo "$y";
?>