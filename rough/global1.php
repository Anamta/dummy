<?php
$x=12;
$y=23;

function add()
{
$GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}
add();
echo $z;

?>