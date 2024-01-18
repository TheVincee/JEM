<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION["user"])) {
    header("Location: Login.php");
    exit();
}

// Include the database connection file
require_once "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"])) {
    // Process signup form
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

    // Validate password and confirm password
    if ($password !== $confirmPassword) {
        echo "Password and Confirm Password do not match.";
        exit();
    }

    // Perform necessary actions (e.g., store data in a database)
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sss", $username, $email, $password);

        if ($stmt->execute()) {
            echo "Signup Successful!";
            // You can redirect to login page or perform other actions after successful signup
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error in preparing the statement: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Create.css">
    <title>Document</title>
</head>
<body>
<body>
    <!-- Container for the Sign-up and Sign-in -->
    <div class="container" id="container">
        <!-- Sign-up form -->
        <div class="form-container sign-up">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <h1>Create Account</h1>
                
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                
                <button type="submit" name="signup">Sign Up</button>
                <a href="Login.php">Already have an account? Sign In</a>
            </form>
        </div>
    </div>
</body>

</body>
</html>