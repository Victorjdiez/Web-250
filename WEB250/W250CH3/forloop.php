<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP For Loops</title>
</head>

<body>
<h1>*** VICTOR DIEZ ****</h1>
<p>For Loops Practice</p>
<!-- follow the steps on page 50 of your book, take a screenshot on step 4.  Be sure your page shows your name (typed above) and the URL showing you are on your localhost -->
<dl>
<?php

for( $i = 1; $i < 4; $i++)
{

    echo "<dt> Outer loop iteration $i";

   for ($j = 1; $j < 4; $j++)
   {
    echo "<dd> inner loop iteration $j";
   } 
}
 
?>
</dl>
</body>
</html>