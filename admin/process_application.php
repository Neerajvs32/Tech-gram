<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "tms");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if action and ID are set in the URL
if (isset($_GET['action']) && isset($_GET['id'])) {
    $action = $_GET['action'];
    $application_id = $_GET['id'];

    // Update application status based on the action
    if ($action === 'approve') {
        $status = 'Approved';
        $message = "Application approved successfully.";
    } elseif ($action === 'cancel') {
        $status = 'Cancelled';
        $message = "Application cancelled successfully.";
    } else {
        // Invalid action, redirect back to the admin panel
        header("Location: admin_manage_forms.php");
        exit();
    }

    // Update application status in the database
    $update_sql = "UPDATE application_forms SET status = '$status' WHERE id = '$application_id'";
    if (mysqli_query($conn, $update_sql)) {
        // Status updated successfully, redirect back to the admin panel with success message
        header("Location: admin_manage_forms.php?msg=" . urlencode($message));
        exit();
    } else {
        // Error updating status, redirect back to the admin panel with an error message
        header("Location: admin_manage_forms.php?error=1");
        exit();
    }
} else {
    // Action or ID not set, redirect back to the admin panel
    header("Location: admin_manage_forms.php");
    exit();
}

// Close database connection
mysqli_close($conn);
?>
