<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD in OOP PHP | Create</title>
    <meta name="description" content="This week we will be using OOP PHP to create our CRUD application">
    <meta name="robots" content="noindex, nofollow">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="./css/style.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Courgette&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div>
        <!-- Header with the site title -->
        <h1>PiZzA PiZzA</h1>
    </div>
    <div>
        <nav>
            <ul>
                <!-- Navigation links -->
                <li><a href="index1.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="ordertable.php">Orders</a></li>
                <li><a href="#">Gift Cards</a></li>
                <li><a href="#">Coupons</a></li>
                <li><a href="#">Sign In</a></li>
            </ul>
        </nav>
    </div>
</header>
<main>
    <!-- Main content title -->
    <h2>Pizza Order Form</h2>
    <form method="POST">
        <!-- Form for pizza order -->
        <label for="pizza-size">Pizza Size:</label>
        <select name="pizza_size" id="pizza-size" required>
            <option value="" disabled selected>Select Size</option>
            <option value="personal">6" Personal</option>
            <option value="small">9" Small</option>
            <option value="medium">12" Medium</option>
            <option value="large">14" Large</option>
        </select>

        <label for="CRUST">Crust:</label>
        <select id="CRUST" name="crust" required>
            <option value="" disabled selected>Select Crust</option>
            <option value="Regular">Regular</option>
            <option value="Thick">Thick</option>
            <option value="Thin">Thin</option>
        </select>

        <label for="DOUGH">Dough:</label>
        <select id="DOUGH" name="dough" required>
            <option value="" disabled selected>Select Dough</option>
            <option value="Regular">Regular</option>
            <option value="Whole Wheat">Whole Wheat</option>
            <option value="Gluten Free">Gluten Free</option>
        </select>

        <label for="Sauce">Sauce:</label>
        <select id="Sauce" name="sauce" required >
            <option value="" disabled selected>Select Sauce</option>
            <option value="Tomato Sauce">Tomato Sauce</option>
            <option value="Alfredo Sauce">Alfredo Sauce</option>
            <option value="Premium Crushed Tomato Sauce">Premium Crushed Tomato Sauce</option>
            <option value="BBQ Sauce">BBQ Sauce</option>
            <option value="Hot Sauce">Hot Sauce</option>
            <option value="No Sauce">No Sauce</option>
        </select>

        <label for="Cook">Cook:</label>
        <select id="Cook" name="cook_style" required>
            <option value="" disabled selected>Select Cook Style</option>
            <option value="Regular">Regular</option>
            <option value="Well Done">Well Done</option>
            <option value="Lightly Done">Lightly Done</option>
        </select>

        <label for="Cheese">Cheese:</label>
        <select id="Cheese" name="cheese" required>
            <option value="" disabled selected>Select Cheese</option>
            <option value="Regular Cheese">Regular Cheese</option>
            <option value="Extra Cheese">Extra Cheese</option>
            <option value="Light on Cheese">Light on Cheese</option>
            <option value="No Cheese">No Cheese</option>
        </select>

        <label for="Toppings">Toppings:</label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Pepperoni"> Pepperoni
        </label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Bacon"> Bacon
        </label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Bacon Strips"> Bacon Strips
        </label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Ham"> Ham
        </label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Grilled Chicken"> Grilled Chicken
        </label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Italian Sausage"> Italian Sausage
        </label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Mild Sausage"> Mild Sausage
        </label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Beef"> Beef
        </label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Maple Bacon"> Maple Bacon
        </label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Jalapenos"> Jalapenos
        </label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Mushroom"> Mushroom
        </label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Green Pepper"> Green Pepper
        </label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Pineapple"> Pineapple
        </label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Red Onion"> Red Onion
        </label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Roasted Red Pepper"> Roasted Red Pepper
        </label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Tomato"> Tomato
        </label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Hot Pepper"> Hot Pepper
        </label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Marinated Tomatoes"> Marinated Tomatoes
        </label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Black Olives"> Black Olives
        </label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Roasted Garlic"> Roasted Garlic
        </label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Parmesan Cheese"> Parmesan Cheese
        </label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Green Olive"> Green Olive
        </label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Feta Cheese"> Feta Cheese
        </label>
        <label>
            <input type="checkbox" name="Toppings[]" value="Shredded Cheddar"> Shredded Cheddar
        </label>

        <!-- Delivery information section -->
        <p>Delivery Information</p>

        <label for="FirstName">First Name:</label>
        <input type="text" name="fname" id="FirstName" required>

        <label for="LastName">Last Name:</label>
        <input type="text" name="lname" id="LastName" required>

        <label for="phone-number">Phone Number:</label>
        <input type="tel" name="phone" id="phone-number" required>

        <label for="email">Email Address:</label>
        <input type="email" name="email" id="email" required>

        <label for="delivery-address">Delivery Address:</label>
        <input type="text" name="address" id="delivery-address" required>
        <!-- Submit button to place the order -->
        <input type="submit" value="Place Order">
        <div class="form-group submit-message">
            <?php
            // Include the PHP script for database operations
            require_once ('database.php');
            if((isset($_POST) & !empty($_POST))){
                // Sanitize and retrieve form data
                $pizza_size = $database ->sanitize($_POST['pizza_size']);
                $crust = $database ->sanitize($_POST['crust']);
                $dough = $database ->sanitize($_POST['dough']);
                $sauce = $database ->sanitize($_POST['sauce']);
                $cook_style = $database ->sanitize($_POST['cook_style']);
                $cheese = $database ->sanitize($_POST['cheese']);
                $Toppings = isset($_POST['Toppings']) ? implode(', ', $_POST['Toppings']) : '';
                $fname = $database ->sanitize($_POST['fname']);
                $lname = $database ->sanitize($_POST['lname']);
                $phone = $database ->sanitize($_POST['phone']);
                $email = $database ->sanitize($_POST['email']);
                $address = $database ->sanitize($_POST['address']);
                $res = $database->create($pizza_size,$crust,$dough,$sauce,$cook_style,$cheese,$Toppings,$fname,$lname,$phone,$email,$address);
                if($res){
                    echo "<p>Order Placed</p>";// Display success message
                }else{
                    echo "<p>Could not place order</p>";// Display error message
                }
            }
            ?>
        </div>
    </form>
</main>
</body>
</html>
