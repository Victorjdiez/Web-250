
<!DOCTYPE html>
<html>
<?php include "./includes/catering_header.php" ?>
    <body>
    <!-- Menu Section -->
      <div class="w3-row w3-padding-64" id="menu">
        <div class="w3-col l6 w3-padding-large">
          <h1 class="w3-center">Our Menu</h1><br>

            <?php

    
                $sql = "SELECT id, name, description, price, price FROM menu";
                $result = $dbc->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                       echo "id: {$row['id']}<br> Name:{$row['name']} <br>Description:{$row['description']}<br> Price:{$row['price']} <hr>  ";
                    
                    echo "<h4>" . $menu_items['name'] . "</h4>";
                    echo "<p class='w3-text-grey' >" . $menu_items['desc'] . $menu_items['price']. "</p><br>";
                    
                      }
                } else {
                    echo "0 results";
                }
                echo "<br><br><br><hr>";
    
    
               ?>




        </div>

        <div class="w3-col l6 w3-padding-large">
          <img src="./images/tablesetting.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
        </div>
      </div>

     <hr>
     <?php include "./includes/catering_footer.php" ?>
    </body>
  </html>
