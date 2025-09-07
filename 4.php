<?php
echo pi(); //원주율 출력
echo "<br>" . sqrt(16); //제곱근 출력
echo "<br>" . rand(1, 100); //1~100 사이의 랜덤 숫자 출력
echo "<br>" . round(3.14159, 2); //소수점 2자리까지 반올림
echo "<br>" . ceil(3.14159); //올림
echo "<br>" . floor(3.14159); //내림
echo "<br>" . abs(-6.7); //절대값
echo "<br>" . max(1, 3, 5, 7, 9); //최대값
echo "<br>" . min(1, 3, 5, 7, 9); //최소값
echo "<br>" . number_format(1234567890); //천단위 콤마 찍기
echo "<br>" . number_format(1234567890, 2); //소수점 2자리까지, 천단위 콤마 찍기

define ("GREETING", "안녕하세요"); //상수 정의
echo "<br>" . GREETING;
?>