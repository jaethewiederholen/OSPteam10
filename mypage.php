
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
height: 50px;
border: none;
outline: none;
font-size: 16px;
font-weight: bold;
color: #7f7f7f;
background-color: #fff;
}
.tablinks:hover {
  background:rgba(102,107,133,0.1);
  color: #000;
}
.tablinks.active {
color: #000;
background-color: #F7FFF2;
border-top: solid 1px black;
}
.info{
width: 90%;
height: 100px;
display: flex;
margin: 20px auto;
margin-bottom: 80px;
}
.userimage{
flex: 1;
margin: 0px 5%;
position: relative;
top: 52px;
}
.userinfo{
flex: 3;
margin: 0px 5%;
}
.btn{
    height:20px;
    width:70px;
}
.graph{
width: 90%;
border-top: solid 1px #7d9f68;
margin: 20px auto;
}
.graph_title{
  margin: 20px auto;
  margin-top: 50px;
  font-size: 25px;
  color:#7d9f68;
  font-weight: bold;
  text-align: center;
}
.graph_content{
  display: flex;
}
.material-icons {
    margin: -1px 5px 0 0;
    vertical-align: middle;
}

td {
    padding: 10px;
  }
:root{
  --colour-black: rgba(30, 30, 30, 0.6);
  --colour-white: #ffffff;
}
.btn_1 {
  color: var(--colour-black);
  --button: #d9f1ca;
  --button-hover: hsl(0, 0%, 89%);
  --button-active:  hsl(0, 0%, 69%);
  --button-visited: hsl(0, 0%, 89%);
  --button-colour: var(--colour-black);
  --button-border: var(--colour-black);
  height:auto;
  width:100px;
  padding: .5rem 1.2rem;
  color: var(--button-colour);
  font-weight: 500;
  font-size: 12px;
  transition: all 0.3s ease-in-out;
  background: var(--button);
  border: solid 1px var(--button-border);
  box-shadow: inset 0 0 0 2px var(--colour-white);
  margin-left: 6em;
}

.btn:hover {
  text-decoration: underline;
  background: var(--button-hover);
  box-shadow: inset 0 0 0 4px var(--colour-white);
}
.btn:active {
  background: var(--button-active);
}
.btn:visited {
  background: var(--button-visited);
}
.title{
  margin: 20px auto;
  font-size: 25px;
  color:#7d9f68;
  font-weight: bold;
  text-align: center;
}
.table_1{
  margin:0 auto;
  text-align: center;
}
.title_link:hover{
  font-weight: bold;
}
</style>


