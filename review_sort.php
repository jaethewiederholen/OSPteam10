<?php
include 'config.php';
//include 'db_con.php';
//$db->query($sql);

$conn = new mysqli("localhost","team10","team10","team10");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sortby=$_POST['sortby'];
$cvs=$_POST['cvs'];
$item=$_POST['item'];
$cost=$_POST['cost'];


if($cvs!=""){
  $sql = "SELECT * FROM review WHERE cvs= '$cvs'";
  if ($item!=""){
    $sql .=" AND item ='$item'";
    if($cost!=""){
      $sql .=" AND cost = '$cost'";
      if($sortby=="default"){
        $sql .= " ORDER BY number DESC";
      }
      else{
        $sql .= " ORDER BY star DESC";
      }
    }
    else{
      $sql .= " AND cost IS NOT NULL";
      if($sortby=="default"){
        $sql .= " ORDER BY number DESC";
      }
      else{
        $sql .= " ORDER BY star DESC";
      }
    }
  }
  else{
    $sql.=" AND item IS NOT NULL";
    if($cost!=""){
      $sql .=" AND cost = '$cost'";
      if($sortby=="default"){
        $sql .= " ORDER BY number DESC";
      }
      else{
        $sql .= " ORDER BY star DESC";
      }
    }
    else {
      $sql .= " AND cost IS NOT NULL";
      if($sortby=="default"){
        $sql .= " ORDER BY number DESC";
      }
      else{
        $sql .= " ORDER BY star DESC";
      }
    }
  }
}
else{
  $sql = "SELECT * FROM review WHERE cvs IS NOT NULL";
  if ($item!=""){
    $sql .=" AND item ='$item'";
    if($cost!=""){
      $sql .=" AND cost = '$cost'";
      if($sortby=="default"){
        $sql .= " ORDER BY number DESC";
      }
      else{
        $sql .= " ORDER BY star DESC";
      }
    }
    else{
      $sql .= " AND cost IS NOT NULL";
      if($sortby=="default"){
        $sql .= " ORDER BY number DESC";
      }
      else{
        $sql .= " ORDER BY star DESC";
      }
    }
  }
  else{
    $sql.=" AND item IS NOT NULL";
    if($cost!=""){
      $sql .=" AND cost = '$cost'";
      if($sortby=="default"){
        $sql .= " ORDER BY number DESC";
      }
      else{
        $sql .= " ORDER BY star DESC";
      }
    }
    else{
      $sql .= " AND cost IS NOT NULL";
      if($sortby=="default"){
        $sql .= " ORDER BY number DESC";
      }
      else{
        $sql .= " ORDER BY star DESC";
      }
    }
  }
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
  $t->star=$board['star'];
  $t->img=$board['image'];
  $t->num=$board['number'];
  $t->id=$board['id'];
  $t->date=$board['date'];
  $o[]=($t);
  unset($t);
}
echo json_encode($o,JSON_UNESCAPED_UNICODE);
}

?>
