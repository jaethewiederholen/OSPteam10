<?php
include "config.php";
//include "db_con.php";
ini_set("display_errors", "1");

$uploaddir = 'C:\xampp\htdocs\osp\\';
$uploadfile = $uploaddir . basename($_FILES['img']['name']);
move_uploaded_file($_FILES['img']['tmp_name'],$uploadfile);

$bno= $_POST['idx'];
$id=$userid;
$datetime=date('Y-m-d H:i:s');


$conn=mysqli_connect("localhost", "team10", "team10","team10");

function begin(){
  mysqli_query(mysqli_connect("localhost", "team10", "team10","team10"),"BEGIN");
}
function commit(){
  mysqli_query(mysqli_connect("localhost", "team10", "team10","team10"),"COMMIT");
}
function rollback() {
  mysqli_query(mysqli_connect("localhost", "team10", "team10","team10"),"ROLLBACK");
}


$query = "update review set date='".$datetime."',cvs='".$_POST['cvs']."', item='".$_POST['item']."',cost='".$_POST['cost']."', star='".$_POST['star']."', title='".$_POST['title']."', image='".basename($_FILES['img']['name'])."',content='".$_POST['content']."' where number='".$bno."'";

begin();
$result=mysqli_query($conn,$query);

if(!$result){
    rollback(); // transaction rolls back
    echo "<script>
    alert('수정에 실패했습니다');

    </script>";
    exit;
}else{
    commit(); // transaction is committed
    echo "<script>
    alert('수정되었습니다.');

    </script>";
}

$conn->close();
?>
<meta http-equiv="refresh" content="0 url=/osp/review_read.php?num=<?=$bno?>">
