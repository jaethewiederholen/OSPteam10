
<?php
$db=mysqli_connect("localhost", "team10", "team10", "team10");

function mq($sql){
  global $db;
  return $db->query($sql);
}
 ?>

