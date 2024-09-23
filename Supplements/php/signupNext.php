<style>
    body {
        font-family: 'Montserrat', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }

    h1 {
        text-align: center;
        color: #2c3e50;
        margin-top: 50px;
        /* Adjust as needed */
    }

    .btn {
        padding: 10px;
        font-size: 16px;
        background-color: #3498db;
        color: #fff;
        border: none;
        cursor: pointer;
        margin-top: 20px;
        /* Adjust as needed */
    }

    .btn:hover {
        background-color: #2980b9;
    }
</style>

<?php
session_start();

//retrieve data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["firstName"] = $_POST["firstName"];
    $_SESSION["lastName"] = $_POST["lastName"];
    $_SESSION["phoneNumber"] = $_POST["phoneNumber"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["password"] = $_POST["password"];
    $_SESSION["cid"] = $_POST["cid"];
}

//connect to database
$connection = @mysqli_connect("localhost", "root", "159753", "customers");
if (!$connection) {
    die("connection failed" . mysqli_connect_error());
}


$result = mysqli_query($connection, "SELECT * FROM members");


if ($result) {

    $t = 0;
    //fetching database
    while ($row = mysqli_fetch_assoc($result)) {

        //search if email is in database
        if ($row['email'] == $_SESSION["email"]) {
            $t++;
            echo '<h1>INVALID EMAIL</h1>
                <link rel="stylesheet" href="back.css">
                <button class="btn signup-btn" onclick="goBack()">Go Back</button>
                <script>function goBack() {window.history.back();}</script>';
            // header("refresh:300;url=login.php");
            break;
        }
        if ($row['cid'] == $_SESSION["cid"]) {
            $t++;
            echo '<h1>INVALID ID</h1>
                <link rel="stylesheet" href="back.css">
                <button class="btn signup-btn" onclick="goBack()">Go Back</button>
                <script>function goBack() {window.history.back();}</script>';
            // header("refresh:300;url=login.php");
            break;
        }
    }

    if ($t == 0) {
        //add to database
        $add = "INSERT INTO members 
    (firstName, lastName, phoneNumber, email, password, member,cid) 
    VALUES 
    ('{$_SESSION["firstName"]}', '{$_SESSION["lastName"]}', '{$_SESSION["phoneNumber"]}', 
    '{$_SESSION["email"]}', '{$_SESSION["password"]}', 'no', '{$_SESSION["cid"]}')";

        if (!mysqli_query($connection, $add)) {
            echo "error: " . mysqli_error($connection);
        };

        //go to main page
        header("refresh:0;url=index.php");
    }
}
?>