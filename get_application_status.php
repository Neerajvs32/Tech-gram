<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "tms");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch application status
$sql = "SELECT status FROM application_forms WHERE user_id = '' "; // Replace 123 with the user ID or identifier
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Return application status as JSON
    $row = mysqli_fetch_assoc($result);
    echo json_encode(['status' => $row['status']]);
} else {
    // No application found for the user
    echo json_encode(['status' => 'Not found']);
}

// Close database connection
mysqli_close($conn);
?>
