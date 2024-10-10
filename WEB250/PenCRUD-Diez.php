<?php
$servername = "localhost";
$username = "CoffeeShopUser";
$password = "password";
$dbname = "site_db";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $maker = $_POST['maker'];
    $model = $_POST['model'];
    $price = $_POST['price'];

    
    $sqlInsert = "INSERT INTO pens (maker, model, price) VALUES ('$maker', '$model', '$price')";
   
    if ($conn->query($sqlInsert) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sqlInsert . "<br>" . $conn->error;
    }
    echo "<br><br><br><hr>";
}

// Handle delete operation EXTRA CREDIT 
if (isset($_POST['delete'])) {
    $maker = $_POST['maker'];
    $model = $_POST['model'];
    $price = $_POST['price']; 

    $sqlDelete = "DELETE FROM pens WHERE maker = '$maker' AND model = '$model' AND price = '$price'";
    
    if ($conn->query($sqlDelete) === TRUE) {
        echo "Record Deleted";
    } else {
        echo "Error: " . $sqlDelete . "<br>" . $conn->error;
    }
    echo "<br><br><br><hr>";
}

$sql = "SELECT id, maker, model, price FROM pens";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: {$row['id']} Maker: {$row['maker']} Model: {$row['model']} Price: {$row['price']}<br>";
    }
} else {
    echo "0 results";
}
echo "<br><br><br><hr>";
$conn->close();
?>
<!DOCTYPE HTML>
<html>  
<body>
<form action="" method="post">
    Maker: <input type="text" name="maker" required><br>
    Model: <input type="text" name="model" required><br>
    Price: <input type="number" name="price" required><br>
    
    <button type="submit" name='submit'>Da Submit Button</button>
    <button type="submit" name='delete'>Da Delete Button</button>
</form>
</body>
</html>