<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>PyeonReview_마이페이지</title>

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
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
      <button class="tablinks active" onclick="openTab(event, 'tab1')"><i class="material-icons">face</i>내 정보</button>
      <button class="tablinks" onclick="openTab(event, 'tab2')"><i class="material-icons">comment</i>내 리뷰</button>
      <button class="tablinks" onclick="openTab(event, 'tab3')"><i class="material-icons">favorite</i>내 찜목록</button>
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
      <div class="info" style="height:auto">
        <div class="userimage">
          <?php
          $connect = mysqli_connect("localhost","team10","team10","team10") or die ("connect fail");
          $query ="SELECT * from recipe WHERE id = '$userid'";
          $result = mysqli_query($connect, $query);
          $total_recipe = mysqli_num_rows($result);

          $query2 ="SELECT * from review WHERE id = '$userid'";
          $result2 = mysqli_query($connect, $query2);
          $total_review = mysqli_num_rows($result2);
          if($total_recipe<1 || $total_review<1) echo "<img src='lv1.png' width=120 height=120/>";
          else if(1<=$total_recipe && 1<=$total_review) echo "<img src='lv2.png' width=120 height=120/>";
          else if(2<=$total_recipe && 3<=$total_review) echo "<img src='lv3.png' width=120 height=120/>";
          else if(3<=$total_recipe && 5<=$total_review) echo "<img src='lv4.png' width=120 height=120/>";

        ?>
         <!--<img src="user.png" width=120 height=120>-->
         <!--<input type="file" name="img" id="imageFileOpenInput" accept="image/*">-->
        </div>
        <div class="userinfo">
          <table>
            <tbody>
              <tr>
                <td>아이디 :</td><td><?=$userid?></td>
              </tr>
              <?php
              $connect = mysqli_connect("localhost","team10","team10","team10") or die ("connect fail");
              $query ="SELECT * from recipe WHERE id = '$userid'";
              $result = mysqli_query($connect, $query);
              $total_recipe = mysqli_num_rows($result);

              $query2 ="SELECT * from review WHERE id = '$userid'";
              $result2 = mysqli_query($connect, $query2);
              $total_review = mysqli_num_rows($result2);

              //echo"내 리뷰 수: $total_review 개<br>";
              //echo"내 레피시 수: $total_recipe 개<br>";
              ?>
                <td>내 리뷰 수 :</td><td><?=$total_review?> 개</td>
              </tr>
              <tr>
                <td>내 레시피 수 :</td><td><?=$total_recipe?> 개</td>
              </tr>
              <?php
              $level_gage = $total_recipe + $total_review;
              if($total_recipe<1 || $total_review<1) $level = 'LV1';
              else if(1<=$total_recipe && 1<=$total_review) $level = 'LV2';
              else if(2<=$total_recipe && 3<=$total_review) $level = 'LV3';
              else if(3<=$total_recipe && 5<=$total_review) $level = 'LV4';
              //echo"레벨: $level";
              ?>
              <tr>
                <td>내 레벨 :</td><td><?=$level?></td><td><button type="button" style="height:auto"class="btn_1" onclick="window.open('./levelinfo.php', 'levelinfo', 'width=400, height=350')"> 등업기준 </button></td>
              </tr>
              <tr>
                <form method="post" action="password_update.php">
                <td>비밀번호 : </td><td><input type="password" size="10" name="newpw" placeholder="****"></td><td><input class="btn_1" type="submit" value="변경하기" /></td></form>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="graph">
        <div class="graph_title">
        나의 편의점 이용률
        </div>
        <div class="graph_content">
          <div style="position: relative; top: 150px;">
            <table>
          <?php
          $query ="SELECT id, cvs, COUNT('title')as cnt FROM review WHERE id = '$userid' GROUP BY cvs ORDER BY cnt DESC";
          $result = mysqli_query($connect, $query);
          if($result){
           while ($row=mysqli_fetch_array($result)){
             $cvs=$row[1];
             $cnt=$row[2];
             ?><tr><td style="font-weight:bold;"><?php echo $cvs;?></td><td><?php echo $cnt;?>개</td></tr><?php
           }
          }
          ?></table>
          <script>

          </script>
          <table id="graph_table" cellpadding="0" cellspacing="0" border="0">
          </table>
 </div>

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
<div style="width:800px; margin: 0 auto;">
    <canvas id="myChart"></canvas>
</div>
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
      <div class="title">마이 레시피 LIST</div>
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

      <div style="border-top: solid 1px #7d9f68;margin: 20px auto;">
      <div class="title" style="margin-top: 50px;">마이 리뷰 LIST</div>
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
    </div>

    <div id="tab3" class="tabcontent" style="display: none;">
      <div class="title">마이 장바구니 LIST</div>

      <?php
       $query ="SELECT * from temp WHERE session_id = '$userid'";
       $result = mysqli_query($connect, $query);
       $total = mysqli_num_rows($result);
            while($rows = mysqli_fetch_assoc($result)){
              ?>
               <table class="table_1" style="background: #fff; border-radius: 10px; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1); flex:1;width:300px;">
                 <tr><td colspan="2" style="font-size:18px; font-weight:bold;"><i class="material-icons" style="color:#e495b3">favorite</i><?php echo $rows['name']?><i class="material-icons" style="color:#e495b3">favorite</i></td></tr>
                 <tr><td><?php echo $rows['chain']?></td><td><?php echo $rows['price']?>원</td></tr>
                 <tr style="height:100px; vertical-align:top;"><td colspan="2"><?php echo $rows['content']?></td></tr>
               </table><?php
              $total--;
            }
      ?>
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
