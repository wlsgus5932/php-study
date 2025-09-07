<?php
//xampp(3.3.0)
//웹서버, DB서버, PHP(8.1.12)
//Apache, MySQL, PHP 컴파일러

$txt = "PHP";
echo "Hello, $txt!";

$x = 5;
$y = 10.5;
$X = 10;
//변수는 대소문자를 구분한다.
echo "<br> x = $x, X = $X";

//함수
function myTest() {
    // $x = 2.5; // 지역변수
    global $x; //전역변수 사용 = 5
    $x++;
    echo "<br> 변수 x의 출력 값: $x";
}

myTest();

echo "<br> 변수 x의 출력 값: $x";


?>