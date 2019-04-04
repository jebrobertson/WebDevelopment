<!--
	name: Jebediah Robertson
	pawprint: jsr8d3
	date: 4/4/19
-->
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

if(!isset($_GET['myFunction'])){
	 echo "<h1>Welcome to my first php app</h1>";
	 exit();
}

$fun = $_GET['myFunction'];
if(strcmp($fun, "sayHi") == 0){
 echo "<h1>You are using function:sayHi</h1>";
 if(isset($_GET['myName']))
	sayHi($_GET['myName']);
 else 
	echo "<p>sayHi needs the value 'myName' set<p>";
}

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
  if(isset($_GET['x']))
	hamming($_GET['x']);
 else 
	echo "<p>hammingNumbers needs the value 'x' set<p>";
 
}
else if(strcmp($fun, "hammingSequence") == 0){
 echo "<h1>You are using function:hammingSeq</h1>";
 if(isset($_GET['y']))
	hammingSequence($_GET['y']);
 else
	echo "<p>hammingSequence needs the value 'y' set<p>";
}

}
else if(strcmp($fun, "anagram") == 0){
 echo "<h1>You are using function:Anagram</h1>";
 anagram($_GET['a'], $_GET['b']);
 if(isset($_GET['a']) && isset$_GET['b'])
	anagram($_GET['a'], $_GET['b']););
 else
	echo "<p>anagram needs the value 'a' and 'b' set<p>";
}
else {
 echo "<h1>Welcome to my first php app</h1>";
}
?>

</body>
</html>
