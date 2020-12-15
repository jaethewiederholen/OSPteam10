

<!DOCTYPE html>
<html lang="ko">

<?php include 'config.php'?> <!--config.php 삽입-->
<style>
.btn-brackets {
	display: block;
	position: relative;
	width: 80px;
	padding: 0.6em;
font-family: Noto Serif Telugu;
font-size: 15px;
	text-align: center;
	text-decoration: none;
	color: #B3E495;
	background: #fff;
	border:1px solid #B3E495;
}
.btn-brackets:hover {
	 background: #B3E495;
         color: #fff;
	 cursor: pointer;
	 text-decoration: none;
}
.select{
width: 90%;
margin: 10px auto;
display: flex;
align-items: center;
justify-content: center;
}
.searchform{
margin: 10px auto;
display: flex;
width: 30%;
}
.material-icons {
    margin: -1px 5px 0 0;
    vertical-align: middle;
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
  background: #B3E495;
  background-image: none;
}
/* Remove IE arrow */
.form-control::-ms-expand {
  display: none;
}
/* Custom Select */
.select {
  position: relative;
  display: flex;
  width: 10em;
  height: 3em;
  line-height: 3;
  background: #B3E495;
  overflow: hidden;
  border-radius: .25em;
}
.sort {
  position: relative;
  display: flex;
  width: 10em;
  height: 3em;
  line-height: 3;
  background: #B3E495;
  overflow: hidden;
  border-radius: .25em;
}
.form-control {
  flex: 1;
  padding: 0 1.5em;
  color: #fff;
  font-weight: bold;
  cursor: pointer;
}
/* Arrow */
.select::after {
  color: #ffffff;
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  padding: 0 1em;
  background: #B3E495;
  cursor: pointer;
  pointer-events: none;
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}
/* Transition */
.select:hover::after {
  color: #87d458;
}
.search-text, .search-btn
{
    color: #fff;
    font-family: Nunito;
    padding: 0;
    margin: 0;
    border: 0;
    background-color: transparent;
}

#cover
{
    margin: 10px auto;
    display: flex;
    width: 450px;
    padding: 35px;

    background-color: #B3E495;
    border-radius: 20px;
    box-shadow: 0 10px 40px #B3E495, 0 0 0 20px #ffffffeb;
    transform: scale(0.6);
}

.search-text[type="text"]
{
    width: 100%;
    height: 40px;
    font-size: 30px;
    line-height: 1;
}

