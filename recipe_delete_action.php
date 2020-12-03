<?php    
                $connect = mysqli_connect("127.0.0.1","team10","team10","team10") or die("connect fail");
                $number = $_GET['number'];

                $query = "SELECT title, content, date, id FROM recipe WHERE number=$number;";
                $result = mysqli_query($connect, $query);
                $rows = mysqli_fetch_assoc($result);
 
                $usrid = $rows['id'];

                session_start();
                $URL = "./recipe_board.php";

                if(!isset($_SESSION['userid'])) {
        ?>              <script>
                                alert("권한이 없습니다.");
                                location.replace("<?php echo $URL?>");
                        </script>
        <?php   }
                else if($_SESSION['userid']==$usrid) {
                    $query = "DELETE FROM recipe WHERE number =$number";
                    $result = mysqli_query($connect, $query);
                    if($result) {
        ?>
                        <script>
                                alert("삭제되었습니다.");
                                location.replace("<?php echo $URL?>");
                        </script>
        <?php       }
                    else {
                        echo "fail";
                    }
        ?>
        <?php   }
                else {
        ?>              <script>
                                alert("권한이 없습니다.");
                                location.replace("<?php echo $URL?>");
                        </script>
        <?php   }
        ?>
