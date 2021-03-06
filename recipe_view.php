<!DOCTYPE HTML>
<html lang="ko">
<?php
include 'config.php';
include 'login_check.php';
include 'db_con.php';?> <!--config.php 삽입-->
<style>
.bttn{
padding: 1.5em;
margin-left: 39%;
}
.btn-brackets {
	display: block;
	position: relative;
	width: 120px;
	padding: 0.6em;
font-family: Noto Serif Telugu;
font-size: 20px;
font-weight: bold;
	text-align: center;
	text-decoration: none;
	color: #B3E495;
	background: #fff;
	border:4px solid #B3E495;
}
.btn-brackets:hover {
	 background: #B3E495;
         color: #fff;
	 cursor: pointer;
	 text-decoration: none;
}
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

.view_table {
border: 1px solid #444444;
margin-top: 30px;
}
.view_title {
height: 30px;
text-align: center;
background-color: #cccccc;
color: white;
width: 1000px;
}
.view_id {
text-align: center;
background-color: #EEEEEE;
width: 30px;
}
.view_id2 {
background-color: white;
width: 60px;
}
.view_hit {
background-color: #EEEEEE;
width: 30px;
text-align: center;
}
.view_hit2 {
background-color: white;
width: 60px;
}
.view_ingredient {
background-color: #EEEEEE;
width: 30px;
text-align: center;
}
.view_ingredient2 {
background-color: white;
width: 60px;
}
.view_content {
padding-top: 20px;
border-top: 1px solid #444444;
height: 500px;
}
.view_btn {
width: 700px;
height: 200px;
text-align: center;
margin: auto;
margin-top: 50px;
}
.view_btn1 {
height: 50px;
width: 100px;
font-size: 20px;
text-align: center;
background-color: white;
border: 2px solid black;
border-radius: 10px;
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

<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>PyeonReview_꿀조합레시피</title>
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
	<a href="recipe_board.php"><u>꿀조합 레시피</u>&nbsp&nbsp&nbsp</a>
	<a href="map.php">내 주변 편의점&nbsp&nbsp&nbsp</a>
	<a href="mypage.php">마이페이지</a>
	</nav>
</header>
<p class="ba1"></p>
<p class="desc">편의점 음식으로 만드는 꿀조합 레시피를 확인하세요!</p>
<main class="ma">

<?php
$bno = $_GET['number'];
$sql = mq("select * from recipe where number='".$bno."'
");
$board=$sql->fetch_array();

?>

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
              <td style="width:10%">작성자</td><td colspan="3" style="width:20%"><?=$board['id']?></td>
              <td style="width:10%">조회수</td> <td colspan="3" style="width:20%"><?=$board['hit']?></td>
            </tr>
            <tr>
              <td style="width:10%">재료</td> <td colspan="7" style="width:20%"><?=$board['ingredient']?></td>
            </tr>
            <tr>
            <td colspan="12" style="height:300px; text-align:left; vertical-align:top;"><?=$board['content']?></td>
            </tr>
            <tr>
            <td colspan="12" style="height:300px; text-align:left; vertical-align:top;">
             <img src="<?=$board['file']?>"></td>
            </tr>
          </tbody>
        </table>
        <!-- 목록으로 -->
        <div class="bttn">
                <button class="btn-brackets" onclick="location.href='./recipe_board.php'">목록으로</button>
        </div>
</body>
</html>
