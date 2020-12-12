<?php include 'config.php'?> <!--config.php 삽입-->
<?php
header("Content-Type: text/html; charset=UTF-8");
$connect = mysqli_connect("127.0.0.1","team10","team10","team10") or die ("connect fail");
$query ="SELECT cvs, COUNT('title')as cnt FROM review WHERE id = '$userid' GROUP BY cvs";
$result = mysqli_query($connect, $query);
$json=[];
$json2=[];
while($row=mysqli_fetch_assoc($result)){
    extract($row);
    $json[]=$cvs;
    $json2[]= (int)$cnt;
}
echo json_encode($json);
echo json_encode($json2);

?>


<html lang='kor'>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>

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
    type: 'radar',
    data: {
        labels: ['gs','cu','min','emart','e'],
        datasets: [{
            label: '# of Votes',
            data: [20,15,11,14,19],
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
    },
    ticks: {
      beginAtZero: true,
      min: 0,
      max: 100,
      stepSize: 20
    }
});
</script>
