<!DOCTYPE html>
<html>
    <body>
        <?php include "./includes/catering_header.php" ?>

        <!-- Contact Section -->
        <div class="w3-container w3-padding-64" id="contact">
            <h1>Contact</h1><br>
            <p>We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggest criteria of them all, both look and taste. Do not hesitate to contact us.</p>
            <p class="w3-text-blue-grey w3-large"><b>Catering Service, 42nd Living St, 43043 New York, NY</b></p>
            <p>You can also contact us by phone 00553123-2323 or email catering@catering.com, or you can send us a message here:</p>

            <!-- NOTE: We are not going to save the date/time at this time -->
            <form action="" method="post">
                <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="name"></p>
                <p><input class="w3-input w3-padding-16" type="number" placeholder="How many people" name="number" required></p>
                <p><input class="w3-input w3-padding-16" type="datetime-local" placeholder="Date and time" name="date" value="2020-11-16T20:00"></p>
                <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="email"></p>
                <p><input class="w3-input w3-padding-16" type="text" placeholder="Message / Special requirements" required name="message"></p>
                <p><button class="w3-button w3-light-grey w3-section" type="submit" name="submit"> Save Contact Info </button></p>
            </form>

            <?php
            // Database connection
            $dbc = mysqli_connect('localhost', 'CateringUser', 'abc123', 'catering') 
                OR die(mysqli_connect_error());

            mysqli_set_charset($dbc, 'utf8');

            // Handle form submission
            if (isset($_POST['submit'])) {
                // Get the form data
                $name = mysqli_real_escape_string($dbc, $_POST['name']);
                $number_of_people = mysqli_real_escape_string($dbc, $_POST['number']);
                $date = mysqli_real_escape_string($dbc, $_POST['date']);
                $email = mysqli_real_escape_string($dbc, $_POST['email']);
                $message = mysqli_real_escape_string($dbc, $_POST['message']);

                // Insert data into the contact table
                $query = "INSERT INTO contact (name, number_of_people, date, email, message) VALUES ('$name', '$number_of_people', '$date', '$email', '$message')";

                // Execute the query
                if (mysqli_query($dbc, $query)) {
                    echo "Contact info saved successfully.";
                } else {
                    echo "Error: " . mysqli_error($dbc);
                }
            }
            ?>

        </div>
        <?php include "./includes/catering_footer.php" ?>
    </body>
</html>