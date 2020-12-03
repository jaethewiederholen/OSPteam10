<?php
    $connect = mysqli_connect("127.0.0.1","team10","team10","team10") or die ("connect fail");
    $number = $_POST[number];
    $title = $_POST[title];
    $content = $_POST[content];
    $date = date('Y-m-d H:i:s');
    $query = "UPDATE recipe SET title='$title', content='$content', date='$date' WHERE number=$number";
    $result = mysqli_query($connect, $query);
    if($result) {
?>
        <script>
            alert("수정되었습니다.");
            location.replace("./recipe_view?number=<?=$number?>");
        </script>
<?php    }
    else {
        echo "fail";
    }
?>
