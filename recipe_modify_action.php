<?php
    $connect = mysqli_connect("127.0.0.1","team10","team10","team10");
    $number = $_POST['number'];
    $title = $_POST['title'];
    $ingredient = $_POST['ingredient'];
    $content = $_POST['content'];
    $date = date('Y-m-d H:i:s');
    $query = "UPDATE recipe set title='$title', ingredient='$ingredient', content='$content', date='$date' WHERE number=$number";
    $result = $connect->query($query);
    if($result) {
?>
        <script>
            alert("수정되었습니다.");
            location.replace("./recipe_view_privacy.php?number=<?=$number?>");
        </script>
<?php    }
    else {
        echo "fail";
    }
?>
