<!DOCTYPE HTML>
<html lang="ko">
<?php include 'config.php'?> <!--config.php 삽입-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>PyeonReview_꿀조합레시피</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
	body{
		padding-top: 7.2px;
		padding-left: 8px;
		padding-right: 8px;
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
	border: 1px solid #000000;
	margin-bottom: 1.5%;
	margin-top: -0.5%;
	width: 100%;
	}
	.ba1{
	background: #B3E495;
	height: 20px;
	width: 100%;
	}
	.outgbox{
	width: 100%;
	border-collapse: separate;
	border-spacing: 0 30px;
	}
	.ingbox{
	padding: 1%;
	background: #FFFFFF;
	box-shadow: 4px 4px 4px 4px rgba(0, 0, 0, 0.25);
	}
	.g1{
	}
	.g2{
	font-family: Noto Serif Telugu;
	font-size: 23px;
	text-align: center;
	color: #000000;
	}
	.g3{
	font-family: Noto Serif Telugu;
	font-size: 15px;
	color: #000000;
	}
	.g4{
	font-family: Noto Serif Telugu;
	font-size: 15px;
	color: #000000;
	}
	.recipe_Btn{
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
	text-decoration:none;
	}

	.card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
}
	</style>
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script>
	$(document).ready(function(){
		var text="";
		$.post('recipe_search.php', { text : text }, function(data){
			//alert(data);
			data=JSON.parse(data);
			document.getElementById('here').innerHTML='';
			$.each(data,function(key,val){
				//alert(val.num);
				$('#here').append('<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-bottom : 30px"><div class="card"><div class="card-body text-center"><p><img class="card-img-top img-fluid" src="default_img.jpg"></p><h4 class="card-title">'+val.title+'</h4><p class="card-text"> 작성자 : ' + val.id + '</p><p class="card-text"> 재료 : ' +
				val.ingredient + '</p><a href = "recipe_view.php?number='+val.number+'" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i</a></div></div></div>');
					});
			});

		$('#search_btn').click(function() {
			text=$('#search_text').val();
			$.post('recipe_search.php', { text : text }, function(data){
				//alert(data);
				data=JSON.parse(data);
				if(data=="") {
						document.getElementById('here').innerHTML='해당하는 검색결과가 없습니다!';
				}
				else {
				document.getElementById('here').innerHTML='';
				$.each(data,function(key,val){
					//alert(val.num);
				$('#here').append('<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-bottom : 30px"><div class="card"><div class="card-body text-center"><p><img class="card-img-top img-fluid" src="default_img.jpg"></p><h4 class="card-title">'+val.title+'</h4><p class="card-text"> 작성자 : ' + val.id + '</p><p class="card-text"> 재료 : ' +
				val.ingredient + '</p><a href = "recipe_view.php?number='+val.number+'" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i</a></div></div></div>');
					});
				}

			});
		});
	});
	</script>
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
	<nav class="na" style="margin-bottom : 14px">
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
<div class="tinyba"></div>

<div>
<input type="text" id="search_text" placeholder="레시피 제목 검색하기" id="search">
<input type = "button" id="search_btn"  value="검색">
</div>

</br></br>
<div class="box">
	<div class="container">
		<div class="row" id="here">

		</div>
	</div>
</div>
<div class text align="center">
<button type="button" class="recipe_Btn" onClick="location.href='./recipe_register.php'">레시피 작성하기</button>
</div>
<footer>
	<p class="ba2"></p>
</main>
	<p class="fo">
	&copy; Team10
	</p>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
