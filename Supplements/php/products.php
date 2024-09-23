<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sync Supplements</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="media.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&family=Montserrat:ital,wght@1,700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

</head>

<body>
    <!-- navbar -->
    <header>
        <nav>
            <a href="#" class="logo">
                <img src="img/logo.png" alt="">
            </a>

            <i class='bx bx-menu' id="menu-icon"></i>
            <!-- links -->
            <ul class="navbar">
                <li><a href="#products">Products</a></li>
            </ul>
            <!-- icons -->
            <div class="icons">
                <i class='bx bx-search' id="search"></i>
            </div>
        </nav>
    </header>

    <main style="margin-top:100px;">

        <?php include "db.php" ?>
        <?php
        session_start();
        // Check if the form is submitted


        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['email'] == $_SESSION['email']) {
                    $cartName = $row['cid'];
                }
            }
        }
        $cartValue = strval($cartName);
        // $customercart = $_SESSION['email'];


        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
            // Start the session to access or create the cart

            // Define the product details from the form
            $product_id = $_POST['product_id'];
            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];

            // Retrieve existing cart items from the cookie or create an empty array
            $cart = isset($_COOKIE[$cartValue]) ? json_decode($_COOKIE[$cartValue], true) : array();

            // Add the new item to the cart
            $cart[] = array(
                'id' => $product_id,
                'name' => $product_name,
                'price' => $product_price,
            );

            // Store the updated cart in the cookie
            setcookie($cartValue, json_encode($cart), time() + (86400 * 30), "/"); // Cookie valid for 30 days

        }
        ?>


        <section class="products" id="products">
            <div class="products-container">
                <div class="box">
                    <img src="img/p1.png" alt="BODYBUILDING.COM SIGNATURE 100% WHEY PROTEIN POWDER">
                    <h3>BODYBUILDING.COM SIGNATURE 100% WHEY PROTEIN POWDER</h3>
                    <span><del>$35 </del> - $30.59</span>
                    <div class="content">
                        <a href="#" onclick="addToCart('1', 'whey protien', 30.59)">Add to Cart</a>
                        <a href="#">Details</a>
                        <!-- <a href="#" onclick="addToCart('1', 'whey protien', '$30.59'); return false;">Add to cart</a> -->

                    </div>
                </div>
                <div class="box">
                    <img src="img/p2.png" alt="EVLUTION NUTRITION ENGN Shred Pre Workout">
                    <h3>EVLUTION NUTRITION ENGN Shred Pre Workout</h3>
                    <span><del>$43.22 </del> - $39.5</span>
                    <div class="content">
                        <a href="#" onclick="addToCart('2', 'preworkout ', 39.5 ); return false;">Add to cart</a>
                        <a href="#">Details</a>
                    </div>
                </div>
                <div class="box">
                    <img src="img/p3.png" alt="BODYBUILDING.COM SIGNATURE CLEAR WHEY ISOLATE">
                    <h3>BODYBUILDING.COM SIGNATURE CLEAR WHEY ISOLATE</h3>
                    <span><del>$34.99 </del> - $29.99</span>
                    <div class="content">
                        <a href="#" onclick="addToCart('3', 'isolate ', '$29.99'); return false;">Add to cart</a>
                        <a href="#">Add to cart</a>

                    </div>
                </div>

                <div class="box">
                    <img src="img/p4.png" alt="Controlled Labs Purple Wraath">
                    <h3>Controlled Labs Purple Wraath</h3>
                    <span><del>$48 </del> - $44.25</span>
                    <div class="content">
                        <a href="#" onclick="addToCart('4', 'Controlled Labs Purple Wraath ', '$44.25'); return false;">Add to cart</a>
                        <a href="#">Details</a>
                    </div>
                </div>

                <button type="submit" onClick="redirect()">PAY</button>
                <button onClick="goBack()">GO BACK</button>

        </section>

    </main>
    <script>
        function addToCart(productId, productName, productPrice) {
            // Use JavaScript to submit the form and send data to PHP
            document.getElementById('product_id').value = productId;
            document.getElementById('product_name').value = productName;
            document.getElementById('product_price').value = productPrice;

            // Uncomment the next line to display the values before submission (for debugging)
            console.log(productId, productName, productPrice);

            // Prevent the default form submission
            event.preventDefault();

            document.getElementById('add_to_cart_form').submit();
        }

        function redirect() {
            window.location.href = "viewCart.php";
        }

        function goBack() {
            window.location.href = "index.php";
        }
    </script>

    <form id="add_to_cart_form" method="post" style="display: none;">
        <input type="hidden" id="product_id" name="product_id">
        <input type="hidden" id="product_name" name="product_name">
        <input type="hidden" id="product_price" name="product_price">
        <input type="hidden" name="add_to_cart" value="1">
    </form>

</body>

</html>