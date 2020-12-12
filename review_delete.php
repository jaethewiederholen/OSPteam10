<?php
include "db_con.php";

$bno = $_GET['num'];
mq("delete from review where number='$bno'");
?>
<script>
  alert("리뷰가 삭제되었습니다.");
  </script>
  <meta http-equiv="refresh" content = "0 url=/osp/review.php">
