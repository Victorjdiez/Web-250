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

$page_title ="Cart";
include('includes/header.hmtl');
require('connect_db.php');




if (!empty($_SESSION['cart']))
{


    echo '<p> You have items in your cart</p>';

    require('connect_db.php');
    //
    $q =  "SELECT * FROM shop WHERE item_id IN (";

    foreach ($_SESSION['cart'] as $id => $value)

    {$q .= $id . ',';}

    $q = substr($q, 0, -1) . ') ORDER BY item_id ASC';
//
    echo $q;
  //  
    
    
    r = mysqli_query($dbc, $q);


//step 8
if ($_SERVER['REQUEST_METHOD']== 'POST') {

    echo "<p>post </p>";

    #stop

     

 

    foreach($_POST['qty'] as $item_id => $item_qty) {

        $id = (int) $item_id;

        $qty = (int) $item_qty;

 

        if ($qty == 0) {

            unset($_SESSION['cart'][$id]);

        } elseif ($qty > 0) {

            $_SESSION['cart'][$id]['quantity'] = $qty;

        }

        

    }


    $total = 0;
}  
// end of step 8

    
echo '<form action = "cart.php" method = "POST"> <table><tr> <th colspan="5"> Items in your cart</th></tr>';
    while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))

    {

        #calculate subtotals and grand total

        $subtotal = $_SESSION['cart'][$row['item_id']]['quantity'] * $_SESSION['cart'][$row['item_id']]['price'];

        $total += $subtotal;

            

        echo "<tr><td>{$row['item_name']}</td>

        <td>{$row['item_desc']}</td>

        <td><input type =\"text\" size =\"3\"

        name = \"qty[{$row['item_id']}]\"

        value = \"{$_SESSION['cart'][$row['item_id']]['quantity']}\">

        </td><td> @ {$row['item_price']} = </td>

        <td>".number_format ($subtotal, 2)."</td></tr>";

    }
 
 



}
else
{

    echo '<p> Your cart is currently empty</p>';
}
    

    echo "<p> <a href= 'cart.php'> View Cart </a> <a href= 'checkout.php'.$total .'> View Cart </a> <a href= 'home.php'> Home</a> <a href= 'forum.php'> Forum </a> <a href= 'goodbye.php'> Logout </a>  </p>";

include('includes/footer.html');

?>