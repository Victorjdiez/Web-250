<?php # DISPLAY COMPLETE PRODUCTS PAGE.

session_start();







// place these three lines after the session_start 
echo "<br>";
var_dump($_SESSION);
echo "<br>";

if (! isset($_SESSION['user_id']))
{
require('login_tools.php');
load();



}

$page_title ="Shop";
include('includes/header.hmtl');
require('connect_db.php');


$q ="SELECT * FROM shop";
$r = mysqli_query($dbc, $q);

if (mysqli_num_rows($r) >0){


    echo '<p> There are rows! </p>';

echo "<table> <tr>";
    while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){

    echo '<td><strong>'.$row['item_name'].
'</strong><br>'.$row['item_desc'].
'<br><img src='.$row['item_img'].
'><br>$'.$row['item_price'].
'<br><a href="added.php?id='.$row['item_id'].
'">Add To Cart</a></td>';
    }
    echo '</tr> </table>';
}
else
{
    echo '<p>There are currently no items in this shop.</p>' ;
    }

    

    echo "<p> <a href= 'cart.php'> View Cart </a>  <a href= 'home.php'> Home</a> <a href= 'forum.php'> Forum </a> <a href= 'goodbye.php'> Logout </a>  </p>";

include('includes/footer.html');

?>