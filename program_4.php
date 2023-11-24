<!-- Write a program using all the operators. -->
<?php

// Arithmetic operators
$number1 = 10;
$number2 = 5;

$addition = $number1 + $number2;
$subtraction = $number1 - $number2;
$multiplication = $number1 * $number2;
$division = $number1 / $number2;
$modulus = $number1 % $number2;
$exponentiation = $number1 ** $number2;

echo "<br/>Arithmetic Operators:\n";
echo "<br/>Addition: $addition\n";
echo "<br/>Subtraction: $subtraction\n";
echo "<br/>Multiplication: $multiplication\n";
echo "<br/>Division: $division\n";
echo "<br/>Modulus: $modulus\n";
echo "<br/>Exponentiation: $exponentiation\n\n";

// Assignment operators
$variable = 5;

echo "<br/>Assignment Operators:\n";
echo "<br/>Original Value: $variable\n";

$variable += 2;
echo "<br/>After Addition: $variable\n";

$variable -= 3;
echo "<br/>After Subtraction: $variable\n";

$variable *= 4;
echo "<br/>After Multiplication: $variable\n";

$variable /= 2;
echo "<br/>After Division: $variable\n\n";

// Comparison operators
$value1 = 10;
$value2 = "10";

echo "<br/>Comparison Operators:\n";
var_dump($value1 == $value2);   // Loose equality
var_dump($value1 === $value2);  // Strict equality
var_dump($value1 != $value2);   // Loose inequality
var_dump($value1 !== $value2);  // Strict inequality
var_dump($value1 > $value2);    // Greater than
var_dump($value1 < $value2);    // Less than
var_dump($value1 >= $value2);   // Greater than or equal to
var_dump($value1 <= $value2);   // Less than or equal to
echo "\n";

// Logical operators
$condition1 = true;
$condition2 = false;

echo "<br/>Logical Operators:\n";
var_dump($condition1 && $condition2); // Logical AND
var_dump($condition1 || $condition2); // Logical OR
var_dump(!$condition1);               // Logical NOT
echo "\n";


?>
