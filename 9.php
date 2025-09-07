<?php
// 너무 기초적인 것들은 스킵 (function, 배열, 클래스 등)



/* 슈퍼글로벌 변수 */
//전역변수, 모든 스크립트에서 접근 가능
//$_GET, $_POST, $_REQUEST, $_SERVER, $_SESSION, $_COOKIE,
print_r($_SERVER); //서버 정보 출력
echo "<br>" . $_SERVER['SERVER_NAME']; //서버 정보의 서버 이름을 출력
echo "<br>";

//http://localhost/9.php?name=홍길동&age=25
print_r($_GET['name']); //get 방식으로 전달된 값 출력

//post
print_r($_POST['name']); //post 방식으로 전달된 값 출력 (form.html)


?>