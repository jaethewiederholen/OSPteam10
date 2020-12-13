<!DOCTYPE HTML>
<html lang="ko">
<?php
include 'config.php';
include 'login_check.php';
include 'db_con.php';

$bno = $_GET['num'];
$sql = mq("select * from review where number='".$bno."'
");
$board=$sql->fetch_array();
?> <!--config.php 삽입-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>PyeonReview_솔직리뷰</title>
  <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>
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
table{
  width:90%;
  table-layout: fixed;
	background-color: #ecbbb4;
	border-radius:10px;
	padding:5px;
	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}

th{
  padding: 20px 15px;
	text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
	text-align:center;
  font-weight: center;
  font-size: 12px;
  color:#4E5066;
  text-transform: uppercase;
}
tr {
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);

}
.tbl-content{
  background-color: rgba(255,255,255,0.1);
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
tr td:nth-child(odd){
	color:#666B85;
	border-radius:10px;
	background-color: rgba(255,255,255,0.9);
}
tr td:nth-child(even){
	color:#ffffff;
	font-weight: bold;
	font-size:18px;
	border-radius:10px;
	background-color: rgba(255,255,255,0.1);
}
td{
	padding:20px;
  text-align: center;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
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
    <div class="board_read" id="board_read">
        <br><table>
          <thead>
            <tr>
              <th colspan="12" style="text-align:center;"><h3><?=$board['title']?></h3></th>
            </tr>
          </thead>
          <tbody class="tbl-content">
            <tr>
              <td style="width:8%">편의점</td> <td style="width:16%" colspan="2"><?=$board['cvs']?></td>
              <td style="width:8%; margin-left:5%">품목</td> <td style="width:15%" colspan="2"><?=$board['item']?></td>
              <td style="width:8%; margin-left:5%">가격대</td> <td colspan="2" style="width:15%"><?=$board['cost']?></td>
              <td style="width:8%; margin-left:5%">별점</td> <td colspan="2" style="width:15%"><?=$board['star']?></td>
            </tr>
            <tr>
              <td style="width:10%">작성자</td><td colspan="3" style="width:20%"><?=$board['id']?></td>
            </tr>
            <tr>
              <td style="width:10%">작성일</td> <td colspan="3" style="width:20%"><?=$board['date']?></td>
            </tr>
            <tr>
            <td colspan="12" style="height : 300px; text-align:left; vertical-align: top;"><?=$board['content']?></td>
            </tr>
          </tbody>
        </table>
        <br><button class="view_btn1" onclick="location.href='./review.php'">목록</button>
        <?php
        if ($userid==$board['id']) {
         ?>
         <div class="view_btn">
                 <button class="view_btn1" onclick="location.href='./review_update.php?num=<?=$board['number']?>'">수정</button>
                 <button class="view_btn1" onclick="location.href='./review_delete.php?num=<?=$board['number']?>'">삭제</button>
         </div>
         <br><br><br>
       <?php } ?>
    </div>
  </div>
<footer>
<p class="ba2"></p>
<p class="fo">
&copy; Team10
</p>
</footer>

</body>
</html>
