<?php
 
        session_start();
 
        $connect = mysqli_connect("127.0.0.1","team10","team10","team10") or die("fail");
 
        //입력 받은 id와 password
        $id=$_POST['id'];
        $pw=$_POST['pw'];
 
        //아이디 검사
        $query = "SELECT * FROM member WHERE id='$id'";
        $result = mysqli_query($connect, $query);
 
        //아이디 있으면 비밀번호 검사
        if(mysqli_num_rows($result)==1) {
 
                $row=mysqli_fetch_assoc($result);
 
                //비밀번호가 맞다면 세션 생성
                if($row['pw']==$pw){
                        $_SESSION['userid']=$id;
                        if(isset($_SESSION['userid'])){
                        ?>      <script>
                                        alert("로그인 되었습니다.");
                                        location.replace("./recipe_board.php");
                                </script>
<?php
                        }
                        else{
                                echo "session fail";
                        }
                }
 
                else {
        ?>              <script>
                                alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                                history.back();
                        </script>
        <?php
                }
 
        }
 
        else{
?>          <script>
                alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                history.back();
            </script>
<?php
        }
 
?>
