<?php
$id = $_POST['id'];
$pass=$_POST['pass'];

$con = mysqli_connect("127.0.0.1","team10", "team10", "team10");
$sql = "SELECT * FROM member WHERE id='$id'";
$result = mysqli_query($con, $sql);
$num_match= mysqli_num_rows($result);

if(!$num_match){
  echo("
        <script>
          window.alert('등록되지 않은 아이디입니다.')
          history.go(-1)
        </script>
        ");
}
else {
  $row = mysqli_fetch_assoc($result);
  $db_pass = $row['pw'];

  mysqli_close($con);

  /*비번 비교*/
  if($pass != $db_pass){
    echo("
      <script>
        window.alert('비밀번호가 틀립니다.')
        history.go(-1)
        </script>");
        exit;
  }else{
    session_start();
    $_SESSION["userid"]=$row["id"];
    echo("
    <script>
    window.alert('로그인 되었습니다.')
    location.href='home.php';
    </script>");
  }
}
 ?>
