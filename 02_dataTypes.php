<?php
/**
 * Created by PhpStorm.
 * User: Spot_Big
 * Date: 9.2.2019.
 * Time: 17:58
 */

$a = 1234;
var_dump($a);
echo '<br>';

$a = -123; // a negative number
var_dump($a);
echo '<br>';

$a = 0123; // octal number (equivalent to 83 decimal)
var_dump($a);
echo '<br>';

$a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
var_dump($a);
echo '<br>';

$a = 0b11111111; // binary number (equivalent to 255 decimal)
var_dump($a);
echo '<br>';

//Integer overflow on a 32-bit system
$large_number = 2147483647;
var_dump($large_number);                     // int(2147483647)
echo '<br>';

//Floating point numbers (also known as "floats", "doubles", or "real numbers")
$large_number = 2147483648;
var_dump($large_number);                     // float(2147483648)
echo '<br>';

$million = 1000000;
$large_number =  50000 * $million;
var_dump($large_number);
echo '<br>';

$large_number = 21474.83648;
var_dump($large_number);                     // decimal float(21474.83648)
echo '<br>';

$large_number = -21.47;
var_dump($large_number);                     // negative float(-21.47)
echo '<br>';

$b = 1.2e3;
$c = 7E-10;
var_dump($b);                     // negative float(-21.47)
echo '<br>';
var_dump($c);                     // negative float(-21.47)
echo '<br>';
echo "<hr>\n";



//Integer overflow on a 64-bit system
//$large_number = 9223372036854775807;
//var_dump($large_number);                     // int(9223372036854775807)
//echo '<br>';
//
//$large_number = 9223372036854775808;
//var_dump($large_number);                     // float(9.2233720368548E+18)
//echo '<br>';
//
//$million = 1000000;
//$large_number =  50000000000000 * $million;
//var_dump($large_number);
//echo '<br>';

// == is an operator which tests
// equality and returns a boolean

$action = 'show_version';

if ($action == "show_version") {
    echo "The version is 1.23";
}

$show_separators = true;
// this is not necessary...
if ($show_separators == TRUE) {
    echo "<hr>\n";
}

// ...because this can be used with exactly the same meaning:
if ($show_separators) {
    echo "<hr>\n";
}

//
echo 'this is a simple string';
echo '<br>';

echo '<b>You can also have embedded newlines in 
strings this way as it is
okay to do</b>';
echo '<br>';

// Outputs: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"';
echo '<br>';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\\*.*?';
echo '<br>';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\*.*?';
echo '<br>';

// Outputs: This will not expand: \n a newline
echo 'This will not expand: \n a newline';
echo '<br>';

// Outputs: Variables do not $expand $either
echo 'Variables do not $expand $either';
echo '<br>';

echo '';  // empty string
echo "<hr>\n";

$var;
echo $var;
