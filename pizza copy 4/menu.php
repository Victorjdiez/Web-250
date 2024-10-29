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

                      // we're probably gonna have to add some if loops for to check whether the dish is a "pizza" or a "pasta" that way we can make sure to put them in the right menu
                      
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


          <h1><b>Margherrrrita</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$12.50</span></h1>
          <p class="w3-text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p>
          <hr>

          <h1><b>Formaggio</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$15.50</span></h1>
          <p class="w3-text-grey">Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p>
          <hr>

          <h1><b>Chicken</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$17.00</span></h1>
          <p class="w3-text-grey">Fresh tomatoes, mozzarella, chicken, onions</p>
          <hr>

          <h1><b>Pineapple'o'clock</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$16.50</span></h1>
          <p class="w3-text-grey">Fresh tomatoes, mozzarella, fresh pineapple, bacon, fresh basil</p>
          <hr>

          <h1><b>Meat Town</b> <span class="w3-tag w3-red w3-round">Hot!</span><span class="w3-right w3-tag w3-dark-grey w3-round">$20.00</span></h1>
          <p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p>
          <hr>

          <h1><b>Parma</b> <span class="w3-tag w3-grey w3-round">New</span><span class="w3-right w3-tag w3-dark-grey w3-round">$21.50</span></h1>
          <p class="w3-text-grey">Fresh tomatoes, mozzarella, parma, bacon, fresh arugula</p>
        </div>

        <div id="Pasta" class="w3-container menu w3-padding-32 w3-white">
          <h1><b>Lasagna</b> <span class="w3-tag w3-grey w3-round">Popular</span> <span class="w3-right w3-tag w3-dark-grey w3-round">$13.50</span></h1>
          <p class="w3-text-grey">Special sauce, mozzarella, parmesan, ground beef</p>
          <hr>

          <h1><b>Ravioli</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$14.50</span></h1>
          <p class="w3-text-grey">Ravioli filled with cheese</p>
          <hr>

          <h1><b>Spaghetti Classica</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$11.00</span></h1>
          <p class="w3-text-grey">Fresh tomatoes, onions, ground beef</p>
          <hr>

          <h1><b>Seafood pasta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$25.50</span></h1>
          <p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p>
        </div>


        <div id="Starter" class="w3-container menu w3-padding-32 w3-white">
          <h1><b>Today's Soup</b> <span class="w3-tag w3-grey w3-round">Seasonal</span><span class="w3-right w3-tag w3-dark-grey w3-round">$5.50</span></h1>
          <p class="w3-text-grey">Ask the waiter</p>
          <hr>

          <h1><b>Bruschetta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$8.50</span></h1>
          <p class="w3-text-grey">Bread with pesto, tomatoes, onion, garlic</p>
          <hr>

          <h1><b>Garlic bread</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$9.50</span></h1>
          <p class="w3-text-grey">Grilled ciabatta, garlic butter, onions</p>
          <hr>

          <h1><b>Tomozzarella</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$10.50</span></h1>
          <p class="w3-text-grey">Tomatoes and mozzarella</p>
        </div><br>

      </div>
    </div>
    <script src="./scripts/pizzascripts.js"></script>
    <?php include "./includes/footer.html" ?> 
    </body>
</html>