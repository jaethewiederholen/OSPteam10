<!DOCTYPE html>
<html lang="ko">
<?php include 'config.php'?> <!--config.php 삽입-->
<style>
.si{
font-family: Noto Serif Telugu;
font-size: 20px;
margin-top: -0.5%;
text-align: right;
}
.na{
font-family: Noto Serif Telugu;
font-size: 25px;
margin-top: -0.5%;
text-align: center;
}
.desc{
font-family: Noto Serif Telugu;
font-size: 20px;
margin-top: -0.5%;
text-align: center;
}
.ma{
background: #F7FFF2;
}
.ba1{
background: #B3E495;
height: 20px;
width: 100%;
}
.ba2{
border: 3px solid #444742;
margin-top: 2%;
transform: rotate(-0.2deg);
width: 100%;
}
.fo{
color: #000000;
font-family: Noto Serif Telugu;
font-size: 23px;
margin-bottom: -0.5%;
margin-top: -0.5%;
}
a{
color: #000000;
text-decoration:none
}
</style>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>PyeonReview-신상품</title>
</head>

<body>
<header>
	<!--로그인,회원가입 or 환영문구,로그아웃-->
	<p class="si">
    <?php
        if(!$userid) {
      ?>
      <a href="login.php" id="login">로그인</a>&nbsp/
      <a href="signUp.php" id="signup">회원가입</a>
    <?php
      }else {$logged=$userid;
     ?>
     환영합니다 <?php echo $_SESSION['userid'];?> 님 &nbsp/
     <a href="logOut.php" id="logout">로그아웃</a>
     <?php
      } ?>
	</p>
  	<nav class="na">
  	<a href="home.php">편리뷰&nbsp&nbsp&nbsp</a>
  	<a href="newproduct_view.php"><u>이달의 신상</u>&nbsp&nbsp&nbsp</a>
  	<a href="review.php">솔직 리뷰&nbsp&nbsp&nbsp</a>
  	<a href="recipe_board.php">꿀조합 레시피&nbsp&nbsp&nbsp</a>
  	<a href="map.php">내 주변 편의점&nbsp&nbsp&nbsp</a>
  	<a href="mypage.php">마이페이지</a>
  	</nav>
  </header>
<p class="ba1"></p>
<p class="desc">BIG5 편의점의 이달의 신상품을 확인하세요!</p>
<main class="ma">


<form action="newproduct_view_search.php" method='post'>
  <select name="type">
    <option value="0"> 전체
    <option value="식품"> 식품
    <option value="음료"> 음료
    <option value="스낵"> 스낵
    <option value="술"> 술
    <option value="생활용품"> 생활용품
  </select>
  상품이름 <input type=text name="name">
  <input type = submit value="검색">
</form>

<?php
$connect = mysqli_connect("localhost","team10","team10","team10");
if(mysqli_connect_errno()){
      printf("Connect failed: %s\n", mysqli_connect_errno());
      exit();
}
else{

        $sql = "SELECT * FROM newproduct";
        $res=mysqli_query($connect,$sql);
        if($res){
           while ($row=mysqli_fetch_array($res)){
              $name=$row[2];
              $chain=$row[1];
              $content=$row[3];
              $price=$row[4];
              $purchase_link=$row[5];
              $review_link=$row[6];
              $date=$row[7];
              $filename=$row[8];
              $type=$row[9]; ?>



      <?php  echo "<br><img src= ".$filename." width=400p height=400p><br>";
             echo "업데이트: ".$date."<br>";
             echo "상품이름: ".$name."<br>";
             echo "품목: ".$type."<br>";
             echo "구매점: ".$chain."<br>";
             echo "설명: ".$content."<br>";
             echo "가격: ".$price."<br>";
             echo "리뷰링크  "; ?><a href="<?php echo $review_link?>"> >>바로가기</a><br>
      <?php  echo "구매처링크  "; ?><a href="<?php echo $purchase_link?>"> >>바로가기</a><br>
      <?php  echo "<br>";
          }
      }
      else{
          printf("Could not select rows: %s\n", mysqli_error($mysqli));
      }
   }
mysqli_close($connect);
?>

<footer>
	<p class="ba2"></p>
	<p class="fo">
	&copy; Team10
	</p>
<footer>
</body>
</html>