.search-text[type="text"]::placeholder
{
    color: #ffffff;
}
	.Btn{
    font-family: Noto Serif Telugu;
    border-radius:10px;
    border: 4px solid #4E5066;
    background-color: #ecbbb4;
    color: #4E5066;
    display: inline-block;
    font-size: 18px;
    font-weight: bold;
    line-height: 24px;
    margin: auto;
    padding: 12px 32px 12px 32px;
    position: relative;
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
.tinyba{
margin-bottom: 1.5%;
width: 100%;
}
.outnpbox{
width: 100%;
margin-top: 3%;
}
.nppyeon{
padding-bottom: 3px;
padding-left: 3px;
font-family: Noto Serif Telugu;
font-weight: bold;
font-size: 25px;
color: #000000;
}
.npbox{
background: rgba(234,175,175,0.25);
}
.leftnp{
width: 15%;
}
.npimg{
width: 15%;
text-align: center;
}
.npimg img{
position: absoulte;
width: 170px;
height: 170px;
table-layout: fixed;
}
.npname{
font-family: Noto Serif Telugu;
font-weight: bold;
font-size: 20px;
color: #000000;
}
.picknp{
width: 5%;
}

.rightnp{
width: 15%;
}
.nppricet{
font-family: Noto Serif Telugu;
font-size: 18px;
color: #000000;
width: 10%;
}
.nppricep{
font-family: Noto Serif Telugu;
font-size: 18px;
color: #000000;
with: 50%;
}
.npdesct{
font-family: Noto Serif Telugu;
font-size: 18px;
color: #000000;
}
.npdescp{
overflow: hidden;
text-overflow: ellipsis;
white-space: wrap;
height: 80px;
padding-top: 15px;
padding-bottom: 3px;
display: block;
}
.npglink1{
margin-left: 20%;
padding: 1%;
float: left;
background: rgba(234,175,175,0.75);
border-radius: 50px;
}
.npbox2{
background: rgba(255,254,163,0.25);
}
.npg2link1{
margin-left: 20%;
padding: 1%;
float: left;
background: rgba(255,254,163,0.75);
border-radius: 50px;
}
.npg2link2{
margin-right: 5%;
padding: 1%;
float: right;
background: rgba(255,254,163,0.75);
border-radius: 50px;
}
.npbox3{
background: rgba(175,234,223,0.25);
}
.npg3link1{
margin-left: 20%;
padding: 1%;
float: left;
background: rgba(175,234,223,0.75);
border-radius: 50px;
}
.npg3link2{
margin-right: 5%;
padding: 1%;
float: right;
background: rgba(175,234,223,0.75);
border-radius: 50px;
}
.npbox4{
background: rgba(179,181,232,0.25);
}
.npg4link1{
margin-left: 20%;
padding: 1%;
float: left;
background: rgba(179,181,232,0.75);
border-radius: 50px;
}
.npg4link2{
margin-right: 5%;
padding: 1%;
float: right;
background: rgba(179,181,232,0.75);
border-radius: 50px;
}
.npbox5{
background: rgba(215,163,206,0.25);
}
.npg5link1{
margin-left: 20%;
padding: 1%;
float: left;
background: rgba(215,163,206,0.75);
border-radius: 50px;
}
.npg5link2{
margin-right: 5%;
padding: 1%;
float: right;
background: rgba(215,163,206,0.75);
border-radius: 50px;
}
.npglink2{
margin-right: 5%;
padding: 1%;
float: right;
background: rgba(234,175,175,0.75);
border-radius: 50px;
}
.ba1{
background: #B3E495;
height: 20px;
width: 100%;
}
.ba2{
clear:both;
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
[id="heart"] {
  left: -200vw;
}
[for="heart"] {
  color: #aab8c2;
  cursor: pointer;
  font-size: 1.5em;
  align-self: center;
  transition: color 0.2s ease-in-out;
}
[for="heart"]:hover {
  color: grey;
}
[for="heart"]::selection {
  color: none;
  background: transparent;
}
[for="heart"]::moz-selection {
  color: none;
  background: transparent;
}
[id="heart"]:checked + label {
  color: #e2264d;
  will-change: font-size;
  animation: heart 0.8s cubic-bezier(.17, .89, .5, .6);
}
@keyframes heart {0%, 17.5% {font-size: 0;}}
</style>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>PyeonReview-신상품</title>
</head>

<body>
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
      } ?>
	</p>
  	<nav class="na">
  	<a href="home.php">편리뷰&nbsp&nbsp&nbsp</a>
  	<a href="newproduct_view.php"><u>이달의 신상</u>&nbsp&nbsp&nbsp</a>
  	<a href="review.php">솔직 리뷰&nbsp&nbsp&nbsp</a>
  	<a href="recipe_board.php">꿀조합 레시피&nbsp&nbsp&nbsp</a>
  	<a href="map.php">내 주변 편의점&nbsp&nbsp&nbsp</a>
  	<a href="mypage.php">마이페이지</a>
  	</nav>
  </header>
<p class="ba1"></p>
<p class="desc">BIG5 편의점의 이달의 신상품을 확인하세요!</p>
<main class="ma">
<div class="tinyba"></div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
<div class="select-group"><div class="select">
  <select name="chain" class="form-control" id="cvs_select">
    <option value="0"> select </option>
    <option value="CU"> CU </option>
    <option value="GS25"> GS25 </option>
    <option value="7ELEVEN"> 7ELEVEN </option>
    <option value="이마트"> 이마트 </option>
    <option value="미니스탑"> 미니스탑 </option>
    <option value="공용"> 공용 </option>
  </select>
</div></div>

<div class text align="center">
<button type=submit" class="Btn">편의점별 목록보기</button>
</div>

</form>
<?php
$connect = mysqli_connect("localhost","team10","team10","team10");
$chain = isset($_POST['chain']) ? $_POST['chain'] : false;
if(mysqli_connect_errno()){
      printf("Connect failed: %s\n", mysqli_connect_errno());
      exit();
}
else{
       $sql = "SELECT * FROM newproduct WHERE 1";
       $chain = isset($_POST['chain']) ? $_POST['chain'] : false;
       if($chain) $sql .= " and chain = '$chain'";
       $res=mysqli_query($connect,$sql);
           while ($row=mysqli_fetch_array($res)){
            $chains=$row[1];
            $name=$row[2];
            $content=$row[3];
            $price=$row[4];
            $purchase_link=$row[5];
            $review_link=$row[6];
            $date=$row[7];
            $filename=$row[8];
            $type=$row[9]; ?>



<table class="outnpbox" cellspacing="0" cellpadding="0">

<tr>
<td></td>
<td class="nppyeon"><?php echo "$chains" ?></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<tbody class="npbox">

<tr>
<td class="leftnp" rowspan="4"></td>
<td class="npimg" rowspan="4"><img src="<?php echo "$filename" ?>"></td>
<td class="npname" colspan="2">&nbsp&nbsp&nbsp&nbsp<?php echo "$name" ?></td>
<td class="picknp"></br>

<form method="post" action="like.php">
<input type="checkbox" id="heart" value='<?=$name?>' name="product" style="zoom:1.5;"/>
<label for="heart">❤</label>
<button type="submit" class="btn-brackets">찜하기</button>
</form>

<td class="leftnp" rowspan="4"></td>
</tr>

<tr>
<td class="nppricet">&nbsp&nbsp&nbsp&nbsp가격(원)</td>
<td class="nppricep"><?php echo "$price" ?></td>
<td></td>
</tr>

<tr>
<td class="npdesct">&nbsp&nbsp&nbsp&nbsp상품설명</td>
<td class="npdescp"><?php echo "$content" ?></td>
<td></td>
</tr>

<tr>
<td></td>
<td colspan="2">
<div class="npglink1"><a href="<?php echo "$purchase_link" ?>">&nbsp상품 구매하러 가기 >&nbsp</a></div>
<div class="npglink2"><a href="<?php echo "$review_link"?>">&nbsp유투브 리뷰영상 보러가기 >&nbsp</a></div></br></br>
</td>
</tr>

</tbody>

</table>
<?php
            if($row=mysqli_fetch_array($res)){
             $chains=$row[1];
             $name=$row[2];
             $content=$row[3];
             $price=$row[4];
             $purchase_link=$row[5];
             $review_link=$row[6];
             $date=$row[7];
             $filename=$row[8];
             $type=$row[9];
?>
<table class="outnpbox" cellspacing="0" cellpadding="0">

<tr>
<td></td>
<td class="nppyeon"><?php echo "$chains" ?></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<tbody class="npbox2">

<tr>
<td class="leftnp" rowspan="4"></td>
<td class="npimg" rowspan="4"><img src="<?php echo "$filename" ?>"></td>
<td class="npname" colspan="2">&nbsp&nbsp&nbsp&nbsp<?php echo "$name" ?></td>
<td class="picknp"></br>

<form method="post" action="like.php">
<input type="checkbox" id="heart" value='<?=$name?>' name="product" style="zoom:1.5;"/>
<label for="heart">❤</label>
<button type="submit" class="btn-brackets">찜하기</button>
</form>

<td class="leftnp" rowspan="4"></td>
</tr>

<tr>
<td class="nppricet">&nbsp&nbsp&nbsp&nbsp가격(원)</td>
<td class="nppricep"><?php echo "$price" ?></td>
<td></td>
</tr>

<tr>
<td class="npdesct">&nbsp&nbsp&nbsp&nbsp상품설명</td>
<td class="npdescp"><?php echo "$content" ?></td>
<td></td>
</tr>

<tr>
<td></td>
<td colspan="2">
<div class="npg2link1"><a href="<?php echo "$purchase_link" ?>">&nbsp상품 구매하러 가기 >&nbsp</a></div>
<div class="npg2link2"><a href="<?php echo "$review_link"?>">&nbsp유투브 리뷰영상 보러가기 >&nbsp</a></div></br></br>
</td>
</tr>

</tbody>
<?php
            }
            if($row=mysqli_fetch_array($res)){
             $chains=$row[1];
             $name=$row[2];
             $content=$row[3];
             $price=$row[4];
             $purchase_link=$row[5];
             $review_link=$row[6];
             $date=$row[7];
             $filename=$row[8];
             $type=$row[9];
?>
</table>

<table class="outnpbox" cellspacing="0" cellpadding="0">

<tr>
<td></td>
<td class="nppyeon"><?php echo "$chains" ?></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<tbody class="npbox3">

<tr>
<td class="leftnp" rowspan="4"></td>
<td class="npimg" rowspan="4"><img src="<?php echo "$filename" ?>"></td>
<td class="npname" colspan="2">&nbsp&nbsp&nbsp&nbsp<?php echo "$name" ?></td>
<td class="picknp"></br>

<form method="post" action="like.php">
<input type="checkbox" id="heart" value='<?=$name?>' name="product" style="zoom:1.5;"/>
<label for="heart">❤</label>
<button type="submit" class="btn-brackets">찜하기</button>
</form>

<td class="leftnp" rowspan="4"></td>
</tr>

<tr>
<td class="nppricet">&nbsp&nbsp&nbsp&nbsp가격(원)</td>
<td class="nppricep"><?php echo "$price" ?></td>
<td></td>
</tr>

<tr>
<td class="npdesct">&nbsp&nbsp&nbsp&nbsp상품설명</td>
<td class="npdescp"><?php echo "$content" ?></td>
<td></td>
</tr>

<tr>
<td></td>
<td colspan="2">
<div class="npg3link1"><a href="<?php echo "$purchase_link" ?>">&nbsp상품 구매하러 가기 >&nbsp</a></div>
<div class="npg3link2"><a href="<?php echo "$review_link"?>">&nbsp유투브 리뷰영상 보러가기 >&nbsp</a></div></br></br>
</td>
</tr>

</tbody>

</table>
<?php
            }
            if($row=mysqli_fetch_array($res)){
             $chains=$row[1];
             $name=$row[2];
             $content=$row[3];
             $price=$row[4];
             $purchase_link=$row[5];
             $review_link=$row[6];
             $date=$row[7];
             $filename=$row[8];
             $type=$row[9];
?>
<table class="outnpbox" cellspacing="0" cellpadding="0">

<tr>
<td></td>
<td class="nppyeon"><?php echo "$chains" ?></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<tbody class="npbox4">

<tr>
<td class="leftnp" rowspan="4"></td>
<td class="npimg" rowspan="4"><img src="<?php echo "$filename" ?>"></td>
<td class="npname" colspan="2">&nbsp&nbsp&nbsp&nbsp<?php echo "$name" ?></td>
<td class="picknp"></br>

<form method="post" action="like.php">
<input type="checkbox" id="heart" value='<?=$name?>' name="product" style="zoom:1.5;"/>
<label for="heart">❤</label>
<button type="submit" class="btn-brackets">찜하기</button>
</form>

<td class="leftnp" rowspan="4"></td>
</tr>

<tr>
<td class="nppricet">&nbsp&nbsp&nbsp&nbsp가격(원)</td>
<td class="nppricep"><?php echo "$price" ?></td>
<td></td>
</tr>

<tr>
<td class="npdesct">&nbsp&nbsp&nbsp&nbsp상품설명</td>
<td class="npdescp"><?php echo "$content" ?></td>
<td></td>
</tr>

<tr>
<td></td>
<td colspan="2">
<div class="npg4link1"><a href="<?php echo "$purchase_link" ?>">&nbsp상품 구매하러 가기 >&nbsp</a></div>
<div class="npg4link2"><a href="<?php echo "$review_link"?>">&nbsp유투브 리뷰영상 보러가기 >&nbsp</a></div></br></br>
</td>
</tr>

</tbody>

</table>
<?php
            }
            if($row=mysqli_fetch_array($res)){
             $chains=$row[1];
             $name=$row[2];
             $content=$row[3];
             $price=$row[4];
             $purchase_link=$row[5];
             $review_link=$row[6];
             $date=$row[7];
             $filename=$row[8];
             $type=$row[9];
?>
<table class="outnpbox" cellspacing="0" cellpadding="0">

<tr>
<td></td>
<td class="nppyeon"><?php echo "$chains" ?></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<tbody class="npbox5">

<tr>
<td class="leftnp" rowspan="4"></td>
<td class="npimg" rowspan="4"><img src="<?php echo "$filename" ?>"></td>
<td class="npname" colspan="2">&nbsp&nbsp&nbsp&nbsp<?php echo "$name" ?></td>
<td class="picknp"></br>

<form method="post" action="like.php">
<input type="checkbox" id="heart" value='<?=$name?>' name="product" style="zoom:1.5;"/>
<label for="heart">❤</label>
<button type="submit" class="btn-brackets">찜하기</button>
</form>

<td class="leftnp" rowspan="4"></td>
</tr>

<tr>
<td class="nppricet">&nbsp&nbsp&nbsp&nbsp가격(원)</td>
<td class="nppricep"><?php echo "$price" ?></td>
<td></td>
</tr>

<tr>
<td class="npdesct">&nbsp&nbsp&nbsp&nbsp상품설명</td>
<td class="npdescp"><?php echo "$content" ?></td>
<td></td>
</tr>

<tr>
<td></td>
<td colspan="2">
<div class="npg5link1"><a href="<?php echo "$purchase_link" ?>">&nbsp상품 구매하러 가기 >&nbsp</a></div>
<div class="npg5link2"><a href="<?php echo "$review_link"?>">&nbsp유투브 리뷰영상 보러가기 >&nbsp</a></div></br></br>
</td>
</tr>

</tbody>

</table>
<?php
            }
?>
<?php
           }
}
mysqli_close($connect);
?>
</main>
</body>
</html>
