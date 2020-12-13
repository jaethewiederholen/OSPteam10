<?php
 session_start();
 if(isset($_SESSION["userid"])) {
    $userid=$_SESSION["userid"];
  }
 $connect = mysqli_connect("127.0.0.1","team10","team10","team10") or die ("connect fail");
 $product = $_POST['product'];
 $URL = './newproduct_view.php';
 $query = "SELECT * from newproduct where name = '$product' ";
 $res = mysqli_query($connect, $query);
 $row = mysqli_fetch_array($res);
 $item = $row[2];
 $chain = $row[1];
 $price = $row[4];
 $content = $row[3];
if(!$product){ ?>
<script>
alert("<?php echo "장바구니에 담을 물건을 선택하세요"?>");
location.replace("<?php echo $URL?>");
</script>
<?php
exit();
}
else{
 $query = "SELECT * FROM temp WHERE name= '$product' and session_id='$userid'";
 $res = mysqli_query($connect, $query);
 $total = mysqli_num_rows($res);
 
 if($total!=1){

 $query2 = "INSERT INTO temp(no, session_id, name, price, content, chain)VALUES(null, '$userid','$item','$price','$content','$chain')";
 $res2 = mysqli_query($connect, $query2);
 if($res2){
    ?>                  <script>
                            alert("<?php echo "장바구니에 담겼습니다."?>");
                            location.replace("<?php echo $URL?>");
                        </script>
    <?php
                    }
                    else{
                            echo "FAIL";
                    }
                    mysqli_close($connect);
 }
 else{?>
    <script>
    alert("<?php echo "이미 장바구니에 등록되었습니다."?>");
    location.replace("<?php echo $URL?>");
    </script>
<?php 
 }
}
    ?>


