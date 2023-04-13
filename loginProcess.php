<?php
session_start();
include 'database.php';

if(isset($_POST['save'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Get user information from the database based on email
    $stmt = $conn->prepare("SELECT * FROM register WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_pass = $row["Password"];

        // Check if password is correct using password_verify()
        if(password_verify($pass, $hashed_pass)) {
            // Password is correct, start a new session
            $_SESSION["user_id"] = $row["ID"];
            $_SESSION["user_email"] = $row["Email"];
            // Redirect to dashboard page
            header("Location: dashboard.php");
        } else {
            // Password is incorrect
            $error = "Invalid Password";
        }
    } else {
        // User does not exist
        $error = "User not found";
    }
}

if(isset($error)) {
    echo $error;
}
?>
