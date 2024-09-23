<?php include "db.php" ?>
<?php
session_start();
?>

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
        /* Reset some default styles */
        body,
        h1,
        h2,
        ul,
        p {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Montserrat', sans-serif;
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

        main {
            padding: 20px;
            margin-top: 100px;
        }

        h2 {
            color: #2c3e50;
        }

        ul {
            list-style: none;
            margin-top: 20px;
        }

        li {
            margin-bottom: 10px;
        }

        button {
            padding: 10px;
            font-size: 16px;
            background-color: #2c3e50;
            color: #ecf0f1;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }

        button:hover {
            background-color: #34495e;
        }

        span {
            font-size: 1.2rem;
            margin-top: 10px;
            display: block;
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
            <ul class="navbar">
            </ul>
        </nav>
    </header>
    <main style="margin-top:100px;">
        <?php
        $result = mysqli_query($connection, "SELECT * FROM members");

        if ($result) {
            //fetching database
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['email'] == $_SESSION["email"]) {

                    mysqli_query($connection, "UPDATE members SET member = 'yes' WHERE email = '" . $_SESSION["email"] . "'");
                    echo "success";
                    break;
                }
            }
        }
        ?>
        <div id="appear" style="display:none;">
            <h2>CONGRATULATIONS YOU HAVE JOINED US </h2>
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