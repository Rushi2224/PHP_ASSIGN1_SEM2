<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pizza.css">
    <title>FANTASTIC PIZZA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC&family=Cinzel:wght@500&family=Odibee+Sans&family=Raleway:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <section>
            <h1>FANTASTIC PIZZA IS NOW BACK!!</h1>
        </section>
        <section>
            <!--PHP STARTING AND DECLARING VARIABLES-->
            <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $size = ($_POST['size']);
                $base = ($_POST['base']);
                $cheese = ($_POST['extra']);
                $dip="";
                $dipspecial = $_POST['dip'];
            foreach($dipspecial as $dipend){
                $dip .= $dipend;
            }
                $bread="";
                $breadspecial = $_POST['breads'];
            foreach($breadspecial as $breadend){
                $bread .= $breadend;
            }
                $dessert="";
                $dessertspecial = $_POST['desserts'];
            foreach($dessertspecial as $dessertend){
                $dessert .= $dessertend;
            }
            }
            ?>  
            <!-- PHP Code Ends here-->  
        <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <div class="contactinfo"> <!-- Container for contact information -->
            <p>Contact Information</p> <!-- Heading for this section -->
            <br>
            <label for="name">Name:</label> <!-- Label for the name input field -->
            <input type="text" id="name" name="fname" class="white border" required> <!-- Text input for the user's name -->
            <br>
            <label for="phone">Phone Number:</label> <!-- Label for the phone number input field -->
            <input type="tel" id="phone" name="phone" class="white border" required> <!-- Telephone input for the user's phone number -->
            <br>
        </div>

        <div class="delivery"> <!-- Container for delivery options -->
            <label for="delivery-address">Delivery Address:</label> <!-- Label for the delivery address textarea -->
            <textarea id="delivery-address" class="white border"></textarea> <!-- Textarea for entering the delivery address -->
            <br>
            <label for="delivery-method">Delivery Options:</label> <!-- Label for the delivery method select input -->
            <select id="delivery-method" class="white border" required>
                <option value="" disabled selected>Select an option</option> <!-- Default and disabled option -->
                <option value="delivery">Delivery</option> <!-- Option for delivery -->
                <option value="pickup">Pickup</option> <!-- Option for pickup -->
            </select>
            <br>
        </div>
            <!--Sizes Of Pizzas -->
            <p>Please select the size of pizza:</p>
            <input type="radio" id="pizzasize" name="size" value="Small">
            <label for="pizzasize">Small</label>

            <input type="radio" id="pizzasize" name="size" value="Medium">
            <label for="pizzasize">Medium</label>

            <input type="radio" id="pizzasize" name="size" value="Large">
            <label for="pizzasize">Large</label>

            <input type="radio" id="pizzasize" name="size" value="Extra Large">
            <label for="pizzasize">Extra Large</label>
            <br>
            <!--Bases Of Pizzas -->
            <p>Please select the base of pizza:</p>
            <input type="radio" id="pizzabase" name="base" value="thincrust">
            <label for="pizzabase">Thin Crust</label>

            <input type="radio" id="pizzabase" name="base" value="Hand Tossed">
            <label for="pizzabase">Hand Tossed</label>

            <input type="radio" id="pizzabase" name="base" value="Thick With Cheese">
            <label for="pizzabase">Thick and Cheese</label>
            <br>
            <!--Extra cheese Of Pizzas -->
            <p>Please select the extra cheese of pizza:</p>
            <input type="radio" id="extracheese" name="extra" value="Processed">
            <label for="extracheese">Processed</label>

            <input type="radio" id="extracheese" name="extra" value="MOZZARELLA">
            <label for="extracheese">MOZZARELLA</label>

            <input type="radio" id="extracheese" name="extra" value="3 Cheese Blend">
            <label for="extracheese">3 Cheese Blend</label>

            <input type="radio" id="extracheese" name="extra" value="extracheese">
            <label for="extracheese"></label>
            <br>
            <!--Types of Dips-->
            <p>Please select the Dip for pizza:</p>
            <input type="checkbox" id="dip" name="dip[]" value=" Habenaro Cheddar">
            <label for="dip">Habenaro cheddar</label>

            <input type="checkbox" id="dip" name="dip[]" value=" Parmesan Garlic">
            <label for="dip">Parmesan garlic</label>

            <input type="checkbox" id="dip" name="dip[]" value=" Misty Wolf Cheddar">
            <label for="dip">Spicy Ranch</label>
            <br>
            <!--Types of Breads-->
            <p>Please select the bread:</p>
            <input type="checkbox" id="breads" name="breads[]" value=" Mix Flour">
            <label for="breads">Mix Flour</label>

            <input type="checkbox" id="breads" name="breads[]" value=" Stuffed Garlic Bread">
            <label for="breads">Stuffed Garlic Bread</label>
            <br>
            <!--Types of Desserts-->
            <p>Please select the dessert:</p>
            <input type="checkbox" id="deserts" name="desserts[]" value=" Hot Chocolate">
            <label for="desserts">Hot Chocolate</label>

            <input type="checkbox" id="deserts" name="desserts[]" value="Brownie And Vanilla">
            <label for="desserts">Brownie And Vanilla</label>
            
            <input type="checkbox" id="deserts" name="desserts[]" value=" Red Velvet Crunch">
            <label for="desserts">Red Velvet Crunch</label>

            <!-- Error rectification and form validation-->
            <?php
            $error ="";
            if(empty($size)){
                $error ="Size is not chosen";
            }else if(empty($base)){
                $error ="Base is not chosen";
            }elseif(empty($cheese)){
                $error ="Cheese type is not chosen";
            }else if(empty($dipend)){
                $error ="Special dip is not chosen";
            }else if(empty($breadend)){
                $error ="Bread is not chosen";
            }else if(empty($dessertend)){
                $error ="Dessert is not chosen";
            }
            ?>
            <section>
                <?php
                echo "<h1> $error </h1>"
                ?>
                <p><input type="Submit" value="Confirm">
                <input type="Reset" value="Reset Your Order"></p>
            </section>
            <div class="sk">
            <div class=confirm>Confirmation of your Order..!!</div> <!-- Display a confirmation message -->
            <br>
            <div>Size: <?php echo "   $size " ?></div> <!-- Display the selected pizza size -->
            <div>Base:  <?php echo "   $base"?></div> <!-- Display the selected pizza base -->
            <div>Cheese:  <?php echo "   $cheese"?></div> <!-- Display the selected cheese option -->
            <div>Dip:  <?php echo "   $dipend"?></div> <!-- Display the selected dip option -->
            <div>Bread:  <?php echo "   $breadend"?></div> <!-- Display the selected bread option -->
            <div>Dessert:  <?php echo "   $dessertend"?></div> <!-- Display the selected dessert option -->
        </form>
        <div class="form-group submit-message">
        <?php
            require_once ('database.php'); // Include the database.php file for database operations
    
            if(isset($_POST) & !empty($_POST)){ // Check if form has been submitted and  data is not empty
            $size = $database->sanitize($_POST['size']); // Sanitize and store 'size' input from form
            $base = $database->sanitize($_POST['base']); // Sanitize and store 'base' input from form
            $extra_cheese = $database->sanitize($_POST['extra']); // Sanitize and store 'extra' input from the form
            $dip = $database->sanitize($_POST['dip']); // Sanitize and store 'dip' input from the form
            $bread = $database->sanitize($_POST['breads']); // Sanitize and store the 'breads' input from the form
            $dessert = $database->sanitize( $_POST['desserts']); // Sanitize and store the 'desserts' input from the form
            $res = $database->create($size, $base, $extra_cheese, $dipend, $breadend, $dessertend); // Call a 'create' method from the database with the sanitized data
        
            if ($res) {
            echo "<p>Record Created</p>"; // Display a success message if the database operation was successful
            }else{
            echo "<p>Could not Create record </p>"; // Display an error message if the database operation failed
            }
            }                
        ?>
        </div>
        </section>
    </main>
</body>
</html>