<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>

	<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container1 {
            width: 100%;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="email"], input[type="number"], select, textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <!-- Include any CSS styles if needed -->
</head>
<body>
<div class="container1">
    <h1>Application Form</h1>
		<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM application_forms ";
$result = $conn->query($sql);

// Display fetched data in an application-like format
if ($result->num_rows > 0) {
    echo "<div style='padding: 20px;'>";
    while($row = $result->fetch_assoc()) {
        echo "<div style='border: 1px solid #ccc; border-radius: 5px; margin-bottom: 20px; padding: 10px;'>";
        echo "<h3>Application ID: " . $row["id"] . "</h3>";
        echo "<p><strong>Full Name:</strong> " . $row["fullname"] . "</p>";
        echo "<p><strong>Date of Birth:</strong> " . $row["dob"] . "</p>";
        echo "<p><strong>Gender:</strong> " . $row["gender"] . "</p>";
        echo "<p><strong>Address:</strong> " . $row["address"] . "</p>";
        echo "<p><strong>Contact:</strong> " . $row["contact"] . "</p>";
        echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
        echo "<p><strong>Aadhar:</strong> " . $row["aadhar"] . "</p>";
        echo "</div>";
    }
    echo "</div>";
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>
</body>
</html>