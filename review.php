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
.select{
width: 90%;
margin: 10px auto;
display: flex;
}
.se{
flex:1;
margin: 0px 5%;
width: 30%;
}
.searchform{
margin: 10px auto;
display: flex;
width: 30%;
}
a{
color: #000000;
text-decoration:none
}
</style>


<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>PyeonReview-리뷰</title>
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
  	<a href="newproduct_view.php">이달의 신상&nbsp&nbsp&nbsp</a>
  	<a href="review.php"><u>솔직 리뷰</u>&nbsp&nbsp&nbsp</a>
  	<a href="recipe_board.php">꿀조합 레시피&nbsp&nbsp&nbsp</a>
  	<a href="map.php">내 주변 편의점&nbsp&nbsp&nbsp</a>
  	<a href="mypage.php">마이페이지</a>
  	</nav>
  </header>
  <p class="ba1"></p>
  <p class="desc">다양한 편의점 상품의 리뷰를 확인하세요!</p>
  <main class="ma">

  <div class="search">
    <div class="select">

    <select class="se">
      <option selected="">편의점</option>
      <option value="1">GS25</option>
      <option value="2">CU</option>
      <option value="3">세븐일레븐</option>
      <option value="4">이마트</option>
      <option value="5">미니스톱</option>
    </select>

    <select class="se">
      <option selected="">품목</option>
      <option value="1">식품</option>
      <option value="2">음료</option>
      <option value="3">스낵</option>
      <option value="4">술</option>
      <option value="5">생활용품</option>
    </select>

    <select class="se">
      <option selected="">가격대</option>
      <option value="1">5천원대 이하</option>
      <option value="2">1만원대 이하</option>
      <option value="3">2만원대 이하</option>
    </select>

    </div>
    <input type="text" class="searchform" placeholder="제목 또는 상품평 검색하기" id="inputDefault">
  </div>


  <div align="right">
   <button type="submit" id="write" class="btn btn-warning">글 작성</button>
  </div>

  <div id="board" class="content" style="display: none;">
    <button>저장하기</button>
    <div class="select"></div>
  </div>

<script>
</script>

  <footer>
	<p class="ba2"></p>
	<p class="fo">
	&copy; Team10
	</p>
<footer>
</body>
</html>
