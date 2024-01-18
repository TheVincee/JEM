<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION["user"])) {
    header("Location: index.php");
    exit();
}

// Include the database connection file
require_once "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signin"])) {
    // Process signin form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform necessary actions (e.g., check credentials against the database)
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user && password_verify($password, $user['password'])) {
            echo "Signin Successful!";
            // Save user information in the session
            $_SESSION["user"] = $user;
            header("Location: index.php");  // Redirect to the index page
            exit();
        } else {
            echo "Invalid credentials";
        }

        $stmt->close();
    } else {
        echo "Error in preparing the statement: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <title>Sign In</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-in">
            <form action="login.php" method="post">
                <h1>Sign In</h1>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <a href="#">Forget Your Password?</a>
                <button type="submit" name="signin">Sign In</button>
                <a href="Create.php">Create</a>
            </form>
        </div>
    </div>
</body>

</html>
