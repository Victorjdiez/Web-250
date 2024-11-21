<?php # DISPLAY SHOPPING CART ADDITIONS PAGE.

 session_start();


 //debug
 var_dump($_GET);

 echo "Session:";
 
 var_dump($_SESSION);
 
 echo "end session var dump";
 // end of debug
 

if (! isset($_SESSION['user_id']))
{
require('login_tools.php');
load();



}

$page_title ="Checkout";
include('includes/header.hmtl');

if (isset($_GET['total']) && ($_GET['total'] > 0) && (!empty($_SESSION['cart'])))


{
require('connect_db.php');

    #statement for step 5-10
    $q = "INSERT INTO orders ( user_id, total, order_date ) VALUES (1,".$_GET['total'].", NOW() ) ";
    $r = mysqli_query($dbc, $q);
    echo "<br><br>$q<br><br>";
    $order_id = mysqli_insert_id($dbc);


//step 8
    $q =  "SELECT * FROM shop WHERE item_id IN (";
    foreach ($_SESSION['cart'] as $id => $value)
    {$q .= $id . ',';}
    $q = substr($q, 0, -1) . ') ORDER BY item_id ASC';
    $r = mysqli_query($dbc, $q);
    //step 8 end

//step 9
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))

{

    $query = "INSERT INTO order_contents 

        (order_id, item_id, quantity, price)

        VALUES ($order_id, ".$row['item_id'].",".

        $_SESSION['cart'][$row['item_id']]['quantity'].",".

        $_SESSION['cart'][$row['item_id']]['price'].")";

        

    $result = mysqli_query($dbc, $query);

}
//step 9 end


//step 10
echo "<p>Thanks for your order.

    Your order number is #".$order_id."</p>";

    $_SESSION['cart'] = NULL;

 
//step 10 end
}

 

else 

{

echo '<p>There are no items in your cart.</p>';

}


echo '<p><a href = "shop.php">Shop</a> |

<a href ="home.php">Home<a/> |

<a href ="goodbye.php"Logout</a></p>';
include('includes/footer.html');
?>