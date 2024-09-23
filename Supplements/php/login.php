<?php session_start(); ?>
<?php include "db.php" ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM SUPPLEMENTS</title>
    <link rel="stylesheet" href="./style/login.css">
    <style>
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

        .login-container {
            margin-top: 100px;
        }

        .login-input {
            padding: 10px;
            font-size: 16px;
        }

        .login-btn,
        .signup-btn {
            background-color: #2c3e50;
            color: #ecf0f1;
            border: none;
            cursor: pointer;
            padding: 10px;
            font-size: 16px;
        }

        .login-btn:hover,
        .signup-btn:hover {
            background-color: #34495e;
        }

        #toast {
            display: none;
            background-color: #e74c3c;
            color: #fff;
            padding: 10px;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <header>
        <h1>GYM SUPPLEMENTS</h1>
    </header>

    <main>
        <div class="login-container">
            <h2>Login</h2>
            <form id="loginForm" method="POST">
                <input class="login-input" type="email" id="email" placeholder="Email" name="email" required>
                <input class="login-input" type="password" id="password" placeholder="Password" name="password" required>
                <button class="btn login-btn" type="submit">Login</button>
                <button class="btn signup-btn" type="button" onclick="location.href='signup.php'">Sign Up</button>
            </form>
        </div>
        <div id='toast'></div>
        <?php

        //retrieve email and password
        $email = '';
        $password = '';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            $password = $_POST["password"];
        }


        //search if email is in database
        if ($result) {
            $count = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                //if it exists
                if ($row['email'] == $email) {
                    $_SESSION['email'] = $email;
                    $count++;

                    //see if password is correct
                    if ($row["password"] == $password)
                        header("refresh:0;url=index.php");

                    //wrong password
                    else {
                        echo "<script>
                        var toast = document.getElementById('toast');
                        toast.innerHTML = 'WRONG PASSWORD';
                        toast.style.display = 'block';
                        setTimeout(function() {
                            toast.style.display = 'none';
                          }, 3000);
                        </script>";
                        break;
                    }
                }
            }

            //if not in database
            if ($count == 0) {
                echo "<script>
                var toast = document.getElementById('toast');
                toast.innerHTML = 'WRONG EMAIL';
                toast.style.display = 'block';
                setTimeout(function() {
                    toast.style.display = 'none';
                  }, 3000);
                </script>";
            }

            // Free the result set
            mysqli_free_result($result);
        } else {
            echo "Query failed: " . mysqli_error($connection);
        }

        ?>
    </main>

    <footer>
        <p>&copy; 2023 GYM SUPPLEMENTS. All rights reserved.</p>
    </footer>

</body>

</html>