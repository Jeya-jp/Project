<?php


$title=$_POST["title"];
$content=$_POST["content"];
// echo $content;
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('../DB/MyDBs.db');
    }
}
$db=new MyDB();
$var = (String)$content;
$sql="INSERT INTO noteapp(title,content) VALUES('$title','$var')";
$result=$db->Query($sql);

echo "<script>window.location.href='../index.php';</script>";
        



?>