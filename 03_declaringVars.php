<?php
/**
 * Created by PhpStorm.
 * User: Spot_Big
 * Date: 9.2.2019.
 * Time: 20:48
 */


$var = 'Bob';
$Var = "Joe";
echo "$var, $Var";      // outputs "Bob, Joe"
echo "<br>";
//$4site = 'not yet';     // invalid; starts with a number
$_4site = 'not yet';    // valid; starts with an underscore
//$täyte = 'mansikka';    // valid; 'ä' is (Extended) ASCII 228.

$foo = 'Bob';              // Assign the value 'Bob' to $foo
$bar = &$foo;              // Reference $foo via $bar.
$bar = "My name is $bar";  // Alter $bar...
echo $bar;
echo "<br>";
echo $foo;                 // $foo is altered too.
echo "<br>";


//**************Assignmnet operator =

//Declaring variable
$count = 10;
$list_price = 9.50;
$firstName = 'Bob';
$firstName = "Bobo";
$is_valid = false;
var_dump($is_valid);                 // $foo is altered too.
echo "<br>";

$productCount = $count;
$price = $list_price;
$name = $firstName;
$is_new = $is_valid;

/*
 * 
 */