<?php
include 'config.php';

ini_set("display_errors", "1");

$uploaddir = 'C:\xampp\htdocs\osp\\';
$uploadfile = $uploaddir . basename($_FILES['img']['name']);
move_uploaded_file($_FILES['img']['tmp_name'],$uploadfile);

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
$image = basename($_FILES['img']['name']);
$sql = "INSERT INTO  review (id, date, title, content, star, cvs, item, cost, image)
VALUES ('$id', '$datetime', '$title', '$content','$star','$cvs','$item','$cost', '$image' )";

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
