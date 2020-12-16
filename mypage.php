
<!DOCTYPE HTML>
<html lang="ko">
<?php include 'config2.php'?> <!--config.php 삽입-->

<style>
  table{
                border-top: 1px solid #444444;
                border-collapse: collapse;
        }
        tr{
                border-bottom: 1px solid #444444;
                padding: 10px;
        }
        td{
                border-bottom: 1px solid #efefef;
                padding: 10px;
        }
        table .even{
                background: #efefef;
        }
        .text{
                text-align:center;
                padding-top:20px;
                color:#000000
        }
        .text:hover{
                text-decoration: underline;
        }
        a:link {color : #57A0EE; text-decoration:none;}
        a:hover { text-decoration : underline;}

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
margin: 5px 10%;
}
.userinfo{
flex: 3;
margin: 20px 0%;
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

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

        $query2 ="SELECT * from review WHERE id = '$userid'";
        $result2 = mysqli_query($connect, $query2);
        $total_review = mysqli_num_rows($result2);

        echo"내 리뷰 수: $total_review 개<br>";
        echo"내 레피시 수: $total_recipe 개<br>";
        ?>

        <?php
        $level_gage = $total_recipe + $total_review;
        if($total_recipe<1 || $total_review<1) $level = 'LV1';
        else if(1<=$total_recipe && 1<=$total_review) $level = 'LV2';
        else if(2<=$total_recipe && 3<=$total_review) $level = 'LV3';
        else if(3<=$total_recipe && 5<=$total_review) $level = 'LV4';
        echo"레벨: $level";
        ?>

         <button type="button" class="InfoBtn" onclick="window.open('./levelinfo.php', 'levelinfo', 'width=300, height=250')"> 등업기준 </button>

        <!--비번변경 -->
        <form method="post" action="password_update.php">
        비밀번호 : <input type="password" size="10" name="newpw" placeholder="****">
        <input type="submit" value="변경하기" />
        </form>
        <br>
        </div>
      </div>

      <div class="graph">
      <br><br><br><b>나의 편의점 이용률</b><br><br>
      <?php
      $query ="SELECT id, cvs, COUNT('title')as cnt FROM review WHERE id = '$userid' GROUP BY cvs ORDER BY cnt DESC";
      $result = mysqli_query($connect, $query);
      if($result){
       while ($row=mysqli_fetch_array($result)){
         $cvs=$row[1];
         $cnt=$row[2];
         echo $cvs;  echo $cnt."개<br>";
       }
   }
      ?>

<?php
//header("Content-Type: text/html; charset=UTF-8");
$connect = mysqli_connect("localhost","team10","team10","team10") or die ("connect fail");
$query ="SELECT cvs, COUNT('title')as cnt FROM review WHERE id = '$userid' GROUP BY cvs";
$result = mysqli_query($connect, $query);
$json=[];
$json2=[];
while($row=mysqli_fetch_assoc($result)){
    extract($row);
    $json[]=$cvs;
    $json2[]= (int)$cnt;
}


?>
<div style="width:800px">
    <canvas id="myChart"></canvas>
</div>

<script>
// 우선 컨텍스트를 가져옵니다.
var ctx = document.getElementById("myChart").getContext('2d');
/*
- Chart를 생성하면서,
- ctx를 첫번째 argument로 넘겨주고,
- 두번째 argument로 그림을 그릴때 필요한 요소들을 모두 넘겨줍니다.
*/
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode($json);?>,
        datasets: [{
            label: '편의점 이용률 by 리뷰수',
            data: <?php echo json_encode($json2);?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'

            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'

            ],
            borderWidth: 1
        }]
    },
    options: {
        maintainAspectRatio: true, // default value. false일 경우 포함된 div의 크기에 맞춰서 그려짐.
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>


      </div>
    </div>

    <div id="tab2" class="tabcontent" style="display: none;">
    <center><br><b>마이 레시피 LIST</b><br>
    <?php
        $connect = mysqli_connect("localhost","team10","team10","team10") or die ("connect fail");
        $query ="SELECT * from recipe WHERE id = '$userid'";
        $result = mysqli_query($connect, $query);
        $total = mysqli_num_rows($result);
        ?>
        <table align = center>
        <thead align = "center">
        <tr>
        <td width = "50" align="center">번호</td>
        <td width = "500" align = "center">제목</td>
        <td width = "200" align = "center">날짜</td>
        </tr>
        </thead>
        <tbody>
        <?php
       while($rows = mysqli_fetch_assoc($result)){ ?>
        <td width = "50" align = "center"><?php echo $total?></td>
        <td width = "500" align = "center"><a href = "recipe_view_privacy.php?number=<?php echo $rows['number']?>"><?php echo $rows['title']?></a><br>
        <td width = "200" align = "center"><?php echo $rows['date']?></td>
        </tr>
<?php
        $total--;
        }
?>
       </tbody>
       </table>


    <br><br><b>마이 리뷰 LIST</b><br>
    <?php
       $query2 ="SELECT * from review WHERE id = '$userid'";
       $result2 = mysqli_query($connect, $query2);
       $total2 = mysqli_num_rows($result2);
       ?>
        <table align = center>
        <thead align = "center">
        <tr>
        <td width = "50" align="center">번호</td>
        <td width = "500" align = "center">제목</td>
        <td width = "200" align = "center">날짜</td>
        </tr>
        </thead>
        <tbody>
        <?php
       while($rows = mysqli_fetch_assoc($result2)){ ?>
        <td width = "50" align = "center"><?php echo $total2?></td>
        <td width = "500" align = "center"><a href = "review_read.php?num=<?php echo $rows['number']?>"><?php echo $rows['title']?></a><br>
        <td width = "200" align = "center"><?php echo $rows['date']?></td>
        </tr>
<?php
        $total2--;
        }
?>
       </tbody>
       </table>


    </div>

    <div id="tab3" class="tabcontent" style="display: none;">
  <p>
  <?php
   $query ="SELECT * from temp WHERE session_id = '$userid'";
   $result = mysqli_query($connect, $query);
   $total = mysqli_num_rows($result);
   ?>
   <table align = center>
   <thead align = "center">
   <tr>
   <td width = "200" align="center">제품명</td>
   <td width = "50" align = "center">판매처</td>
   <td width = "50" align = "center">가격</td>
   <td width = "800" align = "center">설명</td>
   </tr>
   </thead>
   <tbody>
   <?php
  while($rows = mysqli_fetch_assoc($result)){ ?>
   <td width = "200" align = "center"><?php echo $rows['name']?></td>
   <td width = "50" align = "center"><?php echo $rows['chain']?></td>
   <td width = "50" align = "center"><?php echo $rows['price']?></td>
   <td width = "800" align = "center"><?php echo $rows['content']?></td>
   </tr>
<?php
   $total--;
   }
?>
  </tbody>
  </table>
    </div>

  </div>

<!-- opentab 함수 -->


<footer>
	<p class="ba2"></p>
	<p class="fo">
	&copy; Team10
	</p>
</footer>
</body>
</html>
