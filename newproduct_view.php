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
}
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
height: 80px;
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
<div class="tinyba"></div>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
  <select name="chain">
    <option value="0"> 전체 </option>
    <option value="CU"> CU </option>
    <option value="GS25"> GS25 </option>
    <option value="7ELEVEN"> 7ELEVEN </option>
    <option value="이마트"> 이마트 </option>
    <option value="공용"> 공용 </option>
  </select>
  <input type = submit value="검색">
</form>

<?php
$connect = mysqli_connect("127.0.0.1","team10","team10","team10");
if(mysqli_connect_errno()){
      printf("Connect failed: %s\n", mysqli_connect_errno());
      exit();
}
else{ 
       $sql = "SELECT * FROM newproduct WHERE 1";
       $chain = isset($_POST['chain']) ? $_POST['chain'] : false;
       if($chain) $sql .= " and chain = '$chain'";
       $res=mysqli_query($connect,$sql);
        if($res){
           while ($row=mysqli_fetch_array($res)){
            $chains=$row[1]; 
            $name=$row[2];   
            $content=$row[3];
            $price=$row[4];
            $purchase_link=$row[5];
            $review_link=$row[6];
            $date=$row[7];
            $filename=$row[8];
            $type=$row[9]; ?>

<table class="outnpbox" cellspacing="0" cellpadding="0">

<tr>
<td></td>
<td class="nppyeon"><?php echo "$chains" ?></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<tbody class="npbox">

<tr>
<td class="leftnp" rowspan="4"></td>
<td class="npimg" rowspan="4"><img src="<?php echo "$filename" ?>"></td>
<td class="npname" colspan="2">&nbsp&nbsp&nbsp&nbsp<?php echo "$name" ?></td>
<td class="picknp"></br><p class="heart"></p></td>
<td class="leftnp" rowspan="4"></td>
</tr>

<tr>
<td class="nppricet">&nbsp&nbsp&nbsp&nbsp가격(원)</td>
<td class="nppricep"><?php echo "$price" ?></td>
<td></td>
</tr>

<tr>
<td class="npdesct">&nbsp&nbsp&nbsp&nbsp상품설명</td>
<td class="npdescp"><?php echo "$content" ?></td>
<td></td>
</tr>

<tr>
<td></td>
<td colspan="2">
<div class="npglink1"><a href="<?php echo "$purchase_link" ?>">&nbsp상품 구매하러 가기 >&nbsp</a></div>
<div class="npglink2"><a href="<?php echo "$review_link"?>">&nbsp유투브 리뷰영상 보러가기 >&nbsp</a></div></br></br>
</td>
</tr>

</tbody>

</table>

<?php
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
