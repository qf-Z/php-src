--TEST--
Test array_walk() function : usage variations - 'input' argument containing reference variables
--FILE--
<?php
/*
 * Testing array_walk() with an array having reference variables
*/

echo "*** Testing array_walk() : array with references ***\n";

$value1 = 10;
$value2 = -20;
$value3 = &$value1;
$value4 = 50;

// 'input' array containing references to above variables
$input = array(&$value1, &$value2, -35, &$value3, 0, &$value4);

function callback($value, $key)
{
   // dump the arguments to check that they are passed
   // with proper type
   var_dump($key);  // key
   var_dump($value); // value
   echo "\n"; // new line to separate the output between each element
}

var_dump( array_walk($input, "callback"));

echo "Done"
?>
--EXPECT--
*** Testing array_walk() : array with references ***
int(0)
int(10)

int(1)
int(-20)

int(2)
int(-35)

int(3)
int(10)

int(4)
int(0)

int(5)
int(50)

bool(true)
Done
