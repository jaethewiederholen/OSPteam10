<html lang="ko">
<head>
<meta charset="utf-8">
</head>
<?php    
                $name = $_POST['name'];  
                $type = $_POST['type'];  
                $chain = $_POST['chain'];                  
                $price = $_POST['price'];                                          
                $content = $_POST['content']; 
                $review_link = $_POST['review_link'];
                $purchase_link = $_POST['purchase_link'];             
                $date = date('Y-m-d H:i:s');     

                $tmpfile =  $_FILES['file']['tmp_name'];
                $o_name = $_FILES['file']['name'];
                $filename = iconv("UTF-8", "EUC-KR",$_FILES['file']['name']);
                $folder = "../../upload/".$filename;
                move_uploaded_file($tmpfile,$folder);

                $URL = './newproduct_view.php';               
 
                $connect = mysqli_connect("127.0.0.1","team10","team10","team10") or die("fail");

                $query1 = "SELECT name FROM newproduct WHERE name='$name'";
                $result1 = mysqli_query($connect, $query1);
                $exist = mysqli_num_rows($result1);
                if($exist>0){
                        echo "<script> alert('이미 등록된 상품입니다.'); </script>";
                        echo "<script> window.history.back(); </script>";
                        exit();
                }

                $query2 = "INSERT INTO newproduct(idx, name, chain, content, price, review_link, purchase_link, date, file, type) VALUES (null, '$name', '$chain','$content', '$price', '$review_link', '$purchase_link', '$date', '$o_name', '$type')";
                $result1 = mysqli_query($connect, $query2);
                if($result1){
?>                  <script>
                        alert("<?php echo "신상품이 등록되었습니다."?>");
                        location.replace("<?php echo $URL?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }
                mysqli_close($connect);
?>