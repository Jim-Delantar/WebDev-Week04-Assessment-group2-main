<?php
// Start the session so we can access the values stored earlier
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding-top: 50px;
            display: flex;
            justify-content: center;
        }
        .welcome-container {
            background-color: #ffffff;
            padding: 25px 35px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
            width: 350px;
            text-align: center;
        }
        h2 {
            color: #333;
        }
        a.button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        a.button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="welcome-container">
        <?php
        // Check if the session value exists before displaying it
        if (isset($_SESSION['name'])) {
            // Retrieve the stored session value and display it
            echo "<h2>Welcome, " . $_SESSION['name'] . "!</h2>";
            echo "<p>This name was carried over from process.php using PHP sessions.</p>";
        } else {
            // If no session data is found, tell the user to submit the form first
            echo "<h2>No session data found.</h2>";
            echo "<p>Please submit the form first.</p>";
        }
        ?>

        <a class="button" href="index.html">Back to Form</a>
    </div>

</body>
</html>