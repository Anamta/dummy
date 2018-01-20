<?php

//for case_sensitive
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

echo "<br>";
//for case_insensitive
define("GREETING","had a great fun",true);
echo greeting;

echo "<br>";

define("GREETIN", "Welcome to W3Schools.com!");
  function myfun()
  {
	  echo GREETIN;
  }
  myfun();
?>