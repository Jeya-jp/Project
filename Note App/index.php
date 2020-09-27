<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

    
</head>
<body> 
<header><h1>Note App</h1></header>
<div id="notes">
 <div id="box">
     
 <form action="php/sample.php" autocomplete="off" method="POST">
 <h3 id="boxtext">Title</h3>   <center>
 <input type="text" name ="title" required><br> </center>
 <h4 id="boxtext">Content</h4>
 <center>
 <textarea name="content" required></textarea><br><br>
 <input type="submit" onclick="insert();"></center><br><br>
 <!-- <input type="submit" onclick="display();"> -->

 </form>
 </div>
 </div>

 <footer>
<center>
    <span> sachinabs.js@gmail.com </span><br>
    <span> jeyaparvathi.jp@gmail.com</span>
</center>

</footer>


<?php
    function display()
    {
        class DB extends SQLite3
{
    function __construct()
    {
        $this->open('DB/MyDBs.db');
    }
}
$db=new DB();
        $fetch = "SELECT * FROM noteapp";
    $result = $db -> Query($fetch);
   echo "<div class=Note>";
    while($row = $result -> fetchArray(SQLITE3_ASSOC))
    {
        $ftitle = $row['title'];
        $fcontent = $row['content'];
        echo "<center><div class=Title1> <span class=mytitle>",$ftitle,"</span><br>";
        echo "<span class=mycontent>",$fcontent,"</span></div></center>";
    }
    echo "</div>";
  
    }
        

display();

?>












   
    <!-- <script src="app.js"></script> -->
</body>
</html>