<?php
include 'config.php';

$conn = new mysqli("localhost","team10","team10","team10");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$text=$_POST['text'];

if($text!=""){
  $sql="SELECT * FROM recipe WHERE title LIKE '%$text%'";}
else{
  $sql="SELECT * FROM recipe WHERE title IS NOT NULL";
}
$result_set = mysqli_query($conn, $sql);
$o=[];
if($result_set){
while($board= mysqli_fetch_array($result_set)){
  $t = new stdClass();
  $t->title=$board['title'];
  if(strlen($t->title)>30){
    $t->title=str_replace($board['title'],mb_substr($board['title'],0,30,"utf-8")."...",$board['title']);
  }
  $t->ingredient=$board['ingredient'];
  $t->id=$board['id'];
  $t->number=$board['number'];
  $t->file=$board['file'];
  $o[]=($t);
  unset($t);
}
echo json_encode($o,JSON_UNESCAPED_UNICODE);
}


?>
