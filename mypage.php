<!DOCTYPE HTML>
<html lang="ko">
<?php include 'config2.php'?> <!--config.php 삽입-->

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

.clearfix::after{
display:block;
content:'';
clear:both
}
.tab_wrap{
border-top: 1px solid;
width:100%;
margin:20px auto
}
.tablinks {
float: left;
width: 33.333%;
height: 100%;
border: none;
outline: none;
font-size: 16px;
font-weight: bold;
color: #000;
background-color: #fff;
}
.tablinks.active {
color: #000;
background-color: #F7FFF2;
}
.info{
width: 90%;
height: 100px;
display: flex;
margin: 20px auto;
}
.userimage{
flex: 1;
margin: 0px 5%;
}
.userinfo{
flex: 3;
margin: 0px 5%;
}
.InfoBtn{
    height:20px;
    width:70px;
}
</style>


<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>PyeonReview_마이페이지</title>
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
	<a href="recipe_board.php">꿀조합 레시피&nbsp&nbsp&nbsp</a>
	<a href="map.php">내 주변 편의점&nbsp&nbsp&nbsp</a>
	<a href="mypage.php"><u>마이페이지</u></a>
	</nav>
</header>
<p class="ba1"></p>
<p class="desc">마이페이지에서 내 정보를 확인하세요!</p>

<main class="ma">
  <div class="tab_wrap tab_area">

    <div class="btn_area clearfix">
      <button class="tablinks active" onclick="openTab(event, 'tab1')">내 정보</button>
      <button class="tablinks" onclick="openTab(event, 'tab2')">내 리뷰</button>
      <button class="tablinks" onclick="openTab(event, 'tab3')">내 찜목록</button>
    </div>

    <div id="tab1" class="tabcontent" style="display: block;">
      <div class="info">
        <div class="userimage">
         <img src="user.png" width=120 height=120>
        </div>
        <div class="userinfo">
        <!--아이디-->
          아이디: <?=$userid?><br>
        <!--리뷰수/레시피수 -->
        <?php
        $connect = mysqli_connect("localhost","team10","team10","team10") or die ("connect fail");
        $query ="SELECT * from recipe WHERE id = '$userid'";
        $result = mysqli_query($connect, $query);
        $total_recipe = mysqli_num_rows($result);

        echo"내 리뷰 수: <br>";
        echo"내 레피시 수: $total_recipe 개<br>";
        ?>

        내 레벨: &nbsp&nbsp&nbsp&nbsp<button type="button" class="InfoBtn" onclick="window.open('./levelinfo.php', 'levelinfo', 'width=300, height=250')"> 등업기준 </button>
        <?php
        /*레벨
        $level_gage = $total_recipe + $total_review;
        if(level_gage<2) $level = 1;
        else if(2<=level_gage && level_gage<5) $level = 2;
        else if(5<=level_gage && level_gage<10) $level = 3;
        else if(10<=level_gage) $level = 4;
        echo"레벨: $level <br>";  */
        ?>

        <!--비번변경 -->
        <form method="post" action="password_update.php">
        비밀번호 변경 : <input type="password" size="10" name="newpw" placeholder="변경 비밀번호">
        <input type="submit" value="변경하기" />
        </form>
        <br>
        </div>
      </div>

      <div class="graph">
      <br><br><br><br><br>나의 편의점 이용률<br><br><br><br><br><br><br>

      </div>
    </div>

    <div id="tab2" class="tabcontent" style="display: none;">
    마이 레시피 LIST<br>
    <?php
        $connect = mysqli_connect("127.0.0.1","team10","team10","team10") or die ("connect fail");
        $query ="SELECT * from recipe WHERE id = '$userid'";
        $result = mysqli_query($connect, $query);
        $total = mysqli_num_rows($result);
        while($rows = mysqli_fetch_assoc($result)){
          ?>
          &nbsp<i><?php echo $rows['date']?></i>
          <a href = "recipe_view_privacy.php?number=<?php echo $rows['number']?>"><?php echo $rows['title']?><br>
          <?php
          $total--;
        }
    ?>
    <br><br>마이 리뷰 LIST<br>
    </div>

    <div id="tab3" class="tabcontent" style="display: none;">

    </div>

  </div>

<!-- opentab 함수 -->
<script>
  function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
  }
</script>

<footer>
	<p class="ba2"></p>
	<p class="fo">
	&copy; Team10
	</p>
<footer>
</body>
</html>
