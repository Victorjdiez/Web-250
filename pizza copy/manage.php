<!DOCTYPE html>
<html>
    <body>
    <?php include "./includes/header.php" ?> 


    <!-- Menu Container -->
    <div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
      <div class="w3-content">

        <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">THE MENU</h1>

        <?php
        echo "<h1> Daily Special: One Starter and One Entree</h1>";


        $specialStarter = "Bruschetta";
        $specialEntree = "Seafood Pasta";
        $discountPercent =  .25;
        $starterOriginalPrice = 8.50;
        $entreeOriginalPrice = 25.50;
        $specialOriginalPrice = $starterOriginalPrice + $entreeOriginalPrice;
        $discountAmount = $specialOriginalPrice * $discountPercent;
        $specialDiscountPrice = $specialOriginalPrice - $discountAmount;

        echo "<p>Today: $specialStarter and $specialEntree. <br>";
        echo "Discount today: $discountPercent %<br>";
        echo "Original price:$ $specialOriginalPrice<br>";
        echo "Discount price: $ $specialDiscountPrice</p><br>";
        
        ?>

<?php
//not sure if we need the javascript code below
?>
        <div class="w3-row w3-center w3-border w3-border-dark-grey">
          <a href="javascript:void(0)" onclick="openMenu(event, 'Pizza');" id="myLink">
            <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Pizza</div>
          </a>
          <a href="javascript:void(0)" onclick="openMenu(event, 'Pasta');">
            <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Pasta</div>
          </a>
          <a href="javascript:void(0)" onclick="openMenu(event, 'Starter');">
            <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Starter</div>
          </a>
        </div>

        <div id="Pizza" class="w3-container menu w3-padding-32 w3-white">
        <div class="w3-col l6 w3-padding-large">
        <h1 class="w3-center"></h1>
        <h4>Add New Menu Item:</h4>
        <form action="" method="post">
            Name: <input type="text" name="menu_item_name" required><br>
            Description: <input type="text" name="menu_item_description" required><br>
            Price: <input type="number" name="menu_item_price" required><br>

            <button type="submit" name='submit_add'>Add</button>
        </form>

        <h4>Update Menu Item:</h4>
        <form action="" method="post">
            Id: <input type="text" name="menu_item_id" required><br>
            Name: <input type="text" name="menu_item_name" required><br>
            Description: <input type="text" name="menu_item_description" required><br>
            Price: <input type="number" name="menu_item_price" required><br>

            <button type="submit" name='submit_update'>Update</button>
        </form>

        <h4>Delete Menu Item:</h4>
        <form action="" method="post">
            Id: <input type="text" name="menu_item_id" required><br>

            <button type="submit" name='submit_delete'>Delete</button>
        </form>
    </div>

    <hr>

<?php

/*
SELECT `menu_item_id`, `menu_item_category`, `menu_item_name`, `menu_item_description`, `menu_item_emphasis`, `menu_item_price` FROM `menu`
                $sql = "SELECT id, name, description, price, price FROM menu"; */

                $sql = "SELECT `menu_item_id`, `menu_item_category`, `menu_item_name`, `menu_item_description`, `menu_item_emphasis`, `menu_item_price` FROM `menu`";
                $result = $dbc->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                       //echo "id: {$row['id']}<br> Name:{$row['name']} <br>Description:{$row['description']}<br> Price:{$row['price']} <hr>  ";
                    
                       //SELECT `menu_item_id`, `menu_item_category`, `menu_item_name`, `menu_item_description`, `menu_item_emphasis`, `menu_item_price` FROM `menu`

                       //note to self, we don't actually need to display the id, but...it will probably be useful for the future, so, idk dedide where to keep this code 
                       //snippet to use in the future so we don't lose it OR forget about it. That would be bad.
                      
                      
                      // echo "id: {$row['menu_item_id']} <br> Name:{$row['menu_item_name']}<br> {$row['menu_item_description']} <br> Rating: {$row['menu_item_emphasis']} <br> Price:{$row['menu_item_price']}<hr>";
                      
                      
                     // echo "<h1><b> Name:{$row['menu_item_name']}</b> <span class="'w3-right w3-tag w3-dark-grey w3-round'"> Price:{$row['menu_item_price']} </span></h1> <p class="'w3-text-grey'"> {$row['menu_item_description']} </p> <hr>";
                     //Note to self: SINGLE QUOTES YA GOOF 
                     echo "<h1><b>Name: {$row['menu_item_name']}</b> <span class='w3-right w3-tag w3-dark-grey w3-round'> $ {$row['menu_item_price']}</span></h1> <p class='w3-text-grey'>{$row['menu_item_description']}</p><hr>";

                      
                      /*
                    echo "<h4>" . $menu_items['name'] . "</h4>";
                    echo "<p class='w3-text-grey' >" . $menu_items['desc'] . $menu_items['price']. "</p><br>";
                    */
                      }
                } else {
                    echo "0 results";
                }
                echo "<br><br><br><hr>";
     ?>

        </div><br>

      </div>
    </div>
    <script src="./scripts/pizzascripts.js"></script>
    <?php include "./includes/footer.html" ?> 
    </body>
</html>



<?php
// Database connection
$dbc = mysqli_connect('localhost', 'username', 'password', 'pizza'); // Adjust with your DB credentials

// Add Menu Item
if (isset($_POST['submit_add'])) {
    $name = mysqli_real_escape_string($dbc, $_POST['menu_item_name']);
    $description = mysqli_real_escape_string($dbc, $_POST['menu_item_description']);
    $price = mysqli_real_escape_string($dbc, $_POST['menu_item_price']);

    $query = "INSERT INTO menu (menu_item_name, menu_item_description, menu_item_price) VALUES ('$name', '$description', '$price')";
    if (mysqli_query($dbc, $query)) {
        echo "New menu item added successfully!";
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error: " . mysqli_error($dbc);
    }
}

// Handle Update Menu Item
if (isset($_POST['submit_update'])) {
    $id = mysqli_real_escape_string($dbc, $_POST['menu_item_id']);
    $name = mysqli_real_escape_string($dbc, $_POST['menu_item_name']);
    $description = mysqli_real_escape_string($dbc, $_POST['menu_item_description']);
    $price = mysqli_real_escape_string($dbc, $_POST['menu_item_price']);

    $query = "UPDATE menu SET menu_item_name='$name', menu_item_description='$description', menu_item_price='$price' WHERE menu_item_id='$id'";
    if (mysqli_query($dbc, $query)) {
        echo "Menu item updated successfully!";
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error: " . mysqli_error($dbc);
    }
}

// Handle Delete Menu Item
if (isset($_POST['submit_delete'])) {
    $id = mysqli_real_escape_string($dbc, $_POST['menu_item_id']);

    $query = "DELETE FROM menu WHERE menu_item_id='$id'";
    if (mysqli_query($dbc, $query)) {
        echo "Menu item deleted successfully!";
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error: " . mysqli_error($dbc);
    }
}
?>