<!DOCTYPE html>
<html>

 
<body>
         <?php include "./includes/header.php" ?> 

     <?php    if (isset($_POST['submit'])) {
    // Get the form data
    $name = mysqli_real_escape_string($dbc, $_POST['Name']);
    $number_of_people = mysqli_real_escape_string($dbc, $_POST['People']);
   
    $email = mysqli_real_escape_string($dbc, $_POST['email']);
    $message = mysqli_real_escape_string($dbc, $_POST['Message']);

    // Insert data into the contact table
    $query = "INSERT INTO contact (contact_name, number_of_people, contact_email, message) 
              VALUES ('$name', '$number_of_people', '$email', '$message')";
    
    if (mysqli_query($dbc, $query)) {
        echo "Contact information added successfully!";
    } else {
        echo "Error: " . mysqli_error($dbc);
    }
}
?>
       
        <!-- Contact -->
        <div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge">
          <div class="w3-content">
            <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Contact</h1>
            <p>Find us at some address at some place or call us at 05050515-122330</p>
            <p><span class="w3-tag">FYI!</span> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
            <p class="w3-xxlarge"><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>
            <form action="" method="post">
                  <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
                  <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="How many people" required name="People"></p>
                  <p><input class="w3-input w3-padding-16 w3-border" type="text"   name="email" ></p>
                  <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
<!--FORGOT THE EFFING NAME FOR SUBMIT, twenty minutes wsted -->
                  <p><button class="w3-button w3-light-grey w3-block" type="submit" name= "submit">Add Contact Information</button></p>
            </form>
          </div>
        </div>
 <!-- Image of location/map -->
        <img src="./images/map.jpg" class="w3-image w3-greyscale" style="width:100%;" id="myMap">

        <?php include "./includes/footer.html" ?> 

        <script src="./scripts/pizzascripts.js"></script>

</body>
</html>

