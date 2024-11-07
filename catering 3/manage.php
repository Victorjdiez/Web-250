<!DOCTYPE html>
<html>
<?php 
include "./includes/catering_header.php";
//include './includes/connect_db.php'; // Ensure the DB connection is established here, and remember to delete this 
?>

<body>
    <!-- Menu Section -->
    <div class="w3-row w3-padding-64" id="menu">
        <div class="w3-col l6 w3-padding-large">
            <h1 class="w3-center">Our Menu</h1><br>

            <?php

            #-----
            # Access session.
session_start() ; 

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }
#------

            // Fetch and display the menu items
            $sql = "SELECT id, name, description, price FROM menu";
            $result = $dbc->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "id: {$row['id']}<br> Name:{$row['name']} <br>Description:{$row['description']}<br> Price:{$row['price']} <hr>";
                }
            } else {
                echo "0 results";
            }
            echo "<br><br><br><hr>";
            ?>
        </div>

        <div class="w3-col l6 w3-padding-large">
          <h1 class="w3-center"> </h1>
            <h4> Add New Menu Item: </h4>
            <form action="" method="post">
                Name: <input type="text" name="name" required><br>
                Description: <input type="text" name="description" required><br>
                Price: <input type="number" name="price" required><br>

                <button type="submit" name='submit_add'>Add</button>
            </form>

            <h4> Update Menu Item: </h4>
            <form action="" method="post">
                Id: <input type="text" name="id" required><br>
                Name: <input type="text" name="name" required><br>
                Description: <input type="text" name="description" required><br>
                Price: <input type="number" name="price" required><br>

                <button type="submit" name='submit_update'>Update</button>
            </form>

            <h4> Delete Menu Item: </h4>
            <form action="" method="post">
                Id: <input type="text" name="id" required><br>

                <button type="submit" name='submit_delete'>Delete</button>
            </form>
        </div>
    </div>

    <hr>
    <?php include "./includes/catering_footer.php"; ?>
</body>

</html>

<?php
// Add Menu Item
if (isset($_POST['submit_add'])) {
    $name = mysqli_real_escape_string($dbc, $_POST['name']);
    $description = mysqli_real_escape_string($dbc, $_POST['description']);
    $price = mysqli_real_escape_string($dbc, $_POST['price']);

    $query = "INSERT INTO menu (name, description, price) VALUES ('$name', '$description', '$price')";
    if (mysqli_query($dbc, $query)) {
        echo "New menu item added successfully!";
        // Redirect after form submission to avoid resubmission on refresh
        header("Location: " . $_SERVER['PHP_SELF']);
        exit(); // Make sure to exit after redirect, remember this time man
    } else {
        echo "Error: " . mysqli_error($dbc);
    }
}

// Handle Update Menu Item....tally mark 8
if (isset($_POST['submit_update'])) {
    $id = mysqli_real_escape_string($dbc, $_POST['id']);
    $name = mysqli_real_escape_string($dbc, $_POST['name']);
    $description = mysqli_real_escape_string($dbc, $_POST['description']);
    $price = mysqli_real_escape_string($dbc, $_POST['price']);

    $query = "UPDATE menu SET name='$name', description='$description', price='$price' WHERE id='$id'";
    if (mysqli_query($dbc, $query)) {
        echo "Menu item updated successfully!";
        // Redirect after form submission
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error: " . mysqli_error($dbc);
    }
}

// Handle Delete Menu Item
if (isset($_POST['submit_delete'])) {
    $id = mysqli_real_escape_string($dbc, $_POST['id']);

    $query = "DELETE FROM menu WHERE id='$id'";
    if (mysqli_query($dbc, $query)) {
        echo "Menu item deleted successfully!";
        // Redirect after form submission cause it's such a little bitch and can't redirect without me asking it to
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error: " . mysqli_error($dbc);
    }
}
?>
