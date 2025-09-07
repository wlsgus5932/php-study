<?php
include 'db.php';

$sql = "SELECT * FROM myguests";
$stmt = $conn->prepare($sql);
$stmt->execute();
$rs = $stmt->fetchAll(PDO::FETCH_ASSOC); 
/* fetchAll : 여러 행을 배열로 반환(연관 배열), 
PDO::FETCH_ASSOC : 열 이름을 키로 사용, 
PDO::FETCH_NUM : 숫자 인덱스를 키로 사용, 
PDO::FETCH_BOTH : 둘 다 사용*/

print_r($rs);

echo "<table border='1'>";
foreach($rs as $row) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['firstname']."</td>";
    echo "<td>".$row['lastname']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "</tr>";
}
echo "</table>";

$conn = null;
?>