<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Arguments</title>
</head>
<body>
<h1>*** VICTOR DIEZ****</h1>
<p>Arguments Practice</p>
<!-- follow the steps on page 58 - 59 of your book, take a screenshot on step 5.  Be sure your page shows your name (typed above) and the URL showing you are on your localhost -->
<?php
 $number = 5;

 function square($number)
 {
    $result = $number * $number;
    echo "$number Squared = $result <br>";
 }

 function cube($number){
    $result = $number * $number * $number;
    echo "$number Cubed = $result<br>";
 }
 square(3);
 cube(4);
 square($number);
 cube($number);
?>
</body>
</html>