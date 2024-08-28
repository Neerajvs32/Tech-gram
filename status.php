<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        /* Add your CSS styles here */
        .status-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .status-button:hover {
            background-color: #0056b3;
        }
        #status-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h1>User Profile</h1>

<!-- Add a button to check application status -->
<button class="status-button" onclick="checkApplicationStatus()">Check Application Status</button>

<!-- Display area for application status -->
<div id="status-container"></div>

<script>
    // Function to fetch application status
    function checkApplicationStatus() {
        // You can replace this URL with the actual path to your PHP script
        var url = 'get_application_status.php';

        // AJAX request to fetch application status
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    displayStatus(response.status);
                } else {
                    console.error('Failed to fetch application status.');
                }
            }
        };
        xhr.open('GET', url, true);
        xhr.send();
    }

    // Function to display application status
    function displayStatus(status) {
        var statusContainer = document.getElementById('status-container');
        statusContainer.innerHTML = '<p>Your application status: ' + status + '</p>';
    }
</script>

</body>
</html>
