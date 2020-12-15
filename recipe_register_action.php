<html>
<head>
<meta charset="utf-8">
</head>
<?php

$id = $_POST['name'];                      //Writer
$pw = $_POST['pw'];                        //Password
$title = $_POST['title'];                  //Title
$ingredient = $_POST['ingredient'];        //ingredient
$content = $_POST['content'];              //Content
$date = date('Y-m-d H:i:s');               //Date
$URL = './recipe_board.php';               //return URL
$tmpfile =  $_FILES['file']['tmp_name'];
$o_name = $_FILES['file']['name'];
$filename = iconv("UTF-8", "EUC-KR",$_FILES['file']['name']);
$folder = "../../upload/".$filename;
move_uploaded_file($tmpfile,$folder);

$connect = mysqli_connect("localhost","team10","team10","team10") or die("fail");
$query = "INSERT INTO recipe(number, title, ingredient, content, date, hit, id, file) VALUES (null, '$title', '$ingredient', '$content', '$date', 0, '$id', '$o_name')";
$result = mysqli_query($connect, $query);
if($result){
?>
<script>
alert("<?php echo "글이 등록되었습니다."?>");
location.replace("<?php echo $URL?>");
</script>
<?php
}
else{
echo "FAIL";
}
mysqli_close($connect);
?>
