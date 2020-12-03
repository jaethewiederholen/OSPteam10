<!DOCTYPE>
 
<html>
<head>
        <meta charset = 'utf-8'>
</head>
<style>
        table.table{
                border-collapse: separate;
                border-spacing: 1px;
                text-align: left;
                line-height: 1.5;
                border-top: 1px solid #ccc;
                margin : 20px 10px;
        }
        table.table tr {
                width: 50px;
                padding: 10px;
                font-weight: bold;
                vertical-align: top;
                border-bottom: 1px solid #ccc;
        }
        table.table td {
                 width: 100px;
                 padding: 10px;
                 vertical-align: top;
                 border-bottom: 1px solid #ccc;
        }
 
</style>

<body>


        <form method = "post" action = "newproduct_register_action.php">
        <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
                <tr>
                <td height=20 align= center bgcolor=#ccc><font color=white> 상품 등록</font></td>
                </tr>
                <tr>
                <td bgcolor=white>
                <table class = "table">
                        <tr>
                        <td>상품이름</td>
                        <td><input type = text name = "name" size=20> </td>
                        </tr>
 
                        <tr>
                        <td>가격</td>
                        <td><input type = "text" name = "price" size=60></td>
                        </tr>
 
                        <tr>
                        <td>설명</td>
                        <td><textarea name = "content" cols=85 rows=15></textarea></td>
                        </tr>
 
                        <tr>
                        <td>유튜브 리뷰 링크</td>
                        <td><input type = "text" name = "youtube_link" size=50 maxlength=1000></td>
                        </tr>

                        <tr>
                        <td>구매 링크</td>
                        <td><input type = "text" name = "purchase_link" size=50 maxlength=1000></td>
                        </tr>
                 
                        <tr>
                        <td>사진 파일</td>
                        <td><input type = "file" name = "file" ></td>
                        </tr>

                        </table>

                        <center>
                        <input type = "submit" value="등록">
                        </center>
                </td>
                </tr>
        </table>
        </form>
</body>
</html>
