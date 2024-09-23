<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sync Supplements</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./style/media.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&family=Montserrat:ital,wght@1,700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
        .products-container .box del {
            color: red;
            text-decoration: line-through;
            font-size: 1.3rem;
            background-color: red;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 10px;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: block;
            width: 100px;
            margin-right: auto;
        }

        .navbar {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .navbar a {
            text-decoration: none;
            color: #ecf0f1;
        }

        .icons {
            display: flex;
            gap: 10px;
        }

        .icons i {
            font-size: 24px;
            color: #ecf0f1;
            cursor: pointer;
        }

        main {
            padding: 20px;
        }

        h2 {
            color: #2c3e50;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            max-width: 400px;
            margin: auto;
        }

        label {
            font-weight: bold;
        }

        textarea,
        select,
        button {
            padding: 10px;
            font-size: 16px;
        }

        button {
            background-color: #2c3e50;
            color: #ecf0f1;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #34495e;
        }

        /* Header styling */
        header {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 10px;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            width: 60px;
            height: 60px;
            margin-right: 10px;
        }

        .navbar {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .navbar a {
            text-decoration: none;
            color: #ecf0f1;
            font-size: 1.2rem;
            font-weight: 500;
            transition: color 0.3s ease-in-out;
        }

        .navbar a:hover {
            color: #3498db;
        }

        .icons {
            display: flex;
            gap: 10px;
        }

        .icons i {
            font-size: 24px;
            color: #ecf0f1;
            cursor: pointer;
            transition: color 0.3s ease-in-out;
        }

        .icons i:hover {
            color: #3498db;
        }

        #search {
            cursor: pointer;
        }

        /* Responsive navigation */
        @media screen and (max-width: 768px) {
            .navbar {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                left: 0;
                width: 100%;
                background-color: #2c3e50;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            .navbar.show {
                display: flex;
            }

            .navbar a {
                padding: 10px;
                text-align: center;
            }

            .icons {
                flex-grow: 1;
                justify-content: flex-end;
            }

            #menu-icon {
                display: block;
                cursor: pointer;
            }
        }
    </style>
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
                <!-- <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>-->
                <!-- <li><a href="#products">Products</a></li> -->
                <!-- <li><a href="#customers">Customers</a></li>  -->
            </ul>
            <!-- icons -->
            <div class="icons">
                <!-- <i class='bx bx-cart-alt' onclick="redirect()"></i> -->
                <i class='bx bx-search' id="search"></i>
            </div>
        </nav>
    </header>
    <main style="margin-top:100px;">

        <div>
            <h1>ORDERED SUCCESSFULLY</h1>
        </div>

        <button onClick="redirect()">GO BACK</button>
    </main>
    <script>
        function redirect() {
            window.location.href = "index.php";
        }
    </script>
</body>

</html>