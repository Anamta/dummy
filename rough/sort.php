<?php

$num=array(1,4,10,3,5,8,2);
sort($num);

$count=count($num);
for($x=0;$x<$count;$x++)
{
	echo $num[$x];
	echo "<br>";
}

?>