<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> 신상품 보기 </title>
  </head>
<body>

<?php
$connect = mysqli_connect("127.0.0.1","team10","team10","team10");
if(mysqli_connect_errno()){
      printf("Connect failed: %s\n", mysqli_connect_errno());
      exit();
}
else{
        $sql = "SELECT * FROM newproduct";
        $res=mysqli_query($connect,$sql);
        if($res){
           while ($row=mysqli_fetch_array($res)){
              $name=$row[1];
              $content=$row[2];
              $price=$row[3];
              $purchase_link=$row[4];
              $youtube_link=$row[5];
             echo "상품이름: ".$name."<br>";
             echo "설명: ".$content."<br>";
             echo "가격: ".$price."<br>";
             echo "유튜브리뷰 링크: ".$youtube_link."<br>";
             echo "구매처 링크: ".$purchase_link."<br><br>";
          }
      }
      else{
          printf("Could not select rows: %s\n", mysqli_error($mysqli));
      }
   }

mysqli_close($connect);

?>
</body>
</html>
