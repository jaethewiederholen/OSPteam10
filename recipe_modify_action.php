
<?php

ini_set("display_errors", "1");
$uploaddir = 'C:\xampp\htdocs\osp\\';
$uploadfile = $uploaddir . basename($_FILES['img']['name']);
move_uploaded_file($_FILES['img']['tmp_name'],$uploadfile);

    $connect = mysqli_connect("localhost","team10","team10","team10");
    $number = $_POST['number'];
    $title = $_POST['title'];
    $ingredient = $_POST['ingredient'];
    $content = $_POST['content'];
    $date = date('Y-m-d H:i:s');
    $image = basename($_FILES['img']['name']);
    $query = "UPDATE recipe set title='$title', ingredient='$ingredient', content='$content', date='$date', file='$image' WHERE number=$number";
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
