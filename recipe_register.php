
<!DOCTYPE HTML>
<html lang="ko">
<?php include 'config.php'?> <!--config.php 삽입-->
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
.select-group{
  width: 90%;
  margin: 10px auto;
  display: flex;
  align-items: center;
  justify-content: center;
}
/* Reset Select */
.form-control {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  box-shadow: none;
  border: 0 !important;
  background: #ffffff;
  background-image: none;
}
/* Remove IE arrow */
.form-control::-ms-expand {
  display: none;
}
/* Custom Select */
.select {
	border: 1px solid #ecbbb4;
  position: relative;
  display: flex;
  width: 12em;
  height: 40px;
  line-height: 3;
  background: #ffffff;
  overflow: hidden;
  border-radius: .25em;
}
.form-control {
  flex: 1;
	height: 3em;
  padding: 0 1em;
  color: #000000;
	font-size : 15px;
  cursor: pointer;
}
.form-control1 {
  flex: 1;
	height: 3em;
  padding: 0 1em;
  color: #000000;
	font-size : 15px;
  cursor: pointer;
}
.form-control2 {
  flex: 1;
	height: 3em;
  padding: 0 1em;
  color: #000000;
	font-size : 15px;
  cursor: pointer;
}
input[type="text"] {
  flex: 1;
	height: 3em;
  padding: 0 1em;
  color: #000000;
	font-size : 15px;
  cursor: pointer;
}
input[type="password"] {
  flex: 1;
	height: 3em;
  padding: 0 1em;
  color: #000000;
	font-size : 15px;
  cursor: pointer;
}
.
/* Arrow */
.select::after {
  color: #ffffff;
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  padding: 0 1em;
  background: #ffffff;
  cursor: pointer;
  pointer-events: none;
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}
/* Transition */
.select:hover::after {
  color: #ecbbb4;
}
table{
	background-color: #ecbbb4;
	border-radius:10px;
	text-algin: center;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
th{
	padding: 20px 15px;
	color:#4E5066;
  font-size:20px;
  font-weight: bold;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
	background-color: rgba(255,255,255,0.1);
	text-align:center;
}

tr {
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
	background-color: rgba(255,255,255,0.7);
}

tr:nth-child(odd) td {
  background-color: rgba(255,255,255,0.4);
}

td {
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
}
:root {
  --backgroundColor: #F7FFF2;
  --colorShadeA: #da7a6c;
  --colorShadeB: #df8d81;
  --colorShadeC: #e9b1a9;
  --colorShadeD: #eec4be;
  --colorShadeE: #f4d6d2;
}
* {
  box-sizing: border-box;
}
*::before, *::after {
  box-sizing: border-box;
}


.big-button {
	position: relative;
  display: inline-block;
  cursor: pointer;
  outline: none;
	vertical-align: middle;
	font-size: 20px;
	font-weight: bold;
	color:var(--colorShadeA);
  padding: 1em 2em;
  border: 2px solid var(--colorShadeA);
  border-radius: 1em;
  background: var(--colorShadeE);
	transform-style: preserve-3d;
   transition: all 175ms cubic-bezier(0, 0, 1, 1);
}
.big-button::before {
  position: absolute;
  content: '';
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: var(--colorShadeC);
  border-radius: inherit;
    box-shadow: 0 0 0 2px var(--colorShadeB), 0 0.75em 0 0 var(--colorShadeA);
 transform: translate3d(0, 0.75em, -1em);
     transition: all 175ms cubic-bezier(0, 0, 1, 1);
}

.big-button:hover {
  background: var(--colorShadeD);
  transform: translate(0, 0.375em);
}

.big-button:hover::before {
  transform: translate3d(0, 0.75em, -1em);
}

.big-button:active {
            transform: translate(0em, 0.75em);
}

.big-button:active::before {
  transform: translate3d(0, 0, -1em);
      box-shadow: 0 0 0 2px var(--colorShadeB), 0 0.25em 0 0 var(--colorShadeB);
}
.submit-area{
	width: 90%;
  margin: 10px auto;
	padding: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
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
<p class="desc">나만의 편의점 꿀조합 레시피를 작성해 보세요!</p>
<main class="ma">
        <!--로그인해야 글작성 가능함-->
        <?php
                $URL = "./recipe_board.php";
                if(!isset($_SESSION['userid'])) {
        ?>
                <script>
                        alert("로그인이 필요합니다");
                        location.replace("<?php echo $URL?>");
                </script>
        <?php
                }
        ?>
        <!--글작성-->
  <div class= "container">
    <div class="board_wirte" id="board_write">
<form method = "post" action = "recipe_register_action.php">
				<br><table style="border-collapse: collapse;">
          <thead>
            <tr>
              <th colspan="2"><h2>레시피 글쓰기</h2></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="2"><span class="pull-left">&nbsp;&nbsp;&nbsp;작성자 : <b><input type = "hidden" name = "name" value="<?=$_SESSION['userid']?>"><?=$_SESSION['userid']?></b></span></td>
            </tr>
            <tr>
              <td colspan="2"><input type="text" class="form-control1" placeholder="글 제목" name="title" id="title" required></td>
            </tr>
            <tr>
             <td colspan="2"><input type ="text" placeholder="재료" name = "ingredient"></td>
            </tr> 
            <tr>
              <td colspan="2"><textarea class="form-control2" placeholder="글 내용" name="content" id="content" style="font-size : 15px; font-family: Noto Serif Telugu; padding: 13px; height:350px; width:850px;" required></textarea></td>
            </tr>
            <tr>
             <td colspan="2"><input type="password" placeholder="비밀번호" name = "pw" maxlength=10></td>
            </tr>
          </tbody>
        </table>
        <!--<button type="submit" class="btn btn-primary">저장</button>-->
				<div class="submit-area"><button type="submit" class="big-button">저장</button></div>
      </form>
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

