<?php


  $userid = $_POST['userid'];
  $userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
  $username = $_POST['username'];
  $useremail = $_POST['useremail'];

  $conn = new mysqli("localhost","root","kjy456852","osp");
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO  members (id, pw, name, email)
  VALUES ('$userid', '$userpw', '$username', '$useremail' )";

  if ($conn->query($sql) === TRUE) {
    echo " <script>
    alert ('회원가입이 완료되었습니다.');
    location.href = 'home.html';
  </script>";}
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
  ?>
