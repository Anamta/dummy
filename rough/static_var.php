<?php

function test()
{
static $x=0;
echo $x;
$x++;
}

test();
echo "<br>";
test();
echo "<br>";
test();
echo "<br>";

?>