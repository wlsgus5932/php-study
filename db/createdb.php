<?php
$servername = $_SERVER['SERVER_NAME'];
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;", $username, $password);
    // 에러 발생 시 PDO가 더 자세한 예외를 던지도록 설정 (exec() 실행 시)
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "DB 연결 성공 <br>";
} catch (PDOException $e) {
    echo "<br>" . $e->getMessage();
    exit;
}

try {
    $sql = "CREATE DATABASE firstdb";
    $conn->exec($sql);
    echo "firstdb 생성 성공<br>";
} catch (PDOException $e) {
    echo "<br>" . $e->getMessage();
}

$conn = null;
?>