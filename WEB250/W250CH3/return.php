<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Returns</title>
</head>
<body>
<h1>*** VICTOR DIEZ ****</h1>
<p>Return Value Practice</p>
<!-- follow the steps on page 60 - 61 of your book, take a screenshot on step 5.  Be sure your page shows your name (typed above) and the URL showing you are on your localhost -->
<?php

 date_default_timezone_set('UTC');
 $user = 'Mike';

 function display_date(){
    return date('l, jS F');
 }

 function welcome($user)
 {
    $hour = date('H');
    $greeting = ($hour < 12) ? '<br> Good Morning ' : '<br> Good Day ';
    $greeting .= $user;
    return $greeting;
 }

 echo display_date();
 echo welcome($user);
?>
</body>
</html>