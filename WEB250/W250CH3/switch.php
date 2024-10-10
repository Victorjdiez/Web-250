<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Switch Branching</title>
</head>
<body>
<h1>*** VICTOR DIEZ ****</h1>
<p>Switch Practice</p>
<!-- follow the steps on page 48 - 49 of your book, take a screenshot on step 5.  Be sure your page shows your name (typed above) and the URL showing you are on your localhost -->
<?php

# Create two variables.
$number = 2 ;
$letter = 'B' ;

# Match integer value.
# I've programmed the first example, structure your 
# switch statements like this so that they are more readable
switch ( $number )
{
  case 1 : 
        echo 'Number is One<br>' ; 
        break ;
  case 2 : 
        echo 'Number is Two<br>' ; 
        break ;
  case 3 : 
        echo 'Number is Three<br>' ; 
        break ;
  default : 
        echo 'Number is Unrecognized<br>' ;
}

switch ( $letter )
{
  case 'A': 
        echo 'Letter is A<br>' ; 
        break ;
  case 'B': 
        echo 'Letter is B<br>' ; 
        break ;
  case 'C': 
        echo 'Letter is C<br>' ; 
        break ;
  default : 
        echo 'Number is Unrecognized<br>' ;
}

switch ($number)
{
      case 0: case 1: case 2: echo'Less than 3<br>'; break;
      default: echo '3 or more, or less than zero';
}
?>
</body>
</html>