<?php

$x=3;
$y=5;

function test()
{
$GLOBALS['y']=$GLOBALS['y']+$GLOBALS['x'];
}

test();
echo $y;



?>