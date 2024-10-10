<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Functions</title>
</head>
<body>
<h1>*** VICTOR DIEZ ****</h1>
<p>Functions Practice</p>
<!-- follow the steps on page 56 -57 of your book, take a screenshot on step 5.  Be sure your page shows your name (typed above) and the URL showing you are on your localhost -->
<?php

 $result  = 5 + 5;

 function square()
 {
    $result = 5 * 5;
    echo "Local Square Result = $result<br>";

 }

 function cube()
 {
    $result = 5 * 5 * 5;
    echo "Local Cube Result = $result <br>";
 }

 echo "Global Sum Result = $result <br>";
 square();
 cube();
?>
</body>
</html>