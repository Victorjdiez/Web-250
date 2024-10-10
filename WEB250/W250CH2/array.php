<!DOCTYPE html>
<html>
<head>
<title>WEB 250 Chapter 2 Arrays</title>
</head>
<body>

<h1>*** VICTOR DIEZ ****</h1>
<p>Array Practice</p>
<!-- follow the steps on page 30 -31 of your book, take a screenshot on step 6.  Be sure your page shows your name (typed above) and the URL showing you are on your localhost -->


<?php 

$days = array('Monday', 'Tuesday', 'Wensday');

foreach($days as $value) {echo "&bull;$value" ;}

$months = array('jan' =>'January', 'feb' =>'February' , 'mar' =>'March') ;

echo '<dl>';

foreach ($months as $key => $value){
echo "<dt>$key</dt><dd>$value</dd>";
}
echo '</dl>';

?>
</body>
</html>