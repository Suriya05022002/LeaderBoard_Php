<?php
// Database connection settings
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "leaderboard";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
// Fetch data from the database
$sql = "SELECT customer_name, customer_image, location, order_date, status, amount FROM customer_orders";
$result = $conn->query($sql);

// Display the data
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Customer Name</th><th>Image</th><th>Location</th><th>Order Date</th><th>Status</th><th>Amount</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["customer_name"] . "</td>";
        echo "<td><img src='" . $row["customer_image"] . "' alt='Customer Image' style='width:50px; height:50px;'></td>";
        echo "<td>" . $row["location"] . "</td>";
        echo "<td>" . $row["order_date"] . "</td>";
        echo "<td>" . $row["status"] . "</td>";
        echo "<td>" . $row["amount"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No records found";
}
// Close the connection
$conn->close();
?>
