<?php
$servername = "localhost";
$username = "root";         // Default MySQL username in XAMPP
$password = "";             // Default MySQL password in XAMPP
$dbname = "ai_quotes";      // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to get a random quote
$sql = "SELECT * FROM quotes ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

// Return quote as JSON
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    echo json_encode(["quote_text" => "No quotes found.", "author" => ""]);
}

// Close connection
$conn->close();
?>
