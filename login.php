<!DOCTYPE HTML>
<?php include 'config.php';?>
<html>
<head>
<meta charset="utf-8">
<style>
.log{
font-family: Noto Serif Telugu;
font-size: 20px;
margin-top: -0.5%;
text-align: right;
}
.login-html{
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
.login-form{
margin-bottom: 0.5%;
margin-left: 9%;
margin-top: 5%;
width: 77%;
}
.login-form input[type="text"]{
background: #F7FFF2;
border: 0px;
color: #504B4B;
font-family: Noto Serif Telugu;
font-size: 23px;
margin-top: 7%;
padding: 3%;
width: 100%;
}
.login-form input[type="password"]{
background: #F7FFF2;
border: 0px;
color: #504B4B;
font-family: Noto Serif Telugu;
font-size: 23px;
margin-top: 0.5%;
padding: 3%;
width: 100%;
}
.findInfo{
color: #000000;
font-family: Noto Serif Telugu;
font-size: 20px;
margin-right: -10%;
margin-top: 1%;
}
.gotoSignup{
color: #000000;
font-family: Noto Serif Telugu;
font-size: 20px;
margin-right: -10%;
margin-top: 1%;
}
.bt{
text-align: center;
}
.bt input[type="submit"]{
background: #B3E495;
border: 0px;
border-radius: 50px;
color: #000000;
font-family: Noto Serif Telugu;
font-size: 23px;
margin-left: 7.5%;
padding: 2%;
}
.ba2{
border: 3px solid #444742;
margin-top: 2%;
transform: rotate(-0.2deg);
width: 100%;
}
a{
color: #000000;
text-decoration: none;
}
.pd{
padding: 0.6%;
}
</style>
</head>
<body>
  <div class="log">
    <?php
        if(!$userid) {
      ?>
      <a href="login.html" id="login">로그인</a>&nbsp/
      <a href="signup.php" id="signup">회원가입</a>
    <?php
      }else {$logged=$userid;
     ?>
     <a href="mypage.php" id="mypage">마이페이지</a>&nbsp/
     <a href="logout.php" id="logout">로그아웃</a>
     <?php
      } ?>
  </div><div class="pd"></div>
  <div class="login-wrap">
  <div class="login-html">
    <span id="text">로그인</span><div class="pd"></div>
    <div class="ma">
    <div class="ba1"></div>
    <div class="box">
    <div class="login-form">
      <form name="loginSubmit" id="loginSubmit" method="post" action="login_ok.php">
        <input id="id" type="text" class="input" name="id" placeholder="ID">
        <input id="pass" type="password" class="input" data-type="password" name="pass" placeholder="PASSSWORD">
        <div class="findInfo" align="right">
        <span>아이디&nbsp/&nbsp비밀번호 찾기</span>  <!--구현하지 않을 기능이므로 span 처리 하겠습니다.-->
        </div>
        <div class="gotoSignup" align="right">
        <a href="signUp.php"><u>회원가입</u></a>
	</div><div class="pd"></div><div class="pd"></div><div class="pd"></div>
        <div class="bt">
          <input type="submit" class="button" value="&nbsp&nbsp&nbsp&nbsp&nbsp로그인&nbsp&nbsp&nbsp&nbsp&nbsp">
        </div><div class="pd"></div><div class="pd"></div><div class="pd"></div>
      </form>
    </div>
    </div><div class="pd"></div>
    <div class="ba2"></div>
    </div>
  </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="/bigdb/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>