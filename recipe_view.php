<!DOCTYPE html>
<html>
<head>
        <meta charset = 'utf-8'>
</head>
<style>
.view_table {
border: 1px solid #444444;
margin-top: 30px;
}
.view_title {
height: 30px;
text-align: center;
background-color: #cccccc;
color: white;
width: 1000px;
}
.view_id {
text-align: center;
background-color: #EEEEEE;
width: 30px;
}
.view_id2 {
background-color: white;
width: 60px;
}
.view_hit {
background-color: #EEEEEE;
width: 30px;
text-align: center;
}
.view_hit2 {
background-color: white;
width: 60px;
}
.view_content {
padding-top: 20px;
border-top: 1px solid #444444;
height: 500px;
}
.view_btn {
width: 700px;
height: 200px;
text-align: center;
margin: auto;
margin-top: 50px;
}
.view_btn1 {
height: 50px;
width: 100px;
font-size: 20px;
text-align: center;
background-color: white;
border: 2px solid black;
border-radius: 10px;
}
.view_comment_input {
width: 700px;
height: 500px;
text-align: center;
margin: auto;
}
.view_text3 {
font-weight: bold;
float: left;
margin-left: 20px;
}
.view_com_id {
width: 100px;
}
.view_comment {
width: 500px;
}
</style>
<body>
<?php
                $connect = mysqli_connect("127.0.0.1","team10","team10","team10");
                $number = $_GET['number'];
                session_start();
                $query = "SELECT title, content, date, hit, id FROM recipe WHERE number =$number;";
                $result = mysqli_query($connect, $query);
                $rows = mysqli_fetch_assoc($result);
                
                $hit = "UPDATE recipe SET hit=hit+1 WHERE number=$number";
                $connect->query($hit);
        ?>
 
        <table class="view_table" align=center>
        <tr>
                <td colspan="4" class="view_title"><?php echo $rows['title']?></td>
        </tr>
        <tr>
                <td class="view_id">작성자</td>
                <td class="view_id2"><?php echo $rows['id']?></td>

                <td class="view_hit">조회수</td>
                <td class="view_hit2"><?php echo $rows['hit']?></td>
        </tr>
 
        <tr>
                <td colspan="4" class="view_content" valign="top">
                <?php echo $rows['content']?></td>
        </tr>
        </table>
 
        <!-- MODIFY & DELETE -->
        <div class="view_btn">
                <button class="view_btn1" onclick="location.href='./recipe_board.php'">목록으로</button>
                <button class="view_btn1" onclick="location.href='./recipe_modify.php?number=<?=$number?>?>'">수정</button>
                <button class="view_btn1" onclick="location.href='./recipe_delete_action.php?number=<?=$number?>?>'">삭제</button>
        </div>
</body>
</html>

