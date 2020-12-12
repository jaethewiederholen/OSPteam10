<!DOCTYPE html>
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
.signup-html{
font-family: Noto Serif Telugu;
font-size: 25px;
margin-top: -0.5%;
text-align: center;
}
.ma{
background: #F7FFF2;
text-align: left;
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
width: 60%;
}
.inform{
color: #000000;
font-family: Noto Serif Telugu;
font-size: 20px;
text-align: center;
}
.signup-form{
font-family: Noto Serif Telugu;
font-size: 18px;
line-height: 130%;
margin-left: 7.25%;
}
.signup-form input[type="text"]{
background: #F7FFF2;
border: 0px;
color: #504B4B;
font-family: Noto Serif Telugu;
font-size: 17px;
padding: 1%;
width: 90%;
}
.signup-form input[type="password"]{
background: #F7FFF2;
border: 0px;
color: #504B4B;
font-family: Noto Serif Telugu;
font-size: 20px;
padding: 1%;
width: 90%;
}
.signup-form input[type="number"]{
background: #F7FFF2;
border: 0px;
color: #504B4B;
font-family: Noto Serif Telugu;
font-size: 20px;
padding: 1%;
width: 90%;
}
.bt{
text-align: center;
margin-left: -7.5%;
}
.bt input[type="submit"]{
background: #B3E495;
border: 0px;
border-radius: 50px;
color: #000000;
font-family: Noto Serif Telugu;
font-size: 23px;
padding: 1.4%;
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
.pd2{
padding: 1.95%;
}
</style>
</head>

<body>
  <div class="topnav">
    <div class = "log">
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
    </div><div class="pd"></div>
  </div>

  <div class="signup-wrap">
    <div class="signup-html">
      회원가입<div class="pd"></div>

    <div class="ma">

    <div class="ba1"></div>
    <div class="inform"><div class="pd"></div>회원정보</div>
    <div class="pd"></div>
    
    <div class="box">
      <form name="join" method="post" action="signup_ok.php">
      
      <div class="signup-form"></br>
        <label for="user" class="label">아이디</label></br>
        <input id="user" type="text" class="input " name="userid"></br>

        <label for="pass" class="label">비밀번호</label></br>
        <input id="pass" type="password" class="input" data-type="password" name="userpw"></br>

        <label for="age" class="label">나이</label></br>
        <input id="age" type="number" class="input" name="age"><br>

        <label for="radios" class="label">성별</label></br>    
        <div id=radios class="form-check">
        <input class="form-check-input" type="radio" id="male" name="sex" value="male">
        <label class="form-check-label" for="male">남성</label>
        <input class="form-check-input" type="radio" id="female" name="sex" value="female">
        <label class="form-check-label" for="female">여성</label>
        <input class="form-check-input" type="radio" id="other" name="sex" value="other">
        <label class="form-check-label" for="other">기타</label>
        </div>
        
        <div class="bt">
          <input type="submit" class="button" value="&nbsp&nbsp&nbsp&nbsp&nbsp가입하기&nbsp&nbsp&nbsp&nbsp&nbsp">
        </div><div class="pd2"></div>

      </div>

      </form>
    </div>

    <div class="ba2"></div>

    </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="/bigdb/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
