<?php include 'config2.php'?>
<?php
$connect = mysqli_connect("127.0.0.1","team10","team10","team10") or die ("connect fail");
$newpw = $_POST['newpw'];
$sql = "UPDATE member SET pw='".$newpw."' WHERE id = '$userid'";
$result = mysqli_query($connect,$sql);
if(!$newpw){?>
    <script>
    alert('비밀번호를 입력하세요'); 
    location.href='mypage.php';
    </script>
<?php
}
else{
if ($result) {
session_destroy();
?>
<script>
alert('비밀번호를 변경했습니다.'); 
location.href='login.php';
</script>
<?php }
}
?>