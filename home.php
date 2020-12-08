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
.ma{
background: #F7FFF2;
}
.ba1{
background: #B3E495;
height: 20px;
width: 100%;
}
.bo1{
color: #000000;
font-family: Noto Serif Telugu;
font-size: 23px;
line-height: 90%;
margin-left: 20%;
}
.bo2{
background: #E9F5D9;
border-radius: 20px;
line-height: 90%;
margin-left: 15%;
width: 67%;
}
.bo2 img{
left: 70%;
position: absolute;
width: 12%;
}
.bo3{
color: #000000;
font-family: Noto Serif Telugu;
font-size: 20px;
line-height: 90%;
}
.bo4{
color: #000000;
font-family: Noto Serif Telugu;
font-size: 23px;
line-height: 90%;
text-align: center;
}
.bo4 span{
background: linear-gradient(180deg, #F7FFF2 50%, #B3E495 50%);
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
	<title>PyeonReview</title>
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
      } ?>
	</p>

    <!--네비게이션-->
	<nav class="na">
	<a href="home.php"><u>편리뷰</u>&nbsp&nbsp&nbsp</a>
	<a href="newproduct_view.php">이달의 신상&nbsp&nbsp&nbsp</a>
	<a href="review.php">솔직 리뷰&nbsp&nbsp&nbsp</a>
	<a href="recipe_board.php">꿀조합 레시피&nbsp&nbsp&nbsp</a>
	<a href="map.php">내 주변 편의점&nbsp&nbsp&nbsp</a>
	<a href="mypage.php">마이페이지</a>
	</nav>

</header>

<div class="ma">

	<p class="ba1"></p>

    <!--checklist문구-->
	<p class="bo1">
	PyeonReview CHECKLIST!
	<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M27.4285 15.5057V30.6257H3.4286V6.62566H24.8057L28.5772 3.19714H0V34.0543H30.8571V12.3514L27.4285 15.5057Z" fill="#FE0B0B"/><path d="M33.5486 1.94568L14.9487 18.8486L9.12003 13.0371L6.85718 15.3L15.1029 23.5457L36.0001 4.34571L33.5486 1.94568Z" fill="#D30B0B"/></svg>
	</p>

    <!--체크박스틀-->
	<ul class="bo2">
	<img src="./24.jpg">
	<!--체크박스-->
	<p class="bo3"></br>
	<input type="checkbox" style='zoom: 2.0;'></input>Can't just pass in front of the convenience store</br>
	<input type="checkbox" style='zoom: 2.0;'></input>I am interested in the hottest convenience store products</br>
	<input type="checkbox" style='zoom: 2.0;'></input>Ever turned back by the creative name of the convenience store</br>
	<input type="checkbox" style='zoom: 2.0;'></input>Desire to become an early-adaptor</br>
	<input type="checkbox" style='zoom: 2.0;'></input>Ever chose a peanut butter sandwich over a new menu or everyday choice?</br></br>
	</p>
	</ul>

    <!--문구-->
	<ul class="bo4">
	<span>More than 3?</br></br>
	Try Our Service PyeonReview!</span></br></br>
	</ul>

	<p class="ba2"></p>

</div>

<!--하단배너-->
<p class="fo">
&copy; Team10
</p>

</body>
</html>
