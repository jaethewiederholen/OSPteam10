<?php
  $userid = $_POST['userid'];
  $userpw = $_POST['userpw'];
  $date = date('Y-m-d H:i:s');

  $conn = new mysqli("127.0.0.1","team10","team10","team10");
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO member(id, pw, date) VALUES ('$userid', '$userpw', '$date')";

  if ($conn->query($sql) === TRUE) {
    echo " <script>
    alert ('회원가입이 완료되었습니다.');
    location.href = 'login.php';
  </script>";}
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
  ?>
