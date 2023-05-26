<?php
// 데이터베이스 연결 정보
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "safety";  // 데이터베이스 이름

// 데이터베이스에 연결
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결이 성공했는지 확인
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");  // 데이터베이스 연결에 UTF-8을 사용

// 데이터베이스 연결 종료
$conn->close();
?>