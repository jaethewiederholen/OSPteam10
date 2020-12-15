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
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->

    <script>
    $(document).ready(function(){
      var inisort="default";
      var sort="";
      var cvs="";
      var item="";
      var cost="";
      var text="";
      $.post('review_sort.php', { sortby : inisort, cvs : cvs, item : item, cost : cost }, function(data){
        alert(data);
        data=JSON.parse(data);
        document.getElementById('list_table').innerHTML='<thead class="tbl-head"><tr><th>No</th><th>썸네일</th><th>제목</th><th>별점</th><th>작성자</th><th>작성일</th></tr></thead>';
        //alert("ajax completed: " + data);
        $.each(data,function(key,val){
          alert(val.img);
          $('#list_table').append('<tbody class="tbl-content"><tr><td width="10%">'+ val.num + '</td><td width="20%"><img src="'+val.img+'" class="" style="height: 80px"/></td><td width="30%" ><span class="read_check" style="cursor:pointer" data-action="./review_read.php?num='+val.num+'">'+val.title+'</span></td><td width="10%">'+val.star+'</td><td width="10%">' + val.id + '</td><td width="20%">' + val.date + '</td></tr></tbody>');
          $(".read_check").on("click", function () {
            var action_url = $(this).attr("data-action");
            $(location).attr("href",action_url);
            });
          });

      });
      $('#sortby').change(function(){
        sort = $(this).val();
        $.post('review_search.php', { sortby : sort, cvs : cvs, item : item, cost : cost, text : text }, function(data){
          data=JSON.parse(data);
          document.getElementById('list_table').innerHTML='<thead class="tbl-head"><tr><th>No</th><th>썸네일</th><th>제목</th><th>별점</th><th>작성자</th><th>작성일</th></tr></thead>';
          //alert("ajax completed: " + data);
          $.each(data,function(key,val){
            //alert(val.num);
          $('#list_table').append('<tbody class="tbl-content"><tr><td width="10%">'+ val.num + '</td><td width="20%"><img src="'+val.image+'" alt="default_img.jpg" class="" style="height: 80px"/></td><td width="30%" ><span class="read_check" style="cursor:pointer" data-action="./review_read.php?num='+val.num+'">'+val.title+'</span></td><td width="10%">'+val.star+'</td><td width="10%">' + val.id + '</td><td width="20%">' + val.date + '</td></tr></tbody>' + val.date + '</td></tr></tbody>');
            $(".read_check").on("click", function () {
              var action_url = $(this).attr("data-action");
              $(location).attr("href",action_url);
              });
            });

        });

      });
      $('#cvs_select').change(function() {
        cvs = $(this).val();
        $.post('review_search.php', { sortby : sort, cvs : cvs, item : item, cost : cost, text : text }, function(data){
          data=JSON.parse(data);
          if(data=="") {
              document.getElementById('list_table').innerHTML='해당하는 검색결과가 없습니다!';
          }
          else {
          document.getElementById('list_table').innerHTML='<thead class="tbl-head"><tr><th>No</th><th>썸네일</th><th>제목</th><th>별점</th><th>작성자</th><th>작성일</th></tr></thead>';
          //alert("ajax completed: " + data);
          $.each(data,function(key,val){
            //alert(val.num);
          $('#list_table').append('<tbody class="tbl-content"><tr><td width="10%">'+ val.num + '</td><td width="20%"><img src="말표흑맥주.jpg" alt="" class="" style="height: 80px"/></td><td width="30%" ><span class="read_check" style="cursor:pointer" data-action="./review_read.php?num='+val.num+'">'+val.title+'</span></td><td width="10%">'+val.star+'</td><td width="10%">' + val.id + '</td><td width="20%">' + val.date + '</td></tr></tbody>' + val.date + '</td></tr></tbody>');
            $(".read_check").on("click", function () {
              var action_url = $(this).attr("data-action");
              $(location).attr("href",action_url);
              });
            });
          }

        });

      });
      $('#item_select').change(function() {
        item = $(this).val();
        $.post('review_search.php', { sortby : sort, cvs : cvs, item : item, cost : cost, text : text }, function(data){
          data=JSON.parse(data);
          alert(data);
          if(data=="") {
              document.getElementById('list_table').innerHTML='해당하는 검색결과가 없습니다!';
          }
          else {
          document.getElementById('list_table').innerHTML='<thead class="tbl-head"><tr><th>No</th><th>썸네일</th><th>제목</th><th>별점</th><th>작성자</th><th>작성일</th></tr></thead>';
          //alert("ajax completed: " + data);
          $.each(data,function(key,val){
            //alert(val.num);
          $('#list_table').append('<tbody class="tbl-content"><tr><td width="10%">'+ val.num + '</td><td width="20%"><img src="말표흑맥주.jpg" alt="" class="" style="height: 80px"/></td><td width="30%" ><span class="read_check" style="cursor:pointer" data-action="./review_read.php?num='+val.num+'">'+val.title+'</span></td><td width="10%">'+val.star+'</td><td width="10%">' + val.id + '</td><td width="20%">' + val.date + '</td></tr></tbody>' + val.date + '</td></tr></tbody>');
            $(".read_check").on("click", function () {
              var action_url = $(this).attr("data-action");
              $(location).attr("href",action_url);
              });
            });
          }

        });
      });
      $('#cost_select').change(function() {
        cost = $(this).val();
        $.post('review_search.php', { sortby : sort, cvs : cvs, item : item, cost : cost, text: text }, function(data){
          data=JSON.parse(data);
          if(data=="") {
              document.getElementById('list_table').innerHTML='해당하는 검색결과가 없습니다!';
          }
          else {
          document.getElementById('list_table').innerHTML='<thead class="tbl-head"><tr><th>No</th><th>썸네일</th><th>제목</th><th>별점</th><th>작성자</th><th>작성일</th></tr></thead>';
          //alert("ajax completed: " + data);
          $.each(data,function(key,val){
            //alert(val.num);
          $('#list_table').append('<tbody class="tbl-content"><tr><td width="10%">'+ val.num + '</td><td width="20%"><img src="말표흑맥주.jpg" alt="" class="" style="height: 80px"/></td><td width="30%" ><span class="read_check" style="cursor:pointer" data-action="./review_read.php?num='+val.num+'">'+val.title+'</span></td><td width="10%">'+val.star+'</td><td width="10%">' + val.id + '</td><td width="20%">' + val.date + '</td></tr></tbody>' + val.date + '</td></tr></tbody>');
            $(".read_check").on("click", function () {
              var action_url = $(this).attr("data-action");
              $(location).attr("href",action_url);
              });
            });
          }

        });
      });

      $('#search_btn').click(function() {
        text=$('#search_text').val();
        $.post('review_search.php', { sortby : sort, cvs : cvs, item : item, cost : cost, text: text }, function(data){
          //alert(data);
          data=JSON.parse(data);
          if(data=="") {
              document.getElementById('list_table').innerHTML='해당하는 검색결과가 없습니다!';
          }
          else {
          document.getElementById('list_table').innerHTML='<thead class="tbl-head"><tr><th>No</th><th>썸네일</th><th>제목</th><th>별점</th><th>작성자</th><th>작성일</th></tr></thead>';
          //alert("ajax completed: " + data);
          $.each(data,function(key,val){
            //alert(val.num);
          $('#list_table').append('<tbody class="tbl-content"><tr><td width="10%">'+ val.num + '</td><td width="20%"><img src="말표흑맥주.jpg" alt="" class="" style="height: 80px"/></td><td width="30%" ><span class="read_check" style="cursor:pointer" data-action="./review_read.php?num='+val.num+'">'+val.title+'</span></td><td width="10%">'+val.star+'</td><td width="10%">' + val.id + '</td><td width="20%">' + val.date + '</td></tr></tbody>' + val.date + '</td></tr></tbody>');
            $(".read_check").on("click", function () {
              var action_url = $(this).attr("data-action");
              $(location).attr("href",action_url);
              });
            });
          }

        });
      });

    });

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
/*.select{
width: 90%;
margin: 10px auto;
display: flex;
align-items: center;
justify-content: center;
}*/
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


