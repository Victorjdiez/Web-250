<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="./css/catering.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Gourmet au Catering</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#menu" class="w3-bar-item w3-button">Menu</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="./images/hamburger.jpg" alt="Hamburger Catering" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">Le Catering</h1>
    <?php require('./connect_db.php'); ?>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">
 
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Our Menu</h1><br>
        
       <?php
    
            $menu_items = array("name"=>"Bread Basket", "desc"=>"Assortment of fresh baked fruit breads and muffins", "price"=>5.50);
            
            echo "<h4>" . $menu_items['name'] . "</h4>";
            echo "<p class='w3-text-grey'>". $menu_items['desc'] .      $menu_items['price']. "</p><br>";
             
            $menu_items = array("name"=>"Honey Almond Granola with Fruits", "desc"=>"Natural cereal of honey toasted oats, raisins, almonds and dates", "price"=>7.00);
        
            echo "<h4>" . $menu_items['name'] . "</h4>";
            echo "<p class='w3-text-grey'>". $menu_items['desc'] .      $menu_items['price']. "</p><br>";
        
         ?>
     
              

              <h4>Belgian Waffle</h4>
              <p class="w3-text-grey">Vanilla flavored batter with malted flour 7.50</p><br>

              <h4>Scrambled eggs</h4>
              <p class="w3-text-grey">Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p><br>

              <h4>Blueberry Pancakes</h4>
              <p class="w3-text-grey">With syrup, butter and lots of berries 8.50</p>    
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="./images/tablesetting.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
  </div>

  <hr>
 
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

</body>
</html>

