<?php

$connection = @mysqli_connect("localhost", "root", "159753", "customers");
if (!$connection) {
    die("connection failed" . mysqli_connect_error());
}

$result = mysqli_query($connection, "SELECT * FROM members");
