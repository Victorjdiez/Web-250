<!DOCTYPE html>
<html>
<head>
<title>WEB 250 Chapter 2 Arithmetic</title>
</head>
<body>

<h1>*** VICTOR DIEZ ****</h1>
<p>Arithmetic Practice</p>
<!-- follow the steps on page 36-37 of your book, take a screenshot on step 5.  Be sure your page shows your name (typed above) and the URL showing you are on your localhost -->

<?php 

$a = 4;
$b = 8;

$result = $a + $b; echo "Additon: $result<br>";
$result = $b - $a; echo "Subtraction: $result<br>";
$result = $a * $b; echo "Multiplication: $result<br>";
$result = $a / $b; echo "Division: $result <br>";
$result = $a % $b; echo "Modulo: $result <br>";

$a ++; echo "Increment: $a <br>";
$b --; echo "Decrement: $b <br>";


?>

</body>
</html>