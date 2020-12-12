<!DOCTYPE HTML>
<html lang="ko">
<?php
include 'config.php';
include 'login_check.php';
?> <!--config.php 삽입-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>PyeonReview_솔직리뷰</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

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
	<a href="review.php"><u>솔직 리뷰</u>&nbsp&nbsp&nbsp</a>
	<a href="recipe_board.php">꿀조합 레시피&nbsp&nbsp&nbsp</a>
	<a href="map.php">내 주변 편의점&nbsp&nbsp&nbsp</a>
	<a href="mypage.php">마이페이지</a>
	</nav>
</header>
<p class="ba1"></p>
<p class="desc">솔직한 여러분의 리뷰를 남겨주세요!</p>
<main class="ma">
  <div class= "container">
    <div class="board_wirte" id="board_write">
      <form action="review_write_ok.php" method="post" enctype="multipart/form-data">
        <table class="table table-striped" style="text-algin: center; border: 1px solid #ddddda">
          <thead>
            <tr>
              <th colspan="2" style="background-color: #eeeeee; text-align:center;"><h3>솔직 리뷰 쓰기</h3></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><span class="pull-left">&nbsp;&nbsp;&nbsp;작성자 : <b><?=$userid?></b></span></td>
            </tr>
            <tr>
              <td><select class="se" name="cvs" id="cvs">
                <option value="">편의점</option>
                <option value="GS25">GS25</option>
                <option value="CU">CU</option>
                <option value="세븐일레븐">세븐일레븐</option>
                <option value="이마트">이마트</option>
                <option value="미니스톱">미니스톱</option>
              </select>

              <select class="se" name="item" id="item">
                <option value="">품목</option>
                <option value="식품">식품</option>
                <option value="음료">음료</option>
                <option value="스낵">스낵</option>
                <option value="술">술</option>
                <option value="생활용품">생활용품</option>
              </select>

              <select class="se" name="cost" id="cost">
                <option value="">가격대</option>
                <option value="5천원대 이하">5천원대 이하</option>
                <option value="1만원대 이하">1만원대 이하</option>
                <option value="2만원대 이하">2만원대 이하</option>
              </select>

             <select class="se" name="star" id="star">
              <option value=""> 별점을 남겨주세요</option>
              <option value=1>1점</option>
              <option value=2>2점</option>
              <option value=3>3점</option>
              <option value=4>4점</option>
              <option value=5>5점</option>
            </select>
           </td>
            </tr>
            <tr>
              <td><input type="text" class="form-control" placeholder="글 제목" name="title" id="title" required></td>
            </tr>
            <tr>
              <td><textarea class="form-control" placeholder="글 내용" name="content" id="content" style="height:350px" required></textarea></td>
            </tr>
            <tr>
              <td>이미지 업로드 하기 : <input type="file" name="img" id="imageFileOpenInput" accept="image/*"></td>
            </tr>
          </tbody>
        </table>
        <button type="submit" class="btn btn-primary">저장</button>
      </form>
    </div>
  </div>
<footer>
<p class="ba2"></p>
<p class="fo">
&copy; Team10
</p>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
