<?php
session_start();
session_destroy();
echo("
<script>
alert('로그아웃했습니다');
location.href='home.php';
</script>
");
 ?>