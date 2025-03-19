<?php

//find string length
$str = "asdf12312!@#!@ asdf a 1223 !@#";
echo "<br>";
var_dump($str);
echo "<br>";
echo strlen($str);
'sadf!@321';

echo "<br>";


//find string position
echo strpos("TOPS Technology","Technology"); 
echo "<br>";
echo addslashes("TOPS'' Technology");

$str = addcslashes("Hello World! t","t");
echo($str); 



echo "<br>";

$str = "Who's Peter Griffin?";
echo $str . " This is not safe in a database query.<br>";

echo addslashes($str) . " This is safe in a database query.";


echo "<br>=============== chunk split ============= <br>";
$str = "Hello world!";
echo chunk_split($str,4,".");
echo "<br>";
$arr = array('tushar','abhi','jignesh','lalit','komal');
echo "<pre>";
print_r(implode('.',$arr));

echo "<br>";

echo $link= '<a href="link.com">Click here</a>';
echo htmlentities($link);
echo "<br>";

echo $str = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';
echo "<br>";
echo html_entity_decode($str);


echo "<br> ============ addslashes ==============<br>";
$String = "This Is 'the' string";
echo addslashes($String);

echo "<br> ============ String ==============<br>";
echo $StringForExplode = "Welcome to TOPS Technology";

echo "<br> ============ explode ==============<br>";
$strtoarray = explode(' ',$StringForExplode);
echo "<pre>";
print_r($strtoarray);

echo "<br> ============ implode ==============<br>";

$HobbyArray = array('Cricket','Football','Music','Reading');
print_r($HobbyArray);
echo $HobbyArray[0].'<br>';
echo $HobbyArray[1].'<br>';
echo $HobbyArray[2].'<br>';
echo $HobbyArray[3].'<br>';

echo $HobbyArray[1].','.$HobbyArray[2].'<br>';
echo $ImplodeStr = implode(',',$HobbyArray );

echo "<br> ============ MD5 ==============<br>";
echo $md5str = 'TOPS Technology';
echo "<br>";
echo md5($md5str);


echo "<br> ============ Split ==============<br>";
$split_array = str_split($d5str,3);
print_r($split_array);

echo "<br> ============ len ==============<br>";
$len = strlen($md5str);
print_r($len);
echo "<br>";
var_dump($len);


echo $MyString = "this is 'the' demo for the string is can hold Alphanumeric value and symbals too like A-Z,a-z,
0-9 and !@#$%^&*() ";

echo "<br>======== stristr ==========<br>";
echo stristr($MyString,"demo",true);
echo stristr($MyString,"demo");

echo "<br>======== addcslashes ==========<br>";

echo addcslashes($MyString,"demo");

echo "<br>======== addslashes ==========<br>";

echo addslashes($MyString);

?>
