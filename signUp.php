<!DOCTYPE html>
<?php include 'config.php'?> <!--config.php 삽입-->
<html lang="ko">
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
a{
color: #000000;
text-decoration: none;
}
.ma{
background: #F7FFF2;
}
.ba1{
background: #B3E495;
height: 20px;
width: 100%;
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
  </div>

  <div class="pd"></div>

  <div class="signup-wrap">
    <div class="signup-html">

      <span id="text">회원가입</span>
      <div class="pd"></div>
      <div class="ma"></div>
      <div class="ba1"></div></br></br>

      <div class="box">
      <div class="signup-form">

      <form name="join" method="post" action="signup_ok.php">

          <div class="group">
            <label for="user" class="label">아이디</label>
            <input id="user" type="text" class="input " name="userid">
          </div>

          <div class="group">
            <label for="pass" class="label">비밀번호</label>
            <input id="pass" type="password" class="input" data-type="password" name="userpw">
          </div>

          <div class="bt">
            <input type="submit" class="button" value="&nbsp&nbsp&nbsp가입하기&nbsp&nbsp&nbsp">
          </div> <div class="pd"></div><div class="pd"></div><div class="pd"></div>

      </form>
      
      </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="/bigdb/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
