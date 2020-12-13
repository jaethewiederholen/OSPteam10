<?php
include 'config.php';

$conn = new mysqli("localhost","team10","team10","team10");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id=$userid;
$datetime=date('Y-m-d H:i:s');
$title=$_POST['title'];
$content=$_POST['content'];
$star = $_POST['star'];
$cvs=$_POST['cvs'];
$item=$_POST['item'];
$cost=$_POST['cost'];
$sql = "INSERT INTO  review (id, date, title, content, star, cvs, item, cost)
VALUES ('$id', '$datetime', '$title', '$content','$star','$cvs','$item','$cost' )";

if ($conn->query($sql) === TRUE) {
  echo " <script>
  alert ('글 작성이 완료되었습니다.');

  location.href = 'review.php';

</script>";}
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?>
