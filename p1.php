<?php

$firstname ="ankur";
// constant in php (but variable are case sesitive but constant are both case sensitive or incasesitive)
define("ABC",50);// constant declaration

$ABC =25;// true makes it case sensitivity 
echo "<br>";
echo ABC;
// datatypes in php
//PHP is loosly typed language--> store multiple value in one variable. you can change the value of variable

$dt1 ='ankur';
$dt2 =14;
$dt3 =3.2;
$dt4 =true;
$dt5 =null;
$dt6 =array(2,3,5);
echo $dt6[0];// to print array single elements

$dt1 =3.5;
echo "<h1> php is loosly typed language</h1>";
echo $dt1;// change string to float value. this is loosly typed.

echo "<h1> discussing var_Dump() function</h1>";
var_dump($dt2);// tell the type of variable

// print "hello"
echo "hello";
// print "'hello'"
echo "<br>";
echo "'hello'";
echo '$dt1';// print the $dt1 as it is
echo "<br>";
echo "$dt2";// print the value of variable $dt2
echo "<br>";


// string manipulation function
$h ='ankur';
$a =strlen($h);
echo $a;

// string replace

echo "<br>";

?>