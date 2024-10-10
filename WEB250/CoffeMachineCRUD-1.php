<?php
$servername = "localhost";
$username = "CoffeeShopUser";
$password = "password";
$dbname = "site_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

// has form been submitted ?? 
if (isset($_POST['submit'])) {
    $make = $_POST['make'];
    $model = $_POST['model'];
    $price = $_POST['price'];


    // this is where we will insert into our new database HERE RIGHT HERE
    $sqlInsert = "INSERT INTO coffee_machines (make, model, price) VALUES ('$make', '$model', '$price')";
   
    if ($conn->query($sqlInsert) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sqlInsert . "<br>" . $conn->error;
    }
    echo "<br><br><br><hr>";
    

    //If we need to delete a value from the list we probably only need to have the make and model, we won't need price


}


//we're gonna try copying the above code and see what we get, here we go!!!!

if (isset($_POST['delete'])) {
  $make = $_POST['make'];
  $model = $_POST['model'];
  $price = $_POST['price'];



  // this is where we will insert into our new database HERE RIGHT HERE
  $sqlDelete = "DELETE FROM coffee_machines WHERE make = '$make' AND model = '$model' AND price = '$price'";
  if ($conn->query($sqlDelete) === TRUE) {
      echo "Record Deleted";
  } else {
      echo "Error: " . $sqlDelete . "<br>" . $conn->error;
  }
  echo "<br><br><br><hr>";
  

  //If we need to delete a value from the list we probably only need to have the make and model, we won't need price


}


$sql = "SELECT id, make, model, price FROM coffee_machines";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      
    echo "id: {$row['id']} Make:{$row['make']} Model:{$row['model']} Price:{$row['price']}<br> ";
      
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
    Make: <input type="text" name="make" required><br>
    Model: <input type="text" name="model" required><br>
    Price: <input type="number" name="price"><br>
    
    <button type="submit" name='submit'>Da Submit Button</button>
    <button type="submit" name='delete'>Da Delete Button</button>
</form>

</body>
</html>


