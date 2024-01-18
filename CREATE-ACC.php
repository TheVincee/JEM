<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION["user"])) {
    header("Location: Index.php");
    exit();
}

// Include the database connection file
require_once "Login-con.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["signup"])) {
        // Process signup form
        $firstName = $_POST["first_name"];
        $lastName = $_POST["last_name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Hash the password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Perform necessary actions (e.g., store data in a database)
        $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);

            if ($stmt->execute()) {
                // Signup Successful!
                echo "Signup Successful! Redirecting to Sign In...";
                header("refresh:2;url=SIGN-IN.php"); // Redirect to SIGN-IN.php after 2 seconds
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error in preparing the statement: " . $conn->error;
        }
    } elseif (isset($_POST["signin"])) {
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
                header("Location: SIGN-IN.php");  // Redirect to the index page
                exit();
            } else {
                echo "Invalid credentials";
            }

            $stmt->close();
        } else {
            echo "Error in preparing the statement: " . $conn->error;
        }
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../CSS/CREATE.css">
</head>

<body>
    <!-- Container for the Sign-up and Sign-in -->
    <div class="container" id="container">
        <!-- Sign-up form -->
        <h1>Sign In</h1>

        <div class="form-container sign-up">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                
                <input type="text" name="first_name" placeholder="First name" autocomplete="off" required >
                <input type="text" name="last_name" placeholder="Last name" required >
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm_password" placeholder="Confirm password" required>
                <button type="submit" name="signup">Sign Up</button>
            </form>
        </div>        
</body>

</html>