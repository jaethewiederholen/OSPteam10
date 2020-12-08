<!DOCTYPE HTML>
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
	<title>PyeonReview_꿀조합레시피</title>
</head>


<body>
<!--헤더-->
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
      }
    ?>
    </p>
    <!--네비게이션-->
	<nav class="na">
	<a href="home.php">편리뷰&nbsp&nbsp&nbsp</a>
	<a href="newproduct_view.php">이달의 신상&nbsp&nbsp&nbsp</a>
	<a href="review.php">솔직 리뷰&nbsp&nbsp&nbsp</a>
	<a href="recipe_board.php"><u>꿀조합 레시피</u>&nbsp&nbsp&nbsp</a>
	<a href="map.php">내 주변 편의점&nbsp&nbsp&nbsp</a>
	<a href="mypage.php">마이페이지</a>
	</nav>
</header>
<p class="ba1"></p>
<p class="desc">편의점 음식으로 만드는 꿀조합 레시피를 확인하세요!</p>
<main class="ma">

<?php
$connect = mysqli_connect("localhost","team10","team10","team10") or die ("connect fail");
$query ="SELECT * from recipe order by number desc";
$result = mysqli_query($connect, $query);
$total = mysqli_num_rows($result);
?>

<table align = center>

<thead align = "center">
<tr>
<td width = "50" align="center">번호</td>
<td width = "200" align = "center">제목</td>
<td width = "300" align = "center">재료</td>
<td width = "100" align = "center">작성자</td>
<td width = "200" align = "center">날짜</td>
<td width = "50" align = "center">조회수</td>
</tr>
</thead>

<tbody>
<?php
while($rows = mysqli_fetch_assoc($result)){
?>
<td width = "50" align = "center"><?php echo $total?></td>
<td width = "200" align = "center"><a href = "recipe_view.php?number=<?php echo $rows['number']?>"><?php echo $rows['title']?></td>
<td width = "300" align = "center"><?php echo $rows['ingredient']?></td>
<td width = "100" align = "center"><?php echo $rows['id']?></td>
<td width = "200" align = "center"><?php echo $rows['date']?></td>
<td width = "50" align = "center"><?php echo $rows['hit']?></td>
</tr>
<?php
$total--;
}
?>
</tbody>
</table>

<div class = text align="center">
<br><br><button type="button" class="recipe_Btn" onClick="location.href='./recipe_register.php'">글쓰기</button>
</div>

<footer>
	<p class="ba2"></p>
	<p class="fo">
	&copy; Team10
	</p>
<footer>
</body>
</html>
