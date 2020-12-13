<?php
  $userid = $_POST['userid'];
  $userpw = $_POST['userpw'];
  $gender = $_POST['sex'];
  $age = $_POST['age'];
  $date = date('Y-m-d H:i:s');

  $conn = new mysqli("127.0.0.1","team10","team10","team10");
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * from member WHERE id ='$userid'";
  $result = mysqli_query($conn, $sql);
  $exist = mysqli_num_rows($result);
  if($exist>0){
    echo "<script> alert('이미 등록된 아이디입니다.'); </script>";
    echo "<script> window.history.back(); </script>";
    exit();
  }
  else{
  $sql = "INSERT INTO member(id, pw, gender, age, date) VALUES ('$userid', '$userpw', '$gender', '$age', '$date')";

  if ($conn->query($sql) === TRUE) {
    echo " <script>
    alert ('회원가입이 완료되었습니다.');
    location.href = 'login.php';
  </script>";}
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}
  ?>
