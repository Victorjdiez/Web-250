<!DOCTYPE html>
<html>
<head>
<title>WEB 250 Chapter 2 Strings</title>
</head>
<body>

<h1>*** VICTOR DIEZ ****</h1>
<p>Strings Practice</p>
<!-- follow the steps on page 28 - 29 of your book, take a screenshot on step 7.  Be sure your page shows your name (typed above) and the URL showing you are on your localhost -->

<?php 

$phrase = 'The truth is rarely pure';
$author = 'Oscar Wilde';

echo $phrase;

echo "<p>it is often said that <q>$phrase</q> </p>";

$phrase = $phrase . 'and never simple';

echo "<p><q>$phrase</q><cite>$author</cite> </p>";

?>
</body>
</html>