<?php
$txt1 = "Learn PHP";
$x = 5;
$y = 4;

echo "<h2>$txt1</h2> " . $txt1 . "<br>";
echo "Sum of $x and $y is " . ($x + $y) . "<br>"; // 문자열과 변수를 연결할 때는 . 사용


$x = 3333;
var_dump($x); // 변수의 자료형과 값을 출력


$x_len = strlen("한글"); //문자열 길이 출력
echo "<br> $x_len bytes";


echo "<br>" . str_word_count("Hello word counter!"); //단어 개수 출력 (한글은 동작 X)


echo "<br>" . strrev("Hello World"); //문자열 뒤집기 -> dlroW olleH


$a = strpos("Hello World", "World"); //문자열 위치 찾기
echo "<br> $a"; // 6
//보통 실무에서 이메일인지 아닌지 구분(@)할 때 많이 사용
if(strpos("aaa@email.com", "@")) {
    echo "<br>이메일이 맞습니다.";
} else {
    echo "<br>이메일이 아닙니다.";
} 

?>