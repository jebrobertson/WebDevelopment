<!DOCTYPE html>
<html lang="en">
<head>
  <title>Challenge 8</title>
  <meta charset="utf-8">
  <link href="challenge8.css" rel="stylesheet">
</head>
<body>

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
