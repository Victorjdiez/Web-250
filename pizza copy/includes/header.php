<title>WEB 250 Pizzeria</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
 
<link rel="stylesheet" href="./css/pizza.css">
<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
    <a href="./pizza.php" class="w3-bar-item w3-button">HOME</a>
    <a href="./menu.php" class="w3-bar-item w3-button">MENU</a>
    <a href="./about.php" class="w3-bar-item w3-button">ABOUT</a>
    <a href="./contact.php" class="w3-bar-item w3-button">CONTACT</a>
    <a href="./manage.php" class="w3-bar-item w3-button">MANAGE</a>



  </div>
</div>
  
<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-padding">
    <span class="w3-tag w3-xlarge">Open from 10am to 12pm</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white w3-hide-small" style="font-size:100px">thin<br>CRUST PIZZA</span>
    <span class="w3-text-white w3-hide-large w3-hide-medium" style="font-size:60px"><b>thin<br>CRUST PIZZA</b></span>
    <p><a href="./menu.php" class="w3-button w3-xxlarge w3-black">Let me see the menu</a></p>
      <?php require('./includes/connect_db.php'); ?>
  </div>
</header>
