<?php
include 'header.php';
include 'database.php';
session_start();

if(!isset($_SESSION['login_user'])){
    header("location:signin.php");
    die();
}

echo "<div class='container'>";
echo "<h1>Hi, " . $_SESSION['login_user'] . "!</h1>";
echo "<h4>Here are prices of some cameras that you wanted.</h4>";

// Query to get data from the database
$query = "SELECT * FROM cameras";
$result = mysqli_query($conn, $query);

// Check if the query was successful
if (!$result) {
    die('Query Failed: ' . mysqli_error($conn));
}

// Create a table to display the data
echo "<table class='table'>";
echo "<thead><tr><th>ID</th><th>Model</th><th>Price</th></tr></thead><tbody>";

// Fetch the data from the result
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>{$row['id']}</td><td>{$row['model']}</td><td>{$row['price']}</td></tr>";
}

echo "</tbody></table>";

// Add a logout button
echo "<a href='signout.php' class='btn btn-logout'>Logout</a>";

echo "</div>";

include 'footer.php';
?>
