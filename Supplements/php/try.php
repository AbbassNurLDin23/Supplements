<?php include "db.php" ?>
<?php
session_start();
if (isset($_SESSION['email'])) {
    $em = $_SESSION['email'];
    echo $em;
} else {
    // Handle the case when 'email' key is not set
    echo "Email not set in session.";
}

echo "<del>25 </del> - 30</span>";
?>