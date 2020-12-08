<?php


  $userid = $_POST['userid'];
  $userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
  $gender = $_POST['sex'];
  $age = $_POST['age'];

  $conn = new mysqli("localhost","team10","team10","team10");
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO  member (id, pw, gender, age)
  VALUES ('$userid', '$userpw', '$gender', '$age' )";

  if ($conn->query($sql) === TRUE) {
    echo " <script>
    alert ('회원가입이 완료되었습니다.');
    location.href = 'home.php';
  </script>";}
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
  ?>
