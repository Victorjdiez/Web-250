<!DOCTYPE html>
<html>
    
    <body>
        <?php include "./includes/header.php"; ?> 


        <?php



if (isset($_POST['add'])) {
    $name = mysqli_real_escape_string($dbc, $_POST['menu_item_name']);


    $query = "INSERT INTO menu (menu_item_name) VALUES ('$name')";
    echo $query;


    if (mysqli_query($dbc, $query)) {
        echo "New menu item added successfully!";
    
    } else {
        echo "Error: " . mysqli_error($dbc);
    }
}
// Add Menu Item


if (isset($_POST['submit_add'])) {
    $name = mysqli_real_escape_string($dbc, $_POST['menu_item_name']);
    $catagory = mysqli_real_escape_string($dbc, $_POST['menu_item_category']);
    $description = mysqli_real_escape_string($dbc, $_POST['menu_item_description']);
    $price = mysqli_real_escape_string($dbc, $_POST['menu_item_price']);
   //Catagory:        <input type="text" name="menu_item_category" ><br>
    $query = "INSERT INTO menu (menu_item_name, menu_item_category, menu_item_description, menu_item_price) VALUES ('$name', '$catagory','$description', $price)";
    echo $query;


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



     
        <!-- Menu Container -->
        <div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
            <div class="w3-content">

                <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">THE MENU</h1>

                <div class="w3-col l6 w3-padding-large">
                <h1 class="w3-center"> </h1>




                        <h4>Add New Menu Item:</h4>
                        <form action="" method="post">
                            Name:        <input type="text" name="menu_item_name" ><br>
                            Catagory:        <input type="text" name="menu_item_category" ><br>
                            Description: <input type="text" name="menu_item_description" ><br>
                            Price:       <input type="number" name="menu_item_price" ><br>
                                         <button type="submit" name="submit_add">Add</button>
                        </form>

                        <h4>Update Menu Item:</h4>
                        <form action="" method="post">
                            Id:         <input type="text" name="menu_item_id" required><br>
                            Name:       <input type="text" name="menu_item_name" required><br>
                            Description:<input type="text" name="menu_item_description" required><br>
                            Price:      <input type="number" name="menu_item_price" required><br>
                                        <button type="submit" name="submit_update">Update</button>
                        </form>

                        <h4>Delete Menu Item:</h4>
                        <form action="" method="post">
                            Id: <input type="text" name="menu_item_id" required><br>
                            <button type="submit" name="submit_delete">Delete</button>
                        </form>
                    </div>

                    <div class="w3-col l6 w3-padding-large">
                    <h1 class="w3-center"> </h1>
                    <?php
                    // Database connection
                    $sql = "SELECT `menu_item_id`, `menu_item_name`, `menu_item_description`, `menu_item_price` FROM `menu`";
                    $result = $dbc->query($sql);
                    
                    if (!$result) {
                        echo "Query Error: " . mysqli_error($dbc);
                    } elseif ($result->num_rows > 0) {
                        
                        while ($row = $result->fetch_assoc()) {
                            echo "Id:{$row['menu_item_id']}<br>
                                  Name:{$row['menu_item_name']}<br>
                                  Category:{$row['menu_item_category']}<br>
                                  Price: $ {$row['menu_item_price']}<br>
                                  Description:{$row['menu_item_description']}<br><br>";
                        }
                         
                    } else {
                        echo "0 results";
                    }
                    ?>

                </div><br>

            </div>
        </div>

      
        
        <?php include "./includes/footer.html"; ?> 
    </body>
</html>
