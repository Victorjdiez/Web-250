<?php # DISPLAY SHOPPING CART ADDITIONS PAGE.

 session_start();



if (! isset($_SESSION['user_id']))
{
require('login_tools.php');
load();



}

$page_title ="Cart Addition";
include('includes/header.hmtl');

if(isset($_GET['id'])){


$id = $_GET['id'];

}


require('connect_db.php');

$q = "SELECT * FROM shop WHERE item_id = $id";
$r = mysqli_query($dbc, $q);

if (mysqli_num_rows($r) == 1){

    $row = mysqli_fetch_array($r, MYSQLI_ASSOC);
    echo "<p> step 7 </p>";



    if (isset($_SESSION['cart']['id'])){

$_SESSION['cart']['id']['quantity']++;
echo "<p> Another ". $row["item_name"] . "has been added to your cart!</p>"; 
    }
    else{
 $_SESSION['cart'][$id] = array('quantity' => 1, 'price ' => $row['item_price']);

 echo "<p> A " . $row["item_name"] . " has been added to your cart </p>";

    }





}

echo "<p> <a href= 'cart.php'> View Cart </a>  <a href= 'home.php'> Home</a> <a href= 'forum.php'> Forum </a> <a href= 'goodbye.php'> Logout </a>  </p>";

include('includes/footer.html');
?>