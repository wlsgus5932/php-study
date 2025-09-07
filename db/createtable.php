<?php
$servername = $_SERVER['SERVER_NAME'];
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=firstdb", $username, $password);
    // 에러 발생 시 PDO가 더 자세한 예외를 던지도록 설정 (exec() 실행 시)
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "DB 연결 성공 <br>";
} catch (PDOException $e) {
    echo "<br>" . $e->getMessage();
    exit;
}

try {
    $sql = "CREATE TABLE MyGuests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    $conn->exec($sql);
    echo "firsttable 성공<br>";
} catch (PDOException $e) {
    echo "<br>" . $e->getMessage();
}

$conn = null;
?>