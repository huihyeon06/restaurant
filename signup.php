<?php

include('./db_conn.php');

$id = $_POST['id'];
$password = $_POST['password'];
$name = $_POST['name'];
$nickname = $_POST['nickname'];
$gender = $_POST['gender'];
$email = $_POST['email'];

$sql = "select * from restaurant where $id";
$result = mysqli_query($conn, $sql);
if($result){
    $sql = "insert into restaurant(uid, password, name, nickname, gender, email) values('$id', '$password', '$name', '$nickname', '$gender', '$email')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('입력이 완료되었습니다');</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.html'>";
    } else {
        echo "<script>alert('입력 중 오류가 발생하였습니다');</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.html'>";
    }
    
    mysqli_close();
}else{
    echo "<script>alert('이미 회원가입 된 아이디 입니다.');</script>";
    echo "<meta http-equiv='refresh' content='0;url=index.html'>";
}



?>