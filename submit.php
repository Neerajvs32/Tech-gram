<?php
// Step 1: Establish a connection to the database
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

// Step 2: Retrieve form data using $_POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Step 3: Sanitize and validate form data
    $id = isset($_POST['id']) ? mysqli_real_escape_string($conn, $_POST['id']) : null;
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $aadhar = mysqli_real_escape_string($conn, $_POST['aadhar']);

    // Step 4: Execute SQL query to insert data into the database
    $sql = "INSERT INTO application_forms (id, fullname, dob, gender, address, contact, email, aadhar)
            VALUES ('$id','$fullname', '$dob', '$gender', '$address', '$contact', '$email', '$aadhar')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Step 5: Close the database connection
$conn->close();
?>