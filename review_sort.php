<?php
include 'db_con.php';
include 'config.php';


if($_POST['sortby']){
  $sortby=$_POST['sortby'];

 if($sortby=="default")
    $sql = mq("SELECT * FROM review ORDER BY number DESC");
  else
    $sql= mq("SELECT * FROM review ORDER By star DESC");

    if($sql){
      while($board=$sql->fetch_array()){
        $t = new stdClass();
        $t->title=$board['title'];
        if(strlen($t->title)>30){
          $t->title=str_replace($board['title'],mb_substr($board['title'],0,30,"utf-8")."...",$board['title']);
        }
        $t->star=$board['star'];
        $t->num=$board['number'];
        $t->id=$board['id'];
        $t->date=$board['date'];
        $o[]=($t);
        unset($t);
      }
      echo json_encode($o,JSON_UNESCAPED_UNICODE);
    }
}
?>
