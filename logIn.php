<!DOCTYPE html>
<?php include 'config.php';?>
<html>
<head>
  <meta charset="utf-8">
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
  .box{
  background: #E9F5D9;
  border-radius: 20px;
  margin-bottom: 2.45%;
  margin-left: 20%;
  margin-top: 4%;
  width: 60%;
  }
  .bo1{
  margin-bottom: 0.5%;
  margin-left: 9%;
  margin-top: 5%;
  width: 77%;
  }
  .bo1 input[type="text"]{
  background: #F7FFF2;
  border: 0px;
  color: #504B4B;
  font-family: Noto Serif Telugu;
  font-size: 23px;
  margin-top: 7%;
  padding: 3%;
  width: 100%;
  }
  .bo1 input[type="password"]{
  background: #F7FFF2;
  border: 0px;
  color: #504B4B;
  font-family: Noto Serif Telugu;
  font-size: 23px;
  margin-top: 0.5%;
  padding: 3%;
  width: 100%;
  }
  .bo2{
  color: #000000;
  font-family: Noto Serif Telugu;
  font-size: 20px;
  margin-left: 10%;
  width: 80%;
  }
  .bo3{
  color: #000000;
  font-family: Noto Serif Telugu;
  font-size: 20px;
  margin-right: 10%;
  text-align: right;
  }
  .bo4{
  text-align: center;
  }
  .bo4 button{
  background: #B3E495;
  border: 0px;
  border-radius: 50px;
  color: #000000;
  font-family: Noto Serif Telugu;
  font-size: 23px;
  line-height: 70%;
  }
  .ba2{
  border: 3px solid #444742;
  margin-top: 2%;
  transform: rotate(-0.2deg);
  width: 100%;
  }
  a{
  color: #000000;
  text-decoration:none
  }
  ul{
  list-style:none;
  padding-left:0px;
  }
  </style>

  </style>
</head>


<body>
<header>
	<p class="si">
    <?php
      if(!$userid) {
    ?>
    <a href="signup.php" id="signup">회원가입</a>
    <a href="login.html" id="login">로그인</a>
  <?php
    }else {$logged=$userid;
   ?>
   <a href="mypage.php" id="mypage">마이페이지</a>
   <a href="logout.php" id="logout">로그아웃</a>
   <?php
    } ?>
	</p>
	<nav class="na">
	<a href="signin.html">로그인</a>
	</nav>
</header>

<main class="ma">
	<p class="ba1"></p>
  <article>
	<ul class="box">
    <form name="loginSubmit" id="loginSubmit" method="post" action="login_ok.php">
	     <p class="bo1">
        <input id="id" type="text" class="input" name="id" placeholder="ID">
        <input id="pass" type="password" class="input" data-type="password" name="pass" placeholder="PASSSWORD">
	     </p>
    	<table class="bo2">
    	<td class="c1">로그인상태 유지하기</td>
    	<td class="c2" align="right">아이디&nbsp/&nbsp비밀번호 찾기</td>
    	</table>
    	<ul class="bo3">
    	<a href="signUp.php"><u>회원가입</u></a>
    	</ul></br></br>
    	<ul class="bo4">
    	<button type="submit">
    	</br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp로그인&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br></br>
    	</button></br></br>
    	</ul>
    </form>
	</ul>
</article>
<footer>
	<p class="ba2"></p>
<footer>
</body>

</html>
