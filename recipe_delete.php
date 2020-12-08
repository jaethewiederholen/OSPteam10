<?php    
                $connect = mysqli_connect("127.0.0.1","team10","team10","team10");
                $number = $_GET['number'];
                $query = "DELETE from recipe where number=$number";
                $result = $connect->query($query);

                $URL = "./mypage.php";
 
                if($result){?>
                <script>
                                alert("삭제되었습니다.");
                                location.replace("<?php echo $URL?>");
                </script>
        <?php
                }
        ?>

