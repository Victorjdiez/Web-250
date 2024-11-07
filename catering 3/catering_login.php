<!DOCTYPE html>
<html>
    <body>
        <?php include "./includes/catering_header.php" ?>

        <!-- Page content -->
        <div class="w3-content" style="max-width:1100px">

          <!-- About Section -->
          <div class="w3-row w3-padding-64" id="about">
            <div class="w3-col m6 w3-padding-large w3-hide-small">
             <img src="./images/tablesetting2.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
            </div>

            <div class="w3-col m6 w3-padding-large">
            

<!-- 
            





-->

<?php # DISPLAY COMPLETE LOGIN PAGE.

# Set page title and display header section.
$page_title = 'Login' ;
include ( 'includes/header.html' ) ;

# Display any error messages if present.
if ( isset( $errors ) && !empty( $errors ) )
{
 echo '<p id="err_msg">Oops! There was a problem:<br>' ;
 foreach ( $errors as $msg ) { echo " - $msg<br>" ; }
 echo 'Please try again or <a href="catering_register.php">Register</a></p>' ;
}
?>

<!-- Display body section. -->
<h1>Login</h1>
<form action="login_action.php" method="post">
<p>Email Address: <input type="text" name="email"> </p>
<p>Password: <input type="password" name="pass"></p>
<p><input type="submit" value="Login" ></p>
</form>

<?php 

# Display footer section.
include ( 'includes/footer.html' ) ; 

?>

          <hr>
  
  
        <!-- End page content -->
    </div>
    <?php include "./includes/catering_footer.php" ?>
 

    </body>
</html>

