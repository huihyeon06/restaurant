<?php

include('./db_conn.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select id from restaurant where uid = '$username' and password = '$password'";

$result = mysqli_query($conn, $sql);
if($result){
    echo "<script>alert('로그인 성공')</script>";
    echo "<meta http-equiv='refresh' content='0;url=main.html'>";
}else{
    echo "<script>alert('로그인 실패')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index.html'>";
}

?>