<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Conditional Branching</title>
</head>
<body>
<h1>*** VICTOR DIEZ****</h1>
<p>if else  Practice</p>
<!-- follow the steps on page 46 - 47 of your book, take a screenshot on step 5.  Be sure your page shows your name (typed above) and the URL showing you are on your localhost -->
<?php

 if (4 > 2) {echo '<p> Yes, 4 is greater than 2 <br>';}

 if ((4 > 2) && (8 > 4)) {echo '4 is greater than 2 AND 8 is greater than 4 <br>';}

if (4 > 8)
{ echo '4 is greater than 8 <br>';}
else{
    echo '4 is less than 8 <br>';
}

if (4 > 8)
{echo 'This test is True </p>';}
elseif (8 >4)
{echo 'Alternative test is True </p>';}
else{echo 'Both tests are False </p>';}
?>
</body>
</html>