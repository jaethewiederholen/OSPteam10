<!DOCTYPE html>
<?php include 'config.php';?>
<html>
<head>
  <meta charset="utf-8">
  <style>
  .topnav {
    overflow : hidden;
  }
  .topnav a {
    float: right;
    display: block;
    color: black;
    text-align: center;
    padding : 14px 16px;
    font-size:14px;
    text-decoration:none;
    margin-bottom : 10px;
  }
  .log a:hover {
    color: red;
  }
  </style>
</head>

<body>
  <div class="topnav">
    <div class = "log">
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
    </div>
  </div>
  <div class="login-wrap">
    <div class="login-html">
      <span id="text" style="font-size : 20px">로그인</span>
      <div class="login-form">
      <form name="loginSubmit" id="loginSubmit" method="post" action="login_ok.php">
        <div class="group">
          <input id="id" type="text" class="input" name="id" placeholder="ID">
        </div>
        <div class="group">
          <input id="pass" type="password" class="input" data-type="password" name="pass" placeholder="PASSSWORD">
        </div>
        <div class="gotoSignup">
          <a href="signUp.php">회원가입</a>
        </div>
        <div class="findInfo">
          <span>아이디/비빌번호 찾기</span>  <!--구현하지 않을 기능이므로 span 처리 하겠습니다.-->
        </div>
        <div class="bt">
          <input type="submit" class="button" value="로그인">
        </div>
      </form>
      </div>
  </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="/bigdb/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
