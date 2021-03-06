<!DOCTYPE html>
<html lang="ko">
<?php
include 'config.php';
include 'db_con.php';
?> <!--config.php 삽입-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>PyeonReview-리뷰</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script>
    $(document).ready(function(){
      var inisort="default";
      /*$.post('review_sort.php', { sortby : inisort }, function(data){
        data=JSON.parse(data);
        document.getElementById('list_table').innerHTML='<tr><th style="background-color : #eeeeee; text-align:center;">여행</th><th style="background-color : #eeeeee; text-align:center;">제목</th><th style="background-color : #eeeeee; text-align:center;">작성자</th><th style="background-color : #eeeeee; text-align:center;">작성일</th></tr>';
        //alert("ajax completed: " + data);
        $.each(data,function(key,val){
          //alert(val.num);
          $('#list_table').append('<tbody><tr><td width="100">'+ val.addr + '</td><td width="470" ><span class="read_check" style="cursor:pointer" data-action="./read.php?num='+val.num+'">'+val.title+'</span></td><td width="120">' + val.id + '</td><td width="100">' + val.date + '</td></tr></tbody>');
          $(".read_check").on("click", function () {
            var action_url = $(this).attr("data-action");
            $(location).attr("href",action_url);
            });
          });

      });*/
      $('#sortby').change(function(){
        var sort = $(this).val();

        $.post("test.php", function(data) { alert("Data Loaded: " + data); });
        /*$.post('review_sort.php', { sortby : sort }, function(data){
          data=JSON.parse(data);
          document.getElementById('list_table').innerHTML='<tr><th style="background-color : #eeeeee; text-align:center;">여행지</th><th style="background-color : #eeeeee; text-align:center;">제목</th><th style="background-color : #eeeeee; text-align:center;">작성자</th><th style="background-color : #eeeeee; text-align:center;">작성일</th></tr>';
          //alert("ajax completed: " + data);
          $.each(data,function(key,val){
            //alert(val.num);
            $('#list_table').append('<tbody><tr><td width="100">'+ val.addr +'</td><td width="470"><span class="read_check" style="cursor:pointer" data-action="./read.php?num='+val.num+'">'+val.title+'</span></td><td width="120">' + val.id + '</td><td width="100">' + val.date + '</td></tr></tbody>');
            $(".read_check").on("click", function () {
              var action_url = $(this).attr("data-action");
              $(location).attr("href",action_url);
              });
            });

        });*/

      });
    });
    /*$(document).ready(function(){
      var inisort="default";

      $.post('review_sort.php', { sortby : inisort }, function(data){

        data=JSON.parse(data);
        document.getElementById('list_table').innerHTML='<tr><th style="background-color : #eeeeee; text-align:center;">번호</th><th style="background-color : #eeeeee; text-align:center;">제목</th><th style="background-color : #eeeeee; text-align:center;">별점</th><th style="background-color : #eeeeee; text-align:center;">작성자</th><th style="background-color : #eeeeee; text-align:center;">작성일</th></tr>';
        //alert("ajax completed: " + data);
        $.each(data,function(key,val){
          //alert(val.num);
          $('#list_table').append('<tbody><tr><td width="100">'+ val.num + '</td><td width="470" ><span class="read_check" style="cursor:pointer" data-action="./read.php?num='+val.num+'">'+val.title+'</span></td><td width="120">'+val.star+'</td><td width="120">' + val.id + '</td><td width="100">' + val.date + '</td></tr></tbody>');
          $(".read_check").on("click", function () {
            var action_url = $(this).attr("data-action");
            $(location).attr("href",action_url);
            });
          });

      });
      $('#sortby').change(function(){
        var sort = $(this).val();
        $.post('review_sort.php', { sortby : sort }, function(data){
          data=JSON.parse(data);
          document.getElementById('list_table').innerHTML='<tr><th style="background-color : #eeeeee; text-align:center;">번호</th><th style="background-color : #eeeeee; text-align:center;">제목</th><th style="background-color : #eeeeee; text-align:center;">별점</th><th style="background-color : #eeeeee; text-align:center;">작성자</th><th style="background-color : #eeeeee; text-align:center;">작성일</th></tr>';
          //alert("ajax completed: " + data);
          $.each(data,function(key,val){
            //alert(val.num);
            $('#list_table').append('<tbody><tr><td width="100">'+ val.num + '</td><td width="470" ><span class="read_check" style="cursor:pointer" data-action="./read.php?num='+val.num+'">'+val.title+'</span></td><td width="120">'+val.star+'</td><td width="120">' + val.id + '</td><td width="100">' + val.date + '</td></tr></tbody>');
            $(".read_check").on("click", function () {
              var action_url = $(this).attr("data-action");
              $(location).attr("href",action_url);
              });
            });

        });

      });
    });*/
    </script>
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
.select{
width: 90%;
margin: 10px auto;
display: flex;
}
.se{
flex:1;
margin: 0px 5%;
width: 30%;
}
.searchform{
margin: 10px auto;
display: flex;
width: 30%;
}
a{
color: #000000;
text-decoration:none
}
</style>



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
  	<a href="newproduct_view.php">이달의 신상&nbsp&nbsp&nbsp</a>
  	<a href="review.php"><u>솔직 리뷰</u>&nbsp&nbsp&nbsp</a>
  	<a href="recipe_board.php">꿀조합 레시피&nbsp&nbsp&nbsp</a>
  	<a href="map.php">내 주변 편의점&nbsp&nbsp&nbsp</a>
  	<a href="mypage.php">마이페이지</a>
  	</nav>
  </header>

  <p class="ba1"></p>
  <p class="desc">다양한 편의점 상품의 리뷰를 확인하세요!</p>
  <main class="ma">

  <div class="search">
    <div class="select">

    <select class="se">
      <option selected="">편의점</option>
      <option value="1">GS25</option>
      <option value="2">CU</option>
      <option value="3">세븐일레븐</option>
      <option value="4">이마트</option>
      <option value="5">미니스톱</option>
    </select>

    <select class="se">
      <option selected="">품목</option>
      <option value="1">식품</option>
      <option value="2">음료</option>
      <option value="3">스낵</option>
      <option value="4">술</option>
      <option value="5">생활용품</option>
    </select>

    <select class="se">
      <option selected="">가격대</option>
      <option value="1">5천원대 이하</option>
      <option value="2">1만원대 이하</option>
      <option value="3">2만원대 이하</option>
    </select>

    </div>
    <input type="text" class="searchform" placeholder="제목 또는 상품평 검색하기" id="inputDefault">
  </div>

  <div class="contatiner">
    <div class="board">
      <br>
      <br>
      <div class="container-fluid ">
      <div class="row" >
        <div class="col-md-2">
        <select class="browser-default custom-select"  name="sortby" id="sortby" >
          <option value="default" selected>최신순</option>;
          <option value="starVal">별점순</option>;
        </select>
      </div>
      </div>
    </div>
      <br>
      <br>
      <table class="table table-striped" id="list_table" style="text-align: center; border: 1px solid gray;">

      </table>
    </div>

  <div class = text align="center">
  <br><br><button type="button" class="recipe_Btn" onClick="location.href='./review_write.php'">글쓰기</button>
  </div>

  <footer>
  	<p class="ba2"></p>
  	<p class="fo">
  	&copy; Team10
  	</p>
  <footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </html>
