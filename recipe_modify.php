<?php    
                $connect = mysqli_connect("127.0.0.1","team10","team10","team10");
                $number = $_GET['number'];
                $query = "SELECT * FROM recipe WHERE number=$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
 
                $title = $rows['title'];
                $ingredient = $rows['ingredient'];
                $content = $rows['content'];
                $usrid = $rows['id'];
 
                session_start();
 
 
                $URL = "./mypage.php"; ?>
 

                <form method = "post" action = "recipe_modify_action.php">
                <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
                <tr>
                <td height=20 align= center bgcolor=#ccc><font color=white> 레시피수정</font></td>
                </tr>
                <tr>
                <td bgcolor=white>
                <table class = "table2">
                <tr>
                        <td>작성자</td>
                        <td><input type="hidden" name="id" value="<?=$_SESSION['userid']?>"><?=$_SESSION['userid']?></td>
                        </tr>
 
                        <tr>
                        <td>제목</td>
                        <td><input type = text name = title size=60 value="<?=$title?>"></td>
                        </tr>

                        <tr>
                        <td>재료</td>
                        <td><input type = text name = ingredient size=60 value="<?=$ingredient?>"></td>
                        </tr>
 
                        <tr>
                        <td>내용</td>
                        <td><textarea name = content cols=85 rows=15><?=$content?></textarea></td>
                        </tr>
 
                        </table>
 
                        <center>
                        <input type="hidden" name="number" value="<?=$number?>">
                        <input type = "submit" value="수정완료">
                        </center>
                </td>
                </tr>
        </table>



