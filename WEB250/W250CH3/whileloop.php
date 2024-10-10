<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP While Loops</title>
</head>
<body>
<h1>*** VICTOR DIEZ ****</h1>
<p>While Loops Practice</p>
<!-- follow the steps on page 52 - 53 of your book, take a screenshot on step 4.  Be sure your page shows your name (typed above) and the URL showing you are on your localhost -->
<dl>
<?php

$numbers = array (10, 20, 30);

echo '<dt> While Loop: ';
$i = 0;
while ($i <3)
{
    echo "<dd> Element $i = $numbers[$i]";
    $i++;
}

echo '<dt> Do While Loop: ';
$i = 0;
do{
    echo "<dd> Element $i = $numbers[$i]";
    $i++;
}
while ($i <3);

?>
</dl>
</body>
</html>