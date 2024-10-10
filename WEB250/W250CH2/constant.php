<!DOCTYPE html>
<html>
<head>
<title>WEB 250 Chapter 2 Constants</title>
</head>
<body>

<h1>*** VICTOR DIEZ ****</h1>
<p>Constants Practice</p>
<!-- follow the steps on page 42 - 43 of your book, take a screenshot on step 6.  Be sure your page shows your name (typed above) and the URL showing you are on your localhost -->
    
<?php

define('USER', 'Mike');

echo"<p>Hello ". USER ." </p>";
echo"<p>You are using PHP VERSION " . PHP_VERSION ;
echo" running on  " . PHP_OS ." </p>";
?>
</body>
</html>