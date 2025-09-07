<?php
// phpinfo(); //phpinfo() 함수는 PHP의 현재 설정 정보를 출력합니다.
// 이 함수는 PHP의 버전, 설치된 확장 모듈, 환경 변수, 서버 정보 등 다양한 정보를 포함합니다. (PDO 있는지 확인)
// exit;

$server_name = $_SERVER['SERVER_NAME'];
$username = "root";
$password = "";

//mysqli 커넥션 방식도 있지만 잘사용하지않고 (자바의 jdbc와 비슷)
//PDO 방식이 더 많이 사용됨 (php 7버전부터는 mysqli보다 PDO를 권장)
try {
	$conn = new PDO("mysql:host=$server_name;", $username, $password);
	echo "Connected successfully"; 
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}


?>