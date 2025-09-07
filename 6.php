<?php
/* 논리연산자 */
// and, or, xor, &&, ||

$x = true;
$y = true;

// 논리 곱 1 * 1 = 1 (and, &&)
var_dump($x and $y); //true

// 논리 합 1 + 0 = 1 (or, ||)
$y = false;
var_dump($x or $y); //true



/* 문자열 연산자 */
$a = "Hello ";
$b = "World!";
echo "<br>" . $a . $b; // Hello World!


?>