<?php

include('./db_conn.php');

$pnickname = $_POST['pnickname'];
$nickname = $_POST['nickname'];

$sql = "update restaurant set nickname = '$nickname' where nickname='$pnickname'";

$result = mysqli_query($conn, $sql);

if($result){
    echo "<script>alert('변경되었습니다');</script>";
}else{
    echo "<script>alert('오류 발생');<script>";
}

echo "<meta http-equiv='refresh' content='0;url=user_correction.html'>";

?>