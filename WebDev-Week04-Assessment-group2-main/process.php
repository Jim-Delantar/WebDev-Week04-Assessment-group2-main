<?php
// Start the session so we can store data that will persist to welcome.php
session_start();

// Retrieve the submitted values from the form using $_POST
$name = $_POST['name'];
$email = $_POST['email'];
$year_level = $_POST['year_level'];

// Validate that the required fields are not empty
if (empty($name) || empty($email) || empty($year_level)) {

    // If any required field is missing, show a validation message
    // and stop the script from continuing as if it succeeded.
    echo "<!DOCTYPE html><html><head><title>Validation Error</title></head><body>";
    echo "<h2 style='color:red;'>Please fill in all required fields.</h2>";
    echo "<p><a href='index.html'>Go back to the form</a></p>";
    echo "</body></html>";

    // Stop the rest of the script from executing
    exit();
}

// If validation passes, store the submitted information in an associative array
$studentInfo = array(
    "Name" => $name,
    "Email" => $email,
    "Year Level" => $year_level
);

// Store the name in the session so it can be used on welcome.php
$_SESSION['name'] = $name;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Processing Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding-top: 50px;
            display: flex;
            justify-content: center;
        }
        .result-container {
            background-color: #ffffff;
            padding: 25px 35px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
            width: 350px;
        }
        h2 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding-left: 0;
        }
        li {
            padding: 6px 0;
            border-bottom: 1px solid #eee;
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

    <div class="result-container">
        <h2>Submitted Information</h2>

        <ul>
            <?php
            // Use a foreach loop to display the contents of the array
            foreach ($studentInfo as $field => $value) {
                echo "<li><strong>$field:</strong> $value</li>";
            }
            ?>
        </ul>

        <p>Your information was submitted successfully.</p>

        <!-- Link to the second page that demonstrates session persistence -->
        <a class="button" href="welcome.php">Go to Welcome Page</a>
    </div>

</body>
</html>