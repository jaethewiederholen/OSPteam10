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
        <form method = "post" action = "newproduct_register_action.php" enctype="multipart/form-data">
        <table  style="padding-top:50px" align = center width=900 border=0 cellpadding=2 >
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
                        <td>품목</td>
                        <td><select name = "type">
                        <option value="식품">식품</option>
                        <option value="음료">음료</option>    
                        <option value="스낵">스낵</option>  
                        <option value="술">술</option> 
                        <option value="생활용품">생활용품</option>     
                        </td>
                        </tr>

                        <tr>
                        <td>구매점</td>
                        <td><select name = "chain">
                        <option value="CU">CU</option>
                        <option value="GS25">GS25</option>    
                        <option value="7ELEVEN">7ELEVEN</option>  
                        <option value="이마트">이마트</option> 
                        <option value="공용">공용</option>     
                        </td>
                        </tr>

                        <tr>
                        <td>가격</td>
                        <td><input type = "text" name = "price" size=20></td>
                        </tr>
 
                        <tr>
                        <td>설명</td>
                        <td><textarea name = "content" cols=85 rows=15></textarea></td>
                        </tr>
 
                        <tr>
                        <td>리뷰 링크</td>
                        <td><input type = "text" name = "review_link" size=50 maxlength=1000></td>
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