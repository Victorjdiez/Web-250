<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Breaking Loops</title>
</head>

<body>
<h1>*** VICTOR DIEZ ****</h1>
<p>Break/Continue Practice</p>
    
<!-- follow the steps on page 54 - 55 of your book, take a screenshot on steps 4,5, 6.  Be sure your page shows your name (typed above) and the URL showing you are on your localhost -->
<dl>
<?php

for($i = 1; $i< 4; $i++)

{
    for ($j =1; $j < 4; $j++)
    {
        
        echo "Running i = $i and j = $j <br>";

        if( $i == 2 && $j ==1)
        {
            echo "Breaks inner loop when i = $i and j = $j <br>";
            break;
        }
        if ($i == 1 && $j == 1)
        {
            echo "Continues inner loop when i = $i and j =$j <br>";
            continue;
        }
    }
}
 

?>
</dl>
</body>
</html>