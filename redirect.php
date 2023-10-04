<?php
// Check if the login credentials are correct (replace with your own logic)
$correctUsername = "Pankaj";
$correctPassword = "Pankaj18";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredUsername = $_POST["Pankaj"];
    $enteredPassword = $_POST["Pankaj18"];

    if ($enteredUsername === $correctUsername && $enteredPassword === $correctPassword) {
        // Redirect to the new home page upon successful login
        header("Location: 
       https://www.examplecom/", true,301);
        exit();
    } else {
        // Handle incorrect login credentials (e.g., display an error message)
        $errorMessage = "Invalid username or password.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your HTML head content here -->
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <!-- Your login form HTML content here -->
    
                </div>
            </div>
        </div>
    </div>
</body>
</html>
