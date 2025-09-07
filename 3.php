<?php

$str = "나는 자랑스런 미국인이다.";
$str1 = str_replace("미국인", "한국인", $str); //문자열 바꾸기
echo $str1;


$x = 3333;
echo "<br>";
var_dump(is_int($x)); // is_int: 정수인지 확인

$x = 33.33;
if(is_float($x)) { // is_float: 실수인지 확인
    echo "<br>실수입니다.";
} else {
    echo "<br>실수가 아닙니다.";
}
// is_string, is_bool, is_array, is_object, is_null 여러가지 있음.
// is_numeric은 숫자인지 확인 (단 문자열로 된 숫자도 가능)

?>