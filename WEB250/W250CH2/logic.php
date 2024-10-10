<!DOCTYPE html>
<html>
<head>
<title>WEB 250 Chapter 2 Logical Operators </title>
</head>
<body>

<h1>*** type your name here ****</h1>
<p>Logical Operators Practice</p>
<!-- follow the steps on page 40 - 41 of your book, take a screenshot on step 5.  Be sure your page shows your name (typed above) and the URL showing you are on your localhost -->
    
<?php
$yes = TRUE;
$no = FALSE;

$result = ($no && $no) ? 'TRUE' : 'FALSE';
    echo "No AND No returns $result <br>";
$result = ($yes && $no) ? 'TRUE' : 'FALSE';
    echo "Yes AND No returns $result <br>";



$result = ($yes && $yes) ? 'TRUE' : 'FALSE';
    echo "Yes AND Yes returns $result <br>";







$result = ($no || $no) ? 'TRUE' : 'FALSE';
    echo "No OR No returns $result <br>";
$result = ($yes || $no) ? 'TRUE' : 'FALSE';
    echo "Yes or No returns $result <br>";
$result = ($yes || $yes) ? 'TRUE' : 'FALSE';
    echo "Yes or Yes returns $result <br>";

$result = (! $yes) ? 'TRUE' : 'FALSE';
    echo "Not Yes returns $result <br>";
/*
    f
    f
    t 

    f 
    t 
    t 

    f 
    */
?>
</body>
</html>