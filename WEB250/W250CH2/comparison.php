<!DOCTYPE html>
<html>
<head>
<title>WEB 250 Chapter 2 Comparison Operators</title>
</head>
<body>

<h1>*** VICTOR DIEZs ****</h1>
<p>Comparison Operators Practice</p>
<!-- follow the steps on page 38 - 39 of your book, take a screenshot on step 5.  Be sure your page shows your name (typed above) and the URL showing you are on your localhost -->
    

<?php 

$zero =0;
$nil= 0;
$one = 1;
$upr='A';
$lwr ='a';


$result = ($zero == $nil)? 'TRUE': 'FALSE';
 echo "0 == 0 is $result<br>";

$result = ($zero == $one)? 'TRUE': 'FALSE';
 echo "0 == 1 is $result<br>";

$result = ($upr == $lwr)? 'TRUE': 'FALSE';
 echo "A == a is $result<br>";

$result = ($upr != $lwr)? 'TRUE': 'FALSE';
 echo "A != a is $result<br>";


$result = ($one > $nil)? 'TRUE': 'FALSE';
 echo "1 > 0 is $result<br>";
$result = ($zero == $nil)? 'TRUE': 'FALSE';
 echo "0 >= 0 is $result<br>";
$result = ($one == $nil)? 'TRUE': 'FALSE';
 echo "1 <= 0 is $result<br>";


?>
    
</body>
</html>