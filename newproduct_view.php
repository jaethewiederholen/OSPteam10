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
.tinyba{
border: 1px solid #000000;
margin-bottom: 1.5%;
margin-top: -0.5%;
width: 100%;
}/**********추가부분***********/
/*----수정이후(시작)----*/
.outnpbox{
width: 100%;
margin-top: 3%;
}
.nppyeon{
padding-bottom: 3px;
padding-left: 3px;
font-family: Noto Serif Telugu;
font-weight: bold;
font-size: 25px;
color: #000000;
}
.npbox{
background: rgba(234,175,175,0.25);
}
.leftnp{
width: 15%;
}
.npimg{
width: 15%;
text-align: center;
}
.npimg img{
position: absoulte;
width: 170px;
height: 170px;
table-layout: fixed;
}
.npname{
font-family: Noto Serif Telugu;
font-weight: bold;
font-size: 20px;
color: #000000;
}
.picknp{
width: 5%;
}
.heart{
width: 20px;
height: 20px;
background: #ea2027;
position: relative;
transform: rotate(45deg);
}
.heart::before,
.heart::after {
content: "";
width: 20px;
height: 20px;
position: absolute;
border-radius: 50%;
background: #ea2027;
}
.heart::before {
left: -50%;
}
.heart::after {
top: -50%;
}
.rightnp{
width: 15%;
}
.nppricet{
font-family: Noto Serif Telugu;
font-size: 18px;
color: #000000;
width: 10%;
}
.nppricep{
font-family: Noto Serif Telugu;
font-size: 18px;
color: #000000;
with: 50%;
}
.npdesct{
font-family: Noto Serif Telugu;
font-size: 18px;
color: #000000;
}
.npdescp{
overflow: hidden;
text-overflow: ellipsis;
white-space: wrap;
height: 70px;
padding-top: 15px;
padding-bottom: 3px;
display: block;
}
.npglink1{
margin-left: 20%;
padding: 1%;
float: left;
background: rgba(234,175,175,0.75);
border-radius: 50px;
}
.npglink2{
margin-right: 5%;
padding: 1%;
float: right;
background: rgba(234,175,175,0.75);
border-radius: 50px;
}
.npbox2{
background: rgba(255,254,163,0.25);
}
.npg2link1{
margin-left: 20%;
padding: 1%;
float: left;
background: rgba(255,254,163,0.75);
border-radius: 50px;
}
.npg2link2{
margin-right: 5%;
padding: 1%;
float: right;
background: rgba(255,254,163,0.75);
border-radius: 50px;
}
.npbox3{
background: rgba(175,234,223,0.25);
}
.npg3link1{
margin-left: 20%;
padding: 1%;
float: left;
background: rgba(175,234,223,0.75);
border-radius: 50px;
}
.npg3link2{
margin-right: 5%;
padding: 1%;
float: right;
background: rgba(175,234,223,0.75);
border-radius: 50px;
}
.npbox4{
background: rgba(179,181,232,0.25);
}
.npg4link1{
margin-left: 20%;
padding: 1%;
float: left;
background: rgba(179,181,232,0.75);
border-radius: 50px;
}
.npg4link2{
margin-right: 5%;
padding: 1%;
float: right;
background: rgba(179,181,232,0.75);
border-radius: 50px;
}
.npbox5{
background: rgba(215,163,206,0.25);
}
.npg5link1{
margin-left: 20%;
padding: 1%;
float: left;
background: rgba(215,163,206,0.75);
border-radius: 50px;
}
.npg5link2{
margin-right: 5%;
padding: 1%;
float: right;
background: rgba(215,163,206,0.75);
border-radius: 50px;
}
/*----수정이후(끝)----*/
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
<div class="tinyba"></div><!---------추가부분---------->
<!----수정이전(시작)
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
             echo "리뷰링크  "; ?>
<a href="<?php echo $review_link?>"> >>바로가기</a>
<br>
      <?php  echo "구매처링크  "; ?>
<a href="<?php echo $purchase_link?>"> >>바로가기</a>
<br>
      <?php  echo "<br>";
          }
      }
      else{
          printf("Could not select rows: %s\n", mysqli_error($mysqli));
      }
   }