.tb
{
    display: table;
    width: 100%;
}

.td
{
    display: table-cell;
    vertical-align: middle;
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

#s-cover
{
    width: 1px;
    padding-left: 35px;
}

.search-btn
{
    position: relative;
    display: block;
    width: 50px;
    height: 50px;
    cursor: pointer;
}

#s-circle
{
    position: relative;
    top: -8px;
    left: 0;
    width: 21.5px;
    height: 21.5px;
    margin-top: 0;
    border-width: 15px;
    border: 15px solid #fff;
    background-color: transparent;
    border-radius: 50%;
    transition: 0.5s ease all;
}

.search-btn span
{
    position: absolute;
    top: 38px;
    left: 23px;
    display: block;
    width: 45px;
    height: 15px;
    background-color: transparent;
    border-radius: 10px;
    transform: rotateZ(52deg);
    transition: 0.5s ease all;
}

.search-btn span:before, button span:after
{
    content: '';
    position: absolute;
    bottom: 0;
    right: 0;
    width: 45px;
    height: 15px;
    background-color: #fff;
    border-radius: 10px;
    transform: rotateZ(0);
    transition: 0.5s ease all;
}

#s-cover:hover #s-circle
{
    top: -1px;
    width: 50px;
    height: 15px;
    border-width: 0;
    background-color: #fff;
    border-radius: 20px;
}

#s-cover:hover span
{
    top: 50%;
    left: 40px;
    width: 25px;
    margin-top: -9px;
    transform: rotateZ(0);
}

#s-cover:hover button span:before
{
    bottom: 11px;
    transform: rotateZ(52deg);
}

#s-cover:hover button span:after
{
    bottom: -11px;
    transform: rotateZ(-52deg);
}
#s-cover:hover button span:before, #s-cover:hover button span:after
{
    right: -6px;
    width: 40px;
    background-color: #fff;
}

#ytd-url {
  display: block;
  position: fixed;
  right: 0;
  bottom: 0;
  padding: 10px 14px;
  margin: 20px;
  color: #fff;
  font-family: Nunito;
  font-size: 14px;
  text-decoration: none;
  background-color: #ff7575;
  border-radius: 4px;
  box-shadow: 0 10px 20px -5px rgba(255, 117, 117, 0.86);
  z-index: 125;
}
a{
color: #000000;
text-decoration:none
}
table{
  border-radius: 10px;
  width:90%;
  table-layout: fixed;
  background: -webkit-linear-gradient(top, #b3e495, #ecbbb4);
  background: linear-gradient(to bottom, #b3e495, #ecbbb4);
  margin: 50px;
}
th{
  padding: 20px 15px;
  text-align: center;
  font-weight: bold;
  font-size: 12px;
  color: #4E5066;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: center;
  vertical-align:middle;

  font-size: 12px;
  color: #4E5066;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}
tr:hover td {
  background:rgba(102,107,133,0.1);
}
.tbl-head{
  background-color: rgba(255,255,255,0.5);
}
.tbl-content{
  background-color: rgba(255,255,255,0.3);
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
::-webkit-scrollbar {
    width: 6px;
}
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
.write {
    border-radius:10px;
    border: 4px solid #4E5066;
    background-color: #ecbbb4;
    color: #4E5066;
    display: inline-block;
    font-size: 15px;
    font-weight: bold;
    line-height: 24px;
    margin: auto;
    padding: 12px 32px 12px 82px;
    position: relative;
    text-decoration: none;
}

.write .label,
.write .icon-arrow {
    backface-visibility: hidden;
    transform: translateZ(0);
    perspective: 1000;
}

.write .label {
    display: inline-block;
    transition: transform .5s cubic-bezier(0.86, 0, 0.07, 1);
}

.write .icon-arrow {
    fill: #4E5066;
    height: 15px;
    top: 17px;
    transition: transform .5s cubic-bezier(0.86, 0, 0.07, 1), opacity .4s cubic-bezier(0.86, 0, 0.07, 1);
    width: 35px;
}

.write .icon-arrow.before {
    left: 32px;
    margin-right: 15px;
    position: absolute;
    transform-origin: left center;
}

.write .icon-arrow.after {
    margin-left: 15px;
    opacity: 0;
    position: absolute;
    right: 32px;
    transform: translateX(75%) scaleX(0.1);
    transform-origin: right center;
}

.write:hover .label {
    transform: translateX(-52px);
}

.write:hover .icon-arrow.before {
    opacity: 0;
    transform: translateX(-75%) scaleX(0.1);
}

.write:hover .icon-arrow.after {
    opacity: 1;
    transform: translateX(0) scaleX(1);
}

.write:active {
    border-color: #e7615a;
    color: #e7615a;
}

.write:active .icon-arrow {
    fill: #e7615a;
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
  <br>
  <div class="search">
    <div class="select-group">
      <div class="select">
        <select class="form-control" id="cvs_select">
          <option selected value="">모든 편의점</option>
          <option value="GS25">GS25</option>
          <option value="CU">CU</option>
          <option value="세븐일레븐">세븐일레븐</option>
          <option value="이마트">이마트</option>
          <option value="미니스톱">미니스톱</option>
        </select>
      </div>
      <div class="select" style="margin-left: 10%;">
        <select class="form-control" id="item_select">
          <option selected value="">모든 품목</option>
          <option value="식품">식품</option>
          <option value="음료">음료</option>
          <option value="스낵">스낵</option>
          <option value="아이스크림">아이스크림</option>
          <option value="생활용품">생활용품</option>
        </select>
      </div>
      <div class="select" style="margin-left: 10%;">
        <select class="form-control" id="cost_select">
          <option selected value="">모든 가격대</option>
          <option value="5천원대 이하">5천원대 이하</option>
          <option value="1만원대 이하">1만원대 이하</option>
          <option value="2만원대 이하">2만원대 이하</option>
        </select>
      </div>
    </div>

    <div id="cover">
      <div class="tb">
        <div class="td"><input class="search-text" type="text" id="search_text" placeholder="제목 또는 상품명 검색하기" id="search"></div>
        <div class="td" id="s-cover">
          <button  class="search-btn" type="icon" id="search_btn">
            <div id="s-circle"></div>
            <span></span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="contatiner">
    <div class="board">
      <br>
      <br>
      <div class="sort" style="margin-left: 5%; width: 90px">
        <select class="form-control" name="sortby" id="sortby" style="background-color:#f4d6d2; color:#4E5066;">
          <option value="default" selected>최신순</option>;
          <option value="starVal">별점순</option>;
        </select>
      </div>
      <!--<div class="container-fluid ">
        <div class="row" >
          <div class="col-md-2">
          <select class="browser-default custom-select"  name="sortby" id="sortby" >
            <option value="default" selected>최신순</option>;
            <option value="starVal">별점순</option>;
          </select>
          </div>
        </div>
      </div>-->

      <table id="list_table" cellpadding="0" cellspacing="0" border="0">
      </table>
    </div>
  </div>

  <!--<div class = text align="center">
  <button type="button" class="recipe_Btn" onClick="location.href='./review_write.php'">글쓰기</button>
  </div>-->
  <div class = text align="center">
  <a class="write" href="./review_write.php">
      <svg class="icon-arrow before">
          <use xlink:href="#arrow"></use>
      </svg>
      <span class="label">!솔직¡한 리뷰 쓰러가기</span>
      <svg class="icon-arrow after">
          <use xlink:href="#arrow"></use>
      </svg>
  </a>
</div>
  <svg style="display: none;">
    <defs>
      <symbol id="arrow" viewBox="0 0 35 15">
        <title>Arrow</title>
        <path d="M27.172 5L25 2.828 27.828 0 34.9 7.071l-7.07 7.071L25 11.314 27.314 9H0V5h27.172z "/>
      </symbol>
    </defs>
  </svg>

  <footer>
  	<p class="ba2"></p>
  	<p class="fo">
  	&copy; Team10
  	</p>
  </footer>
    <script>
      $(window).on("load resize ", function() {
        var scrollWidth = $('.tbl-content').width() - $('.tbl-content').width();
        $('.tbl-head').css({'padding-right':scrollWidth});
      }).resize();
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </body>
  </html>
