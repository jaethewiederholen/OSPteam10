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
  <div class="signup-wrap">
    <div class="signup-html">
      <span id="text" style="font-size : 20px">회원가입</span>
      <form name="join" method="post" action="signup_ok.php">
      <div class="signup-form">
        <div class="sign-up-htm">
          <div class="group">
            <label for="user" class="label">아이디</label>
            <input id="user" type="text" class="input " name="userid">
          </div>
          <div class="group">
            <label for="pass" class="label">비밀번호</label>
            <input id="pass" type="password" class="input" data-type="password" name="userpw">
          </div>
          <div class="group">
            <label for="name" class="label">이름</label>
            <input id="name" type="text" class="input" name="username">
          </div>
          <div class="group">
            <label for="email" class="label">이메일</label>
            <input id="email" type="text" class="input" name="useremail">
          </div>
          <div class="bt">
            <input type="submit" class="button" value="가입하기">
          </div>
        </div>
      </div>
      </form>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="/bigdb/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>