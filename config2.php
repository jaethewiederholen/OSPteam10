
<?php
  session_start();
  if(isset($_SESSION["userid"])) {
    $userid=$_SESSION["userid"];
  }
  else{  
    $URL = "./login.php";  ?>
    <script>
    alert("로그인하세요.");
    location.replace("<?php echo $URL?>");
    </script> 
<?php
}
?>
