<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
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
</head>
<body>
    <div class="container1">
        <h2>Application Form</h2>
        <form action="submit.php" method="POST">
            <!-- Personal Information -->
            <h3>Personal Information</h3>
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required pattern="[A-Za-z\s]+" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="contact">Contact Number:</label>
            <input type="text" id="contact" name="contact" maxlength="10" required pattern="[0-9]{10}" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>

            <label for="aadhar">Aadhar Number:</label>
            <input type="text" id="aadhar" name="aadhar" maxlength="12" required pattern="[0-9]{12}" required>

            <!-- Educational Qualifications -->
            <h3>Educational Qualifications</h3>
            <label for="qualification">Highest Educational Qualification:</label>
            <input type="text" id="qualification" name="qualification" required>

            <label for="institution">Institution/University:</label>
            <input type="text" id="institution" name="institution" required>

            <label for="year">Year of Completion:</label>
            <input type="number" id="year" name="year" required>

            <!-- Professional Experience -->
            <h3>Professional Experience</h3>
            <label for="organization">Previous Organization:</label>
            <input type="text" id="organization" name="organization">

            <label for="position">Position Held:</label>
            <input type="text" id="position" name="position">

            <label for="duration">Duration of Employment:</label>
            <input type="text" id="duration" name="duration">

            <!-- Motivation and Intentions -->
            <h3>Motivation and Intentions</h3>
            <textarea id="motivation" name="motivation" rows="4" required></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>
    <div class="clearfix"></div>
    <!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
</body>
</html>