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

// 카운트 계산
$sql = "SELECT COUNT(*) as count FROM safe WHERE 안전관리처 = '안전관리처 본부 배정현황'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$count1 = $row['count'];

$sql = "SELECT COUNT(*) as count FROM safe WHERE 지부 = '각 지부별 배정현황'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$count2 = $row['count'];

// POST 요청이 들어왔는지 확인
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // POST로 전송된 데이터 가져오기
  $region = $_POST['지역'];
  $supervisory_body = $_POST['감독기관'];
  $education_facility = $_POST['해당교육시설명'];
  $official_receipt_date = $_POST['공문접수일'];
  $construction_name = $_POST['대상공사명'];
  $safety_evaluation_type = $_POST['안전성평가대상유형'];
  $construction_scale = $_POST['공사규모연면적'];
  $educational_environment_target = $_POST['교육환경평가대상여부'];

  $sql = "INSERT INTO safe (`지역`, `감독기관`, `해당교육시설명`, `공문접수일`, `대상공사명`, `안전성평가대상유형`, `공사규모연면적`, `교육환경평가대상여부`)
        VALUES ('$region', '$supervisory_body', '$education_facility', '$official_receipt_date', '$construction_name', '$safety_evaluation_type', $construction_scale, '$educational_environment_target')";

  // SQL 쿼리 실행
  if ($conn->query($sql) === TRUE) {
    echo '<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    등록되었습니다!
    </div>';
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // POST로 전송된 데이터 가져오기
  $safety_headquarters_manager = $_POST['안전관리처'];
  $branch_manager = $_POST['지부'];

  // 나머지 코드...

  $sql = "INSERT INTO safe (`안전관리처`, `지부`) VALUES ('$safety_headquarters_manager', '$branch_manager')";

  // SQL 쿼리 실행
  if ($conn->query($sql) === TRUE) {
    echo '수정되었습니다';
  } else {
    echo "잘못된 경로입니다" . $sql . "<br>" . $conn->error;
  }
}

$sql = "SELECT * FROM safe";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 각 행의 데이터를 출력
  while($row = $result->fetch_assoc()) {
    echo "안전관리처 담당자: " . $row['안전관리처'] . "<br>";
    echo "지부 담당자: " . $row['지부'] . "<br>";
    // 나머지 코드...
  }
} else {
  echo "No results";
}

// 데이터 가져오는 부분 추가
$sql = "SELECT * FROM safe";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // HTML 테이블 생성
    echo "<table style='border-collapse: collapse; width: 100%; text-align: center; margin-top: 20px;'>";
    echo "<tr><th style='padding: 10px; border: 1px solid #dddddd; text-align: center; white-space: nowrap;'>지역</th>
    <th style='padding: 10px; border: 1px solid #dddddd; text-align: center; white-space: nowrap;'>감독기관</th>
    <th style='padding: 10px; border: 1px solid #dddddd; text-align: center; white-space: nowrap;'>해당교육시설명</th>
    <th style='padding: 10px; border: 1px solid #dddddd; text-align: center; white-space: nowrap;'>공문접수일</th>
    <th style='padding: 10px; border: 1px solid #dddddd; text-align: center; white-space: nowrap;'>대상공사명</th>
    <th style='padding: 10px; border: 1px solid #dddddd; text-align: center; white-space: nowrap;'>안전관리처</th>
    <th style='padding: 10px; border: 1px solid #dddddd; text-align: center; white-space: nowrap;'>지부</th>
    <th style='padding: 10px; border: 1px solid #dddddd; text-align: center; white-space: nowrap;'>안전성평가대상유형</th>
    <th style='padding: 10px; border: 1px solid #dddddd; text-align: center; white-space: nowrap;'>공사규모연면적</th>
    <th style='padding: 10px; border: 1px solid #dddddd; text-align: center; white-space: nowrap;'>교육환경평가대상여부</th></tr>";

    // 각 행의 데이터를 출력
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='padding: 10px; border: 1px solid #dddddd; white-space: nowrap;'>" . $row['지역'] . "</td>";
        echo "<td style='padding: 10px; border: 1px solid #dddddd; white-space: nowrap;'>" . $row['감독기관'] . "</td>";
        echo "<td style='padding: 10px; border: 1px solid #dddddd; white-space: nowrap;'>" . $row['해당교육시설명'] . "</td>";
        echo "<td style='padding: 10px; border: 1px solid #dddddd; white-space: nowrap;'>" . $row['공문접수일'] . "</td>";
        echo "<td style='padding: 10px; border: 1px solid #dddddd; white-space: nowrap;'>" . $row['대상공사명'] . "</td>";
        echo "<td style='padding: 10px; border: 1px solid #dddddd; white-space: nowrap;'>" . $row['안전관리처'] . "</td>";
        echo "<td style='padding: 10px; border: 1px solid #dddddd; white-space: nowrap;'>" . $row['지부'] . "</td>";
        echo "<td style='padding: 10px; border: 1px solid #dddddd; white-space: nowrap;'>" . $row['안전성평가대상유형'] . "</td>";
        echo "<td style='padding: 10px; border: 1px solid #dddddd; white-space: nowrap;'>" . $row['공사규모연면적'] . "</td>";
        echo "<td style='padding: 10px; border: 1px solid #dddddd; white-space: nowrap;'>" . $row['교육환경평가대상여부'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No results";
}

// 데이터베이스 연결 종료
$conn->close();
?>

