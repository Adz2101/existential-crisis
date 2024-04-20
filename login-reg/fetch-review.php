<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login_register";

// Establish database connection
$conn = mysqli_connect($hostName, $dbUser, $dbPassword);
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Select the database
if (!mysqli_select_db($conn, $dbName)) {
    die("Database selection failed: " . mysqli_error($conn));
}

// Fetch review data from the database with unique aliases for tables
$query = "SELECT m.subject AS subject, r.riskMapping AS risk, c.controls AS controls
          FROM message m
          INNER JOIN risk r ON m.id = r.message_id
          INNER JOIN controls c ON r.control_id = c.id"; // Adjust this query based on your database schema
$result = mysqli_query($conn, $query);

// Check if the query was successful
if (!$result) {
    die("Database query failed: " . mysqli_error($conn));
}

// Fetch and display the review data in the table
$tableContent = "";
while ($row = mysqli_fetch_assoc($result)) {
    $subject = $row['subject']; // Assuming 'Subject' is the column name for subject
    $riskMapping = $row['risk']; // Assuming 'riskMapping' is the column name for risk mapping
    $controls = $row['controls']; // Assuming 'Controls' is the column name for controls

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

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content -->
</head>
<body>
    <!-- HTML body content -->
    <table id="review-table">
        <tr>
            <th>Subject</th>
            <th>Risk Mapping</th>
            <th>Controls</th>
            <th>Status</th>
        </tr>
        <?php echo $tableContent; ?>
    </table>
</body>
</html>