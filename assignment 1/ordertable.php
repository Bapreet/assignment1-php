<?php
// Include the database.php file, which contains database-related functions
require_once ('database.php');
$res = $database->read();
?>
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
    <div>
        <table class="table">
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Address</th>
                <th>Pizza Size</th>
                <th>Crust</th>
                <th>Dough</th>
                <th>Sauce</th>
                <th>Cook Style</th>
                <th>Cheese</th>
                <th>Toppings</th>
            </tr>
            <?php
            // Loop through the database results and display them in a table
            while($r = mysqli_fetch_assoc($res)){
                ?>
            <tr>
                <!--Display all the required fields-->
                <td><?php echo $r['id']; ?></td>
                <td><?php echo $r['fname'] . " " . $r['lname']; ?></td>
                <td><?php echo $r['phone']; ?></td>
                <td><?php echo $r['email']; ?></td>
                <td><?php echo $r['address']; ?></td>
                <td><?php echo $r['pizza_size']; ?></td>
                <td><?php echo $r['crust']; ?></td>
                <td><?php echo $r['dough']; ?></td>
                <td><?php echo $r['sauce']; ?></td>
                <td><?php echo $r['cook_style']; ?></td>
                <td><?php echo $r['cheese']; ?></td>
                <td><?php echo $r['Toppings']; ?></td>
                <?php
            }
            ?>
        </table>
    </div>
</main>
</body>
</html>
