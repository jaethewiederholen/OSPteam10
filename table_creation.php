<?php
$mysqli=mysqli_connect("127.0.0.1","team10","team10","team10");
if(mysqli_connect_errno()){
  printf("Connect failed: %s\n", mysqli_connect_errno());
  exit();
}
else{
  $sql="CREATE table member(
    id varchar(16) not null,
    pw varchar(20) not null,
    email varchar(50) not null,
    date datetime not null,
    permit tinyint(3) unsigned)";

  $res=mysqli_query($mysqli,$sql1);
  if($res===TRUE){
    echo "Table testTable successfully created.";
  }
  else{
    printf("Could not create table: %s\n", mysqli_error($mysqli));
  }

  $sql1="CREATE table recipe(
    number int unsigned not null primary key auto_increment,
    title varchar(150) not null,
    content text not null,
    id varchar(20) not null,
    password varchar(20) not null,
    date datetime not null,
    hit int unsigned not null default 0)";

  $res=mysqli_query($mysqli,$sql1);
  if($res===TRUE){
    echo "Table testTable successfully created.";
  }
  else{
    printf("Could not create table: %s\n", mysqli_error($mysqli));
  }

  $sql2="CREATE table newproduct(
   idx int unsigned not null primary key auto_increment,
   name varchar(20) not null,
   content mediumtext not null,
   price int(6) not null,
   purchase_link varchar(1000) not null,
   youtube_link varchar(1000) not null,
   date datetime not null,
   file varchar(100) not null
  )";

  $res=mysqli_query($mysqli,$sql2);
  if($res===TRUE){
    echo "Table testTable successfully created.";
  }
  else{
    printf("Could not create table: %s\n", mysqli_error($mysqli));
  }

  mysqli_close($mysqli);
}
?>