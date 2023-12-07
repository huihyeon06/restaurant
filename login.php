<?php

include('./db_conn.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select id from restaurant where uid = '$username' and password = '$password'";

$result = mysqli_query($conn, $sql);
if($result -> num_rows >0){
    echo "<script>alert('로그인 성공')</script>";
    echo "<meta http-equiv='refresh' content='0;url=main.html'>";
}else{
    echo "<script>alert('아이디 또는 비밀번호가 틀렸습니다.')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index.html'>";
}

?>