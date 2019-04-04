<!DOCTYPE html>
<html lang="en">
<head>
  <title>Challenge 8</title>
  <meta charset="utf-8">
  <link href="index.css" rel="stylesheet">
</head>
<body>

<nav>
        <ul class="navContainer">
            <li><a href="Challenge%201/Jsr8d3SettingUp.html">Challenge 1</a> </li>
            <li><a href="Challenge%202/Jsr8d3HNavbarBio.html">Challenge 2</a> </li>
            <li><a href="Challenge%203/Jsr8d3Columns.html">Challenge 3</a> </li>
            <li><a href="Challenge%204/Jsr8d3Tables.html">Challenge 4</a> </li>
            <li><a href="Challenge%206/Jsr8d3Editor.html">Challenge 6</a> </li>
            <li><a href="/Challenge 7/index.html">Challenge 7</a></li>
			<li><a href="../index.php" class="active">Challenge 8</a></li>
		</ul>
</nav>

<?php
include 'functions.php';
$fun = $_GET['myFunction'];
if(strcmp($fun, "sayHi") == 0){
 echo "<h1>You are using function:sayHi</h1>";
 sayHi($_GET['myName']);
}
else if(strcmp($fun, "showPic") == 0){
 echo "<h1>You are using function:showPic</h1>";
 showPic();
}
else if(strcmp($fun, "showList") == 0){
 echo "<h1>You are using function:showList</h1>";
 showList();
}
else if(strcmp($fun, "hammingNumbers") == 0){
 echo "<h1>You are using function:hammingNumbers</h1>";
 hamming($_GET['x']);
}
else if(strcmp($fun, "hammingSequence") == 0){
 echo "<h1>You are using function:hammingSeq</h1>";
 hammingSequence($_GET['y']);
}
else if(strcmp($fun, "anagram") == 0){
 echo "<h1>You are using function:Anagram</h1>";
 anagram($_GET['a'], $_GET['b']);
}
else {
 echo "<h1>Welcome to my first php app</h1>";
}
?>

</body>
</html>
