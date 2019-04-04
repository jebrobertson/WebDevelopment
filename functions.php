<?php

function sayHi($name){
  echo "<p>Hi " . $name . ", What can I do for you?</p>";
}

function showPic(){
 echo '<img src="cool.gif" alt="Cool Gif Bro">';
}

function showList(){
 $file = fopen("list.txt", "r") or die("File could not be opened");
 echo '<ul>';
 while(!feof($file)){
  echo '<li>' . fgets($file) . '</li>';
 }
 echo '</ul>';
 $fclose($file);
}

function isRegularNumber($num){

 while($num != 1){
  if($num % 2 == 0){
   $num /= 2;
   continue;
  }
  if($num % 3 == 0){
   $num /= 3;
   continue;
  }
  if($num % 5 == 0){
   $num /= 5;
   continue;
  }
  return false;
 }
 return true;
}

function hamming($x){
 if(isRegularNumber($x))
  echo '<p>' . $x . " is a Hamming Number</p>";
 else
  echo '<p>' . $x . ' is not a Hamming Number</p>';
}

function hammingSequence($y){
 if(!isRegularNumber($y)){
  echo '<p>' . $y . ' is not a Hamming Number</p>';
  return;
 }
 echo "<p>";
 $index = 0;
 $array = array(1);
 do{
  
  $cur = $array[$index];
  
  if(2*$cur < $y){
   array_push($array, 2*$cur);
  }
  
  if(3*$cur < $y){
   array_push($array, 3*$cur);
  }
  
  if(5*$cur < $y){
   array_push($array, 5*$cur);
  }


  $array = array_unique($array);
  sort($array);
  $index = $index + 1;
}while($index < count($array));

 
 foreach($array as $val){
  echo $val  . ", ";
 }
 echo $y . "</p>";
}

function testIfAnagrams($a, $b)
{
 if(strlen($a) != strlen($b))
  return false;
 while(strlen($a) != 0){
  $pos = strpos($b, $a[0]);
   
  if($pos === FALSE)
   return FALSE;
  $a = substr($a, 1);
  $b = substr($b, 0, $pos) . substr($b, $pos+1);
  
 }
 return true;
}

function anagram($a, $b){

 if(testIfAnagrams($a, $b))
  echo $a . " and " . $b . " are anagrams";
 else
  echo $a . " and " . $b . " are not anagrams";
}

?>
