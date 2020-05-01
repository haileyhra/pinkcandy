<?php
$conn = mysqli_connect("localhost", "root", "candy2011", "pinkcandy");

$sql = "
      INSERT INTO orders
        (Time, Name, Contactnumber, Address, Items, Deliverytime, Amount)
      VALUES(
        NOW(),
        '{$_POST['Name']}',
        '{$_POST['Contactnumber']}',
        '{$_POST['Address']}',
        '{$_POST['Items']}',
        '{$_POST['Deliverytime']}',
        '{$_POST['Amount']}'
    )
";

$result = mysqli_query($conn, $sql);
if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
} else {
  echo '성공했습니다. <a href="index.php">돌아가기</a>';
}
?>
