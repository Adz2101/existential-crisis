<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection code (replace with your actual database connection code)
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login_register"; // Specify the database name

// Create connection
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName); // Include the database name in the connection

// Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Fetch review data from the database with unique aliases for tables
$query = "SELECT m.subject AS Subject, r.riskMapping AS Risk, c.Controls AS Controls
          FROM message m
          INNER JOIN risk r ON m.riskMapping = r.riskMapping
          LEFT JOIN controls c ON r.id = c.risk_id"; // Adjust this query based on your database schema
$result = mysqli_query($conn, $query);

// Check if the query was successful
if (!$result) {
    die("Database query failed: " . mysqli_error($conn));
}

// Fetch and display the review data in the table
$tableContent = "";
while ($row = mysqli_fetch_assoc($result)) {
    $subject = $row['Subject']; // Assuming 'Subject' is the column name for subject
    $riskMapping = $row['Risk']; // Assuming 'riskMapping' is the column name for risk mapping
    $controls = $row['Controls']; // Assuming 'Controls' is the column name for controls

    // Append the table row with review data
    $tableContent .= "<tr>";
    $tableContent .= "<td>$subject</td>";
    $tableContent .= "<td>$riskMapping</td>";
    $tableContent .= "<td>$controls</td>";
    $tableContent .= "<td></td>"; // Placeholder for Status since it's not in the query
    $tableContent .= "</tr>";
}

// Close the database connection
mysqli_close($conn);
?>
