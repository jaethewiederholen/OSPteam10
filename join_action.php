<?php
 
        $connect = mysqli_connect("127.0.0.1","team10","team10","team10") or die("fail");
 
        $id=$_POST['id'];
        $pw=$_POST['pw'];
        $email=$_POST['email'];
        $date = date('Y-m-d H:i:s');
 
        //입력받은 데이터를 DB에 저장
        $query = "INSERT INTO member (id, pw, email, date, permit) VALUES ('$id', '$pw', '$email', '$date', 0)";
        $result = mysqli_query($connect, $query);
 
        //저장이 됬다면 (result = true) 가입 완료
        if($result) {
        ?>      <script>
                alert('가입되었습니다.');
                location.replace("./login.php");
                </script>
 
<?php   }
        else{
?>              <script>
                        alert("fail");
                </script>
<?php   }
 
        mysqli_close($connect);
?>