mysqli_close($connect);
?>
수정이전(끝)----->
<!----수정이후(시작)----->
<!-CU->
<table class="outnpbox" cellspacing="0" cellpadding="0">
<tr>
<td></td>
<td class="nppyeon">CU</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tbody class="npbox">
<tr>
<td class="leftnp" rowspan="4" style="text-align:center"><img src="./lview.png" height="50px"></td>
<td class="npimg" rowspan="4"><img src="http://img.danawa.com/prod_img/500000/246/939/img/8939246_1.jpg"></td>
<td class="npname" colspan="2">&nbsp&nbsp&nbsp&nbsp상품이름</td>
<td class="picknp"></br><p class="heart"></p></td>
<td class="leftnp" rowspan="4" style="text-align:center"><img src="./rview.png" height="50px"></td>
</tr>
<tr>
<td class="nppricet">&nbsp&nbsp&nbsp&nbsp가격(원)</td>
<td class="nppricep">100000</td>
<td></td>
</tr>
<tr>
<td class="npdesct">&nbsp&nbsp&nbsp&nbsp상품설명</td>
<td class="npdescp">상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명(최대90자)</td>
<td></td>
</tr>
<tr>
<td></td>
<td colspan="2">
<div class="npglink1">&nbsp상품 구매하러 가기 >&nbsp</div>
<div class="npglink2">&nbsp유투브 리뷰영상 보러가기 >&nbsp</div></br></br>
</td>
</tr>
</tbody>
</table>
<!-GS25->
<table class="outnpbox" cellspacing="0" cellpadding="0">
<tr>
<td></td>
<td class="nppyeon">GS25</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tbody class="npbox2">
<tr>
<td class="leftnp" rowspan="4" style="text-align:center"><img src="./lview.png" height="50px"></td>
<td class="npimg" rowspan="4"><img src="http://img.danawa.com/prod_img/500000/246/939/img/8939246_1.jpg"></td>
<td class="npname" colspan="2">&nbsp&nbsp&nbsp&nbsp상품이름</td>
<td class="picknp"></br><p class="heart"></p></td>
<td class="leftnp" rowspan="4" style="text-align:center"><img src="./rview.png" height="50px"></td>
</tr>
<tr>
<td class="nppricet">&nbsp&nbsp&nbsp&nbsp가격(원)</td>
<td class="nppricep">100000</td>
<td></td>
</tr>
<tr>
<td class="npdesct">&nbsp&nbsp&nbsp&nbsp상품설명</td>
<td class="npdescp">상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명(최대90자)</td>
<td></td>
</tr>
<tr>
<td></td>
<td colspan="2">
<div class="npg2link1">&nbsp상품 구매하러 가기 >&nbsp</div>
<div class="npg2link2">&nbsp유투브 리뷰영상 보러가기 >&nbsp</div></br></br>
</td>
</tr>
</tbody>
</table>
<!-7ELEVEN->
<table class="outnpbox" cellspacing="0" cellpadding="0">
<tr>
<td></td>
<td class="nppyeon">7ELEVEN</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tbody class="npbox3">
<tr>
<td class="leftnp" rowspan="4" style="text-align:center"><img src="./lview.png" height="50px"></td>
<td class="npimg" rowspan="4"><img src="http://img.danawa.com/prod_img/500000/246/939/img/8939246_1.jpg"></td>
<td class="npname" colspan="2">&nbsp&nbsp&nbsp&nbsp상품이름</td>
<td class="picknp"></br><p class="heart"></p></td>
<td class="leftnp" rowspan="4" style="text-align:center"><img src="./rview.png" height="50px"></td>
</tr>
<tr>
<td class="nppricet">&nbsp&nbsp&nbsp&nbsp가격(원)</td>
<td class="nppricep">100000</td>
<td></td>
</tr>
<tr>
<td class="npdesct">&nbsp&nbsp&nbsp&nbsp상품설명</td>
<td class="npdescp">상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명(최대90자)</td>
<td></td>
</tr>
<tr>
<td></td>
<td colspan="2">
<div class="npg3link1">&nbsp상품 구매하러 가기 >&nbsp</div>
<div class="npg3link2">&nbsp유투브 리뷰영상 보러가기 >&nbsp</div></br></br>
</td>
</tr>
</tbody>
</table>
<!-이마트->
<table class="outnpbox" cellspacing="0" cellpadding="0">
<tr>
<td></td>
<td class="nppyeon">이마트</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tbody class="npbox4">
<tr>
<td class="leftnp" rowspan="4" style="text-align:center"><img src="./lview.png" height="50px"></td>
<td class="npimg" rowspan="4"><img src="http://img.danawa.com/prod_img/500000/246/939/img/8939246_1.jpg"></td>
<td class="npname" colspan="2">&nbsp&nbsp&nbsp&nbsp상품이름</td>
<td class="picknp"></br><p class="heart"></p></td>
<td class="leftnp" rowspan="4" style="text-align:center"><img src="./rview.png" height="50px"></td>
</tr>
<tr>
<td class="nppricet">&nbsp&nbsp&nbsp&nbsp가격(원)</td>
<td class="nppricep">100000</td>
<td></td>
</tr>
<tr>
<td class="npdesct">&nbsp&nbsp&nbsp&nbsp상품설명</td>
<td class="npdescp">상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명(최대90자)</td>
<td></td>
</tr>
<tr>
<td></td>
<td colspan="2">
<div class="npg4link1">&nbsp상품 구매하러 가기 >&nbsp</div>
<div class="npg4link2">&nbsp유투브 리뷰영상 보러가기 >&nbsp</div></br></br>
</td>
</tr>
</tbody>
</table>
<!-공용->
<table class="outnpbox" cellspacing="0" cellpadding="0">
<tr>
<td></td>
<td class="nppyeon">공용</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tbody class="npbox5">
<tr>
<td class="leftnp" rowspan="4" style="text-align:center"><img src="./lview.png" height="50px"></td>
<td class="npimg" rowspan="4"><img src="http://img.danawa.com/prod_img/500000/246/939/img/8939246_1.jpg"></td>
<td class="npname" colspan="2">&nbsp&nbsp&nbsp&nbsp상품이름</td>
<td class="picknp"></br><p class="heart"></p></td>
<td class="leftnp" rowspan="4" style="text-align:center"><img src="./rview.png" height="50px"></td>
</tr>
<tr>
<td class="nppricet">&nbsp&nbsp&nbsp&nbsp가격(원)</td>
<td class="nppricep">100000</td>
<td></td>
</tr>
<tr>
<td class="npdesct">&nbsp&nbsp&nbsp&nbsp상품설명</td>
<td class="npdescp">상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명상품설명(최대90자)</td>
<td></td>
</tr>
<tr>
<td></td>
<td colspan="2">
<div class="npg5link1">&nbsp상품 구매하러 가기 >&nbsp</div>
<div class="npg5link2">&nbsp유투브 리뷰영상 보러가기 >&nbsp</div></br></br>
</td>
</tr>
</tbody>
</table>

</br></br>
<!----수정이후(끝)----->
<!----재수정작성중(시작)----->
<?php
$type=$_POST['type'];
$name=$_POST['name'];
$connect = mysqli_connect("127.0.0.1","team10","team10","team10");
if(mysqli_connect_errno()){
      printf("Connect failed: %s\n", mysqli_connect_errno());
      exit();
}
else{ 

        $sql = "SELECT * FROM newproduct WHERE 1";
        if($name) $sql .= " and name like '%$name%'";
        if($type!="0") $sql .= " and type = '$type'";
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

            <form method="post" action="like_action.php">
            <input type="checkbox" style='zoom: 2.0;'>
            <input type="submit" value="찜하기">
            </form>
       <?php echo "<br><img src= ".$filename." width=400p height=400p><br>";
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
<!----재수정작성중(끝)----->
<!----덮어쓰기(시작)----->
<footer>
	<p class="ba2"></p>
</main>
	<p class="fo">
	&copy; Team10
	</p>
</footer>
</body>
</html>
<!----덮어쓰기(끝)----->